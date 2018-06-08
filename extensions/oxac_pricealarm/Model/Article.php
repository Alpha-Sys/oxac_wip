<?php

namespace OxidAcademy\PricealarmModule\Model;

class Article extends Article_parent{


    public function isPriceAlarm()
    {
        $ret = parent::isPriceAlarm();

        if($ret){
            $oConfig = $this->getConfig();
            $iSetting = $oConfig->getConfigParam('sOxacPriceValue');
            $dPrice = $this->getPrice()->getBruttoPrice();
            if($dPrice < $iSetting){
                return true;
            }
        }

        return false;
    }

}