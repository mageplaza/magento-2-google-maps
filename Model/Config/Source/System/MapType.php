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

namespace Mageplaza\GoogleMaps\Model\Config\Source\System;

use Magento\Framework\Option\ArrayInterface;

/**
 * Class MapType
 * @package Mageplaza\GoogleMaps\Model\Config\Source\System
 */
class MapType implements ArrayInterface
{
    const TYPE_ROAD_MAP  = 'roadmap';
    const TYPE_TERRAIN   = 'terrain';
    const TYPE_SATELLITE = 'satellite';
    const TYPE_HYBRID    = 'hybrid';

    /**
     * @return array
     */
    public function toOptionArray()
    {
        $options = [];
        foreach ($this->toArray() as $value => $label) {
            $options[] = [
                'value' => $value,
                'label' => $label
            ];
        }

        return $options;
    }

    /**
     * Get options in "key-value" format
     *
     * @return array
     */
    public function toArray()
    {
        return [
            self::TYPE_ROAD_MAP  => __('Roadmap'),
            self::TYPE_TERRAIN   => __('Terrain'),
            self::TYPE_SATELLITE => __('Satellite'),
            self::TYPE_HYBRID    => __('Hybrid')
        ];
    }
}
