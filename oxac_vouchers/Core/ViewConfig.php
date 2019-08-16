<?php

namespace OxidAcademy\VoucherModule\Core;

class ViewConfig extends ViewConfig_parent{

    public function getShowVouchers(){
        if(parent::getShowVouchers()){
            $oUser = $this->getUser();
            if($oUser && $oUser->inGroup('oxidgoodcust')){
                return true;
            }
        }
        return false;
    }
}