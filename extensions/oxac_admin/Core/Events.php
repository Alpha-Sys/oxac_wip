<?php

namespace OxidAcademy\AdminModule\Core;

/**
 * Class defines what module does on Shop events.
 */
class Events
{
    /**
     * Add missing field if it activates on old DB
     */
    public static function addMissingFieldsOnUpdate()
    {
        $dbMetaDataHandler = oxNew(\OxidEsales\Eshop\Core\DbMetaDataHandler::class);

        $tableFields = array(
            'oxarticles' => array('OXAC_EXTPRODUCTURLLABEL', 'OXAC_EXTPRODUCTURLLABEL_1', 'OXAC_EXTPRODUCTURLLABEL_2', 'OXAC_EXTPRODUCTURL'),
        );

        foreach ($tableFields as $tableName => $fieldNames) {
            foreach($fieldNames as $fieldName){
                if (!$dbMetaDataHandler->fieldExists($fieldName, $tableName)) {
                    \OxidEsales\Eshop\Core\DatabaseProvider::getDb()->execute(
                        "ALTER TABLE `" . $tableName
                        . "` ADD `" . $fieldName . "` VARCHAR( 255 ) NOT NULL DEFAULT '';"
                    );
                }
            }
        }
    }


    /**
     * Execute action on activate event
     */
    public static function onActivate()
    {
        self::addMissingFieldsOnUpdate();
    }


    /**
     * Execute action on deactivate event
     *
     * @return null
     */
    public static function onDeactivate()
    {

    }
}
