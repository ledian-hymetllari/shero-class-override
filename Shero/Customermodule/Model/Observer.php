<?php

/**
 * @author Sherodesigns | Ledian <ledian@sherodesigns.com
 * @copyright Copyright (c) 2016 sherodesigns (http://sherodesigns.com/)
 * @package Shero_Customermodule
 * @Date 12/22/2016
 * @extends Mage_Core_Customer_Model_Customer
 */

class Shero_Customermodule_Model_Observer extends Mage_Checkout_Model_Observer
{
    public function salesQuoteSaveAfter($observer)
    {
        die("work");
        $quote = $observer->getEvent()->getQuote();
        /* @var $quote Mage_Sales_Model_Quote */
        if ($quote->getIsCheckoutCart()) {
            Mage::getSingleton('checkout/session')->getQuoteId($quote->getId());
        }
    }
}