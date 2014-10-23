<?php

class PabloFiumara_SpecialCategory_Model_System_Config_Source_Dropdown_Values
{
    public function toOptionArray()
    {
        $categories = Mage::getModel('catalog/category')->getCollection()->addAttributeToSelect('*')->addIsActiveFilter();
        $categoriesList = array();
        foreach ($categories as $obj) {
            $array = array("value" => $obj->getName(),"label" => $obj->getName(),);
            array_push($categoriesList, $array);
        }
        return $categoriesList;
    }

}


