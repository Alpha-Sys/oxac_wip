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
 * @copyright (C) OXID eSales AG 2003-2018
 */

/**
 * Metadata version
 */
$sMetadataVersion = '2.1';

/**
 * Module information
 */
$aModule = array(
    'id'           => 'oxac_admin',
    'title'        => 'Admin Erweiterung',
    'description'  => array(
        'de' => 'Admin Erweiterung.'
    ),
    'thumbnail'    => 'logo.jpg',
    'version'      => '1.0.0',
    'author'       => 'OXID eSales AG',
    'url'          => 'https://www.oxid-esales.com',
    'email'        => 'info@oxid-esales.com',
    'extend'       => array(
    ),
    'controllers' => array(
    ),
    'events'       => array(
        'onActivate'    => '\OxidAcademy\AdminModule\Core\Events::onActivate',
        'onDeactivate'    => '\OxidAcademy\AdminModule\Core\Events::onDeactivate'
    ),
    'templates' => array(
    ),
    'blocks' => array(
        array('template' => 'article_main.tpl',
            'block' => 'admin_article_main_form',
            'file' => 'views/blocks/admin_article_main_form.tpl')
     ),
    'settings' => array(
    )
);
