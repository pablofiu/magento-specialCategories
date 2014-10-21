<?php

class PabloFiumara_SpecialCategory_Model_System_Config_Source_Dropdown_Values
{
    public function toOptionArray()
    {
        $categories = Mage::getModel('catalog/category')->getCollection()->addAttributeToSelect('*')->addIsActiveFilter();
        $categoryNumber = 1;
        $categoriesList = array();
        foreach ($categories as $obj) {
            $array = array("value" => $categoryNumber,"label" => $obj->getName(),);
            array_push($categoriesList, $array);
            ++$categoryNumber;
        }

        return $categoriesList;

    }

}


