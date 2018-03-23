<?php
/**
 * This file is part of OXID eSales PayPal module.
 *
 * OXID eSales PayPal module is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * OXID eSales PayPal module is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with OXID eSales PayPal module.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      http://www.oxid-esales.com
 * @copyright (C) OXID eSales AG 2003-2017
 */

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = array(
    'id'           => 'oxac_datetime',
    'title'        => 'Widget-Beispiel',
    'description'  => '',
    'thumbnail'    => 'logo.jpg',
    'version'      => '1.0.0',
    'author'       => 'OXID eSales AG',
    'url'          => 'http://www.oxid-esales.com',
    'email'        => 'info@oxid-esales.com',
    'extend'       => array(
    ),
    'controllers' => array(
        'oxac_datetime_widget' => \OxidAcademy\DatetimeModule\Component\Widget\oxac_datetime_widget::class
    ),
    'events'       => array(
    ),
    'templates' => array(
        'oxac_datetime_widget.tpl'  =>  'oxac/oxac_datetime/views/widget/oxac_datetime_widget.tpl'
    ),
    'blocks' => array(
        array(
            'template'  =>  'layout/header.tpl',
            'block'     =>  'layout_header_logo',
            'file'      =>  'views/blocks/layout_header_logo.tpl',
        )
     ),
    'settings' => array(
    )
);
