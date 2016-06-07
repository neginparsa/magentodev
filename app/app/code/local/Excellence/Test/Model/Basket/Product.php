<?php

class Excellence_Test_Model_Basket_Product extends Mage_Catalog_Model_Product_Type_Abstract
{
    public function isComposite($product = null)
    {
        return true;
    }
   public function setTypeId($typeId)
    {
        
        return Mage_Catalog_Model_Product_Type::TYPE_GROUPED;
    }
}