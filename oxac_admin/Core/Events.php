<?php

namespace OxidAcademy\AdminModule\Core;

/**
 * Class defines what module does on Shop events.
 */
class Events
{

    /**
     * Add new fields
     */
    public static function addNewFields()
    {
        $dbMetaDataHandler = oxNew(\OxidEsales\Eshop\Core\DbMetaDataHandler::class);

        $tableFields = array(
            'oxarticles' => array('OXACNUMBER' ,'OXACINFO', 'OXACINFO_1', 'OXACINFO_2', 'OXACINFO_3')
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

        //alternativ pro alter statement execute aufrufen
        //\OxidEsales\Eshop\Core\DatabaseProvider::getDb()->execute($query);
    }


    /**
     * Execute action on activate event
     */
    public static function onActivate()
    {
        self::addNewFields();
    }


    /**
     * Execute action on deactivate event
     *
     * @return null
     */
    public static function onDeactivate()
    {
        //do nothing here
    }
}
