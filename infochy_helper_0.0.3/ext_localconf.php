<?php
if (!defined('TYPO3_MODE')) {
    die('Access denied.');
}


\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter('Infochy\\InfochyHelper\\Property\\TypeConverter\\UploadedFileReferenceConverter');
\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerTypeConverter('Infochy\\InfochyHelper\\Property\\TypeConverter\\ObjectStorageConverter');

