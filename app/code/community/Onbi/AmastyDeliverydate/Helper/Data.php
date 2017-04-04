<?php

class Onbi_AmastyDeliverydate_Helper_Data extends Amasty_Deliverydate_Helper_Data
{
    public function needTimeout($storeId = 0)
    {
        if (Mage::helper('core')->isModuleEnabled('AW_Onestepcheckout')
            && Mage::getStoreConfig('aw_onestepcheckout/general/is_enabled', $storeId)
        ) {
            $need = true;
        }
        else {
            $need = parent::needTimeout($storeId = 0);
        }

        return $need;
    }
}