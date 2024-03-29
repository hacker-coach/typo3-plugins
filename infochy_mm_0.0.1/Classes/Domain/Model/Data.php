<?php
namespace Infochy\InfochyMm\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2017 Micha Barthel <mb@infochy.de>, infochy
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
 * Data
 */
class Data extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     *
     * @var string
     */
    protected $title = '';
    
    /**
     * content
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Infochy\InfochyMm\Domain\Model\Content>
     */
    protected $content = null;
    
    /**
     * __construct
     */
    public function __construct()
    {
        //Do not remove the next line: It would break the functionality
        $this->initStorageObjects();
    }
    
    /**
     * Initializes all ObjectStorage properties
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    protected function initStorageObjects()
    {
        $this->content = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }
    
    /**
     * Returns the title
     *
     * @return string $title
     */
    public function getTitle()
    {
        return $this->title;
    }
    
    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }
    
    /**
     * Adds a Content
     *
     * @param \Infochy\InfochyMm\Domain\Model\Content $content
     * @return void
     */
    public function addContent(\Infochy\InfochyMm\Domain\Model\Content $content)
    {
        $this->content->attach($content);
    }
    
    /**
     * Removes a Content
     *
     * @param \Infochy\InfochyMm\Domain\Model\Content $contentToRemove The Content to be removed
     * @return void
     */
    public function removeContent(\Infochy\InfochyMm\Domain\Model\Content $contentToRemove)
    {
        $this->content->detach($contentToRemove);
    }
    
    /**
     * Returns the content
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Infochy\InfochyMm\Domain\Model\Content> $content
     */
    public function getContent()
    {
        return $this->content;
    }
    
    /**
     * Sets the content
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Infochy\InfochyMm\Domain\Model\Content> $content
     * @return void
     */
    public function setContent(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $content)
    {
        $this->content = $content;
    }

}