<?php
/**

 *
 * @package      Tryzenss
 * @subpackage   Dpds
 * @category     Checkout
 */
/**
 * Class Tryzens_Dpd_Model_System_Config_Source_Ratetypes
 */
class Tryzens_Dpd_Model_System_Config_Source_Ratetypes
{

    /**
     * Options getter.
     * Returns an option array for Shipping cost handler.
     *
     * @return array
     *
     */
    public function toOptionArray()
    {
        return array(
            array('value' => 1, 'label' => Mage::helper('dpd')->__('Table Rates')),
            array('value' => 0, 'label' => Mage::helper('dpd')->__('Flat Rate')),
        );
    }

    /**
     * Get options in "key-value" format.
     * Returns an array for Shipping cost handler. (Magento basically expects both functions)
     *
     * @return array
     *
     */
    public function toArray()
    {
        return array(
            0 => Mage::helper('dpd')->__('Flat Rate'),
            1 => Mage::helper('dpd')->__('Table Rates'),
        );
    }

}
