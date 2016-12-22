<?php

/**
 * @author Sherodesigns | Ledian <ledian@sherodesigns.com>
 * @copyright Copyright (c) 2016 sherodesigns (http://sherodesigns.com/)
 * @package Shero_Customermodule
 * @Date 12/22/2016
 * @extends Mage_Core_Customer_Model_Customer
 */

class Shero_Customermodule_Model_Customer extends Mage_Customer_Model_Customer
{
    /**
     * This is an overriden method from Mage_Core_Customer_Model_Customer class.
     * Reason of this override is just for tutorial purpose
     * @return mixed
     */
    public function getName()
    {
        return "Sherodesigns";
    }
}