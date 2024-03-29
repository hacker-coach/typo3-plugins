<?php
namespace Infochy\InfochyContent\Controller;

/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2016
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * ContentController
 */
class ContentController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * contentRepository
     *
     * @var \Infochy\InfochyContent\Domain\Repository\ContentRepository
     * @inject
     */
    protected $contentRepository = NULL;

    /**
     * action list
     *
     * @param Infochy\InfochyContent\Domain\Model\Content
     * @return void
     */
    public function listAction()
    {
        $this->contentRepository->setStoragePageId($this->getFirstStoragePidFromFlexForm());
        $contents = $this->contentRepository->findByPid($this->getFirstStoragePidFromFlexForm());
        $this->view->assign('contents', $contents);
    }

    /**
     * action show
     *
     * @param Infochy\InfochyContent\Domain\Model\Content
     * @return void
     */
    public function showAction(\Infochy\InfochyContent\Domain\Model\Content $content)
    {
        #$this->debug($content);
        $this->view->assign('content', $content);
    }

    /**
     * action new
     *
     * @param Infochy\InfochyContent\Domain\Model\Content
     * @return void
     */
    public function newAction()
    {

    }

    /**
     * action create
     *
     * @param Infochy\InfochyContent\Domain\Model\Content
     * @return void
     */
    public function createAction(\Infochy\InfochyContent\Domain\Model\Content $newContent)
    {
        $this->addFlashMessage('The object was created. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->contentRepository->setStoragePageId($this->getFirstStoragePidFromFlexForm());
        $this->contentRepository->add($newContent);
        $this->redirect('list');
    }

    /**
     * action edit
     *
     * @param Infochy\InfochyContent\Domain\Model\Content
     * @ignorevalidation $content
     * @return void
     */
    public function editAction(\Infochy\InfochyContent\Domain\Model\Content $content)
    {
        $this->view->assign('content', $content);
    }

    /**
     * action update
     *
     * @param Infochy\InfochyContent\Domain\Model\Content
     * @return void
     */
    public function updateAction(\Infochy\InfochyContent\Domain\Model\Content $content)
    {
        $this->addFlashMessage('The object was updated. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->contentRepository->setStoragePageId($this->getFirstStoragePidFromFlexForm());
        $this->contentRepository->update($content);
        $this->redirect('list');
    }

    /**
     * action delete
     *
     * @param Infochy\InfochyContent\Domain\Model\Content
     * @return void
     */
    public function deleteAction(\Infochy\InfochyContent\Domain\Model\Content $content)
    {
        $this->addFlashMessage('The object was deleted. Please be aware that this action is publicly accessible unless you implement an access check. See http://wiki.typo3.org/T3Doc/Extension_Builder/Using_the_Extension_Builder#1._Model_the_domain', '', \TYPO3\CMS\Core\Messaging\AbstractMessage::ERROR);
        $this->contentRepository->setStoragePageId($this->getFirstStoragePidFromFlexForm());
        $this->contentRepository->remove($content);
        $this->redirect('list');
    }

    protected function getFirstStoragePidFromFlexForm()
    {
        $pages = explode(',', $this->configurationManager->getContentObject()->data['pages']);
        return (int)$pages[0];
    }

    private function debug($mixedValue)
    {
        \TYPO3\CMS\Extbase\Utility\DebuggerUtility::var_dump($mixedValue);
    }
}
