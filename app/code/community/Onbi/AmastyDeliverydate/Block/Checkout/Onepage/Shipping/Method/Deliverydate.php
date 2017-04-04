<?php

class Onbi_AmastyDeliverydate_Block_Checkout_Onepage_Shipping_Method_Deliverydate
    extends Amasty_Deliverydate_Block_Checkout_Onepage_Shipping_Method_Deliverydate
{
    public function getSelector()
    {
        if (Mage::helper('core')->isModuleEnabled('AW_Onestepcheckout')
            && Mage::getStoreConfig('aw_onestepcheckout/general/is_enabled', $this->getCurrentStore())) {
            $selector = '#aw-onestepcheckout-shipping-method input';
        } else {
            $selector = parent::getSelector();
        }
        return $selector;
    }
}