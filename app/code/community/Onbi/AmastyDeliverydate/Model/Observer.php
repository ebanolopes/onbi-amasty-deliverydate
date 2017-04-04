<?php

class Onbi_AmastyDeliverydate_Model_Observer extends Amasty_Deliverydate_Model_Observer
{
    public function __construct()
    {
        $this->_irregularCSMClasses[] = 'AW_Onestepcheckout_Block_Onestep_Form_Shippingmethod';
    }
}