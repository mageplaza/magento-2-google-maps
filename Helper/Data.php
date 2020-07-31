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

use Magento\Framework\App\Helper\Context;
use Magento\Framework\Exception\NoSuchEntityException;
use Magento\Framework\ObjectManagerInterface;
use Magento\Store\Model\StoreManagerInterface;
use Mageplaza\Core\Helper\AbstractData;
use Mageplaza\GoogleMaps\Model\Config\Source\System\MapStyle;

/**
 * Class Data
 * @package Mageplaza\GoogleMaps\Helper
 */
class Data extends AbstractData
{
    const CONFIG_MODULE_PATH = 'mpgooglemaps';

    /**
     * @var MapStyle
     */
    protected $_mapStyleData;

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
     * @param Image $helperImage
     * @param MapStyle $mapStyleData
     */
    public function __construct(
        Context $context,
        ObjectManagerInterface $objectManager,
        StoreManagerInterface $storeManager,
        Image $helperImage,
        MapStyle $mapStyleData
    ) {
        $this->_helperImage  = $helperImage;
        $this->_mapStyleData = $mapStyleData;

        parent::__construct($context, $objectManager, $storeManager);
    }

    /**
     * Get map settings system config
     *
     * @param $code
     * @param null $storeId
     *
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
     * @return string
     * @throws NoSuchEntityException
     */
    public function getMarkerUrl()
    {
        if ($this->getMapConfig('marker_icon')) {
            return $this->_helperImage->getBaseMediaUrl() . '/'
                . $this->_helperImage->getMediaPath($this->getMapConfig('marker_icon'), 'marker_icon');
        }

        return '';
    }

    /**
     * @param $styleName
     *
     * @return string
     */
    public function getMapTheme($styleName)
    {
        return $this->_mapStyleData->getMapData($styleName);
    }
}
