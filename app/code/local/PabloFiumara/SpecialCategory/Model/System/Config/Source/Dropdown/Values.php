<?php

class PabloFiumara_SpecialCategory_Model_System_Config_Source_Dropdown_Values
{
    public function toOptionArray()
    {
        $categories = Mage::getModel('catalog/category')->getCollection()->addAttributeToSelect('*')->addIsActiveFilter();
        $categoriesList = array();
        foreach ($categories as $obj) {
            if ($obj->getName() !== 'New Arrivals') {
                if ($obj->getName() == 'Default Category' || !$obj->hasChildren()) {
                    $array = array("value" => $obj->getName(),"label" => $obj->getName(),);
                    if ($obj->getName() == 'Default Category') {
                        $array = array("value" => $obj->getName(),"label" => "No Special Categories",);
                    }
                    array_push($categoriesList, $array);
                }
            }
        }
        return $categoriesList;
    }

}


