<?php

namespace OxidAcademy\VoucherModule\Core;

class ViewConfig extends ViewConfig_parent {

    public function getShowVouchers(){
        $ret = parent::getShowVouchers();
        if($ret){
            $oUser = $this->getUser();
            if($oUser && $oUser->inGroup('oxidgoodcust')){
                return true;
            }else{
                return false;
            }
        }

        return $ret;
    }

}