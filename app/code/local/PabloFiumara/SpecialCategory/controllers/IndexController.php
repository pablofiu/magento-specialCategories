<?php

class PabloFiumara_SpecialCategory_IndexController extends Mage_Adminhtml_Controller_Action
{  
    public function indexAction()
    {
        $this->loadLayout();
         
        $block = $this->getLayout()->createBlock('core/text', 'green-block')->setText('<h3>hello</h1>');
        $this->_addContent($block);
         
        $this->_setActiveMenu('specialcategory')->renderLayout();
    }   
}
