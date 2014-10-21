<?php

class PabloFiumara_SpecialCategory_Model_System_Config_Source_Dropdown_Values
{
    public function toOptionArray()
    {
        $categories = Mage::getModel('catalog/category')->getCollection()->addAttributeToSelect('*')->addIsActiveFilter();
        $keyNumber = 1;
        $emptyArray = array();
        foreach ($categories as $obj) {
            $aCategory = $obj->getName();
            // echo $aCategory;
            $array = array("value" => $keyNumber,"label" => $obj->getName(),);
            ++$keyNumber;
            //var_dump($array);
            //$emptyArray[$key] = $value;


        }
/*
        $test = array(
        array( 'value' => 'key1', 'label' => 'Value 1',)
        ,array('value' => 'key2','label' => 'Value 2',)
        ,);
*/
        $A = array(
            array('value' => 'key1', 'label' => 'Value 1'),
            array('value' => 'key2', 'label' => 'Value 2'));

        $B = array(
            array('value' => 'key3', 'label' => 'Value 3'),
            array('value' => 'key4', 'label' => 'Value 4'));


        $C = array_merge($A, $B);

        return $C;

    }
}


