<?php

namespace OxidAcademy\DealerModule\Model;

class Order extends Order_parent{

    public function finalizeOrder(\OxidEsales\Eshop\Application\Model\Basket $oBasket, $oUser, $blRecalculatingOrder = false)
    {
        $blReturn = parent::finalizeOrder($oBasket, $oUser, $blRecalculatingOrder);

        //order was successful
        if($blReturn == self::ORDER_STATE_OK || self::ORDER_STATE_MAILINGERROR){
            if(!empty($oUser->oxuser__oxustid->value)){
                $oUser->addToGroup('oxiddealer');
            }
        }

        return $blReturn;
    }
}