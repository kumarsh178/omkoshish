<?php
class Magpieinfotech_Gallery_Model_Mysql4_Gallery extends Mage_Core_Model_Mysql4_Abstract
{
    protected function _construct()
    {
        $this->_init("gallery/gallery", "entity_id");
    }
}