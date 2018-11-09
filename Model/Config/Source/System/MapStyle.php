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
 * Class MapStyle
 * @package Mageplaza\GoogleMaps\Model\Config\Source\System
 */
class MapStyle implements ArrayInterface
{
    const STYLE_DEFAULT          = 'default';
    const STYLE_BLUE_ESSENCE     = 'blue-essence';
    const STYLE_DARK_GREEN       = 'dark-green';
    const STYLE_DARK_GREY        = 'dark-grey';
    const STYLE_DESERT           = 'desert';
    const STYLE_LIGHT_BLUE_WATER = 'light-blue-water';
    const STYLE_LIGHT_DREAM      = 'light-dream';
    const STYLE_LIGHT_GREY       = 'light-grey';
    const STYLE_MID_NIGHT        = 'mid-night';
    const STYLE_NATURE_COLOR     = 'nature-color';

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
            self::STYLE_DEFAULT          => __('Default'),
            self::STYLE_BLUE_ESSENCE     => __('Blue Essence'),
            self::STYLE_DARK_GREEN       => __('Dark Green'),
            self::STYLE_DARK_GREY        => __('Dark Grey'),
            self::STYLE_DESERT           => __('Desert'),
            self::STYLE_LIGHT_BLUE_WATER => __('Light Blue Water'),
            self::STYLE_LIGHT_DREAM      => __('Light Dream'),
            self::STYLE_LIGHT_GREY       => __('Light Grey'),
            self::STYLE_MID_NIGHT        => __('Mid Night'),
            self::STYLE_NATURE_COLOR     => __('Nature Color')
        ];
    }
}
