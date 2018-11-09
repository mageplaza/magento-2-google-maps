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
    const STYLE_DEFAULT = -1;
    const STYLE_1       = 1;
    const STYLE_2       = 2;
    const STYLE_3       = 3;
    const STYLE_4       = 4;
    const STYLE_5       = 5;
    const STYLE_6       = 6;
    const STYLE_7       = 7;
    const STYLE_8       = 8;

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
            self::STYLE_DEFAULT => __('Default'),
            self::STYLE_1       => __('Style 1'),
            self::STYLE_2       => __('Style 2'),
            self::STYLE_3       => __('Style 3'),
            self::STYLE_4       => __('Style 4'),
            self::STYLE_5       => __('Style 5'),
            self::STYLE_6       => __('Style 6'),
            self::STYLE_7       => __('Style 7'),
            self::STYLE_8       => __('Style 8')
        ];
    }
}
