<?php
/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Mageplaza.com license that is
 * available through the world-wide-web at this URL:
 * https://www.mageplaza.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Mageplaza
 * @package     Mageplaza_GoogleMaps
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

namespace Mageplaza\GoogleMaps\Helper;

use Magento\Framework\Filesystem;
use Magento\Framework\App\Helper\Context;
use Magento\Framework\ObjectManagerInterface;
use Magento\Framework\App\Filesystem\DirectoryList;
use Magento\Store\Model\StoreManagerInterface;
use Mageplaza\Core\Helper\AbstractData;

/**
 * Class Data
 * @package Mageplaza\GoogleMaps\Helper
 */
class Data extends AbstractData
{
    const CONFIG_MODULE_PATH = 'googlemaps';

    /**
     * @var Filesystem
     */
    protected $_fileSystem;

    /**
     * @var DirectoryList
     */
    protected $_directoryList;

    /**
     * @var Image
     */
    protected $_helperImage;

    /**
     * Data constructor.
     *
     * @param Context $context
     * @param ObjectManagerInterface $objectManager
     * @param StoreManagerInterface $storeManager
     * @param Filesystem $filesystem
     * @param DirectoryList $directoryList
     * @param Image $helperImage
     */
    public function __construct(
        Context $context,
        ObjectManagerInterface $objectManager,
        StoreManagerInterface $storeManager,
        Filesystem $filesystem,
        DirectoryList $directoryList,
        Image $helperImage
    )
    {
        $this->_fileSystem    = $filesystem;
        $this->_directoryList = $directoryList;
        $this->_helperImage   = $helperImage;

        parent::__construct($context, $objectManager, $storeManager);
    }

    /**
     * Get map settings system config
     *
     * @param $code
     * @param null $storeId
     * @return mixed
     */
    public function getMapConfig($code, $storeId = null)
    {
        $code = ($code !== '') ? '/' . $code : '';

        return $this->getModuleConfig('map_setting' . $code, $storeId);
    }

    /**
     * Get custom marker icon Url
     *
     * @return bool|string
     */
    public function getMarkerUrl()
    {
        if ($this->getMapConfig('marker_icon')) {
            return $this->_helperImage->getBaseMediaUrl() . '/' . $this->_helperImage->getMediaPath($this->getMapConfig('marker_icon'), 'marker_icon');
        } else {
            return '';
        }
    }

    /**
     * @param $fileName
     * @return string
     * @throws \Magento\Framework\Exception\FileSystemException
     */
    public function getMapTheme($fileName)
    {
        return $this->readFile($this->getTemplatePath($fileName));
    }

    /**
     * @param $relativePath
     * @return string
     * @throws \Magento\Framework\Exception\FileSystemException
     */
    public function readFile($relativePath)
    {
        $rootDirectory = $this->_fileSystem->getDirectoryRead(DirectoryList::ROOT);

        return $rootDirectory->readFile($relativePath);
    }

    /**
     * @param $fileName
     * @param string $type
     * @return string
     */
    public function getTemplatePath($fileName, $type = '.json')
    {
        /** Get directory of Data.php */
        $currentDir = __DIR__;

        /** Get root directory(path of magento's project folder) */
        $rootPath = $this->_directoryList->getRoot();

        $currentDirArr = explode('\\', $currentDir);
        if (count($currentDirArr) == 1) {
            $currentDirArr = explode('/', $currentDir);
        }

        $rootPathArr = explode('/', $rootPath);
        if (count($rootPathArr) == 1) {
            $rootPathArr = explode('\\', $rootPath);
        }

        $basePath = '';
        for ($i = count($rootPathArr); $i < count($currentDirArr) - 1; $i++) {
            $basePath .= $currentDirArr[$i] . '/';
        }

        $templatePath = $basePath . 'view/base/web/map-style/';

        return $templatePath . $fileName . $type;
    }
}