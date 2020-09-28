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

namespace Mageplaza\GoogleMaps\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Widget\Block\BlockInterface;
use Mageplaza\GoogleMaps\Helper\Data;

/**
 * Class Map
 * @package Mageplaza\GoogleMaps\Block
 */
class Map extends Template implements BlockInterface
{
    /**
     * @var string
     */
    protected $_template = 'Mageplaza_GoogleMaps::map.phtml';

    /**
     * @var Data
     */
    public $helperData;

    /**
     * Map constructor.
     *
     * @param Context $context
     * @param Data $helperData
     * @param array $data
     */
    public function __construct(
        Context $context,
        Data $helperData,
        array $data = []
    ) {
        $this->helperData = $helperData;

        parent::__construct($context, $data);
    }

    /**
     * Get map API key from system config
     *
     * @return mixed
     */
    public function getMapApi()
    {
        return $this->helperData->getMapConfig('api_key');
    }

    /**
     * Get map Latitude from system config
     *
     * @return mixed
     */
    public function getMapLatitude()
    {
        return $this->helperData->getMapConfig('location_setting/latitude');
    }

    /**
     * Get map Longitude from system config
     *
     * @return mixed
     */
    public function getMapLongitude()
    {
        return $this->helperData->getMapConfig('location_setting/longitude');
    }

    /**
     * Get map Marker Icon Url from system config
     *
     * @return bool|string
     */
    public function getMapMarkerIcon()
    {
        return $this->helperData->getMarkerUrl();
    }

    /**
     * Get map Zoom default value from system config
     *
     * @return int
     */
    public function getMapZoomDefault()
    {
        return ((int) $this->helperData->getMapConfig('zoom_default')) ?: 20;
    }

    /**
     * Get map Type from system config
     *
     * @return string
     */
    public function getMapTypeId()
    {
        return $this->helperData->getMapConfig('map_type') ?: 'roadmap';
    }

    /**
     * Is draggable map from system config
     *
     * @return mixed
     */
    public function isMapDraggable()
    {
        return $this->helperData->getMapConfig('allow_drag');
    }

    /**
     * Get map Protocol from system config
     *
     * @return mixed
     */
    public function getProtocol()
    {
        return $this->helperData->getMapConfig('protocol');
    }

    /**
     * Get map Embed code from system config
     *
     * @return mixed
     */
    public function getEmbedCode()
    {
        return $this->helperData->getMapConfig('embed_code');
    }

    /**
     * @return false|string
     */
    public function getMapTemplate()
    {
        $mapStyle = $this->helperData->getMapConfig('map_style');

        return Data::jsonEncode($this->helperData->getMapTheme($mapStyle));
    }

    /**
     * @return bool
     */
    public function isEnabled()
    {
        return $this->helperData->isEnabled();
    }
}
