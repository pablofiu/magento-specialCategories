<?php

class PabloFiumara_SpecialCategory_Model_System_Config_Source_Dropdown_Values
{
    public function toOptionArray()
    {
        $categories = Mage::getModel('catalog/category')->getCollection()->addAttributeToSelect('*')->addIsActiveFilter();
        // $keyNumber = 'key1';
        foreach ($categories as $obj) {
        //$array1 = array('value' => 'key1', 'label' => $obj->getName(),);
        // echo '<pre>'; print_r($array1); echo '</pre>';
        $test = array(
        array( 'value' => 'key1', 'label' => 'Value 1',)
        ,array('value' => 'key2','label' => 'Value 2',)
        ,);
        }
        return $test;
        /*
        return array(
            array(
                'value' => 'key1',
                'label' => 'Value Number 1',
            ),
            array(
                'value' => 'key2',
                'label' => 'Value Number 2',
            ),
        );
        */
    }
}
