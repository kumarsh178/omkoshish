<?php
class Magpieinfotech_Banner_Model_Mysql4_Banner extends Mage_Core_Model_Mysql4_Abstract
{
    protected function _construct()
    {
        $this->_init("banner/banner", "entity_id");
    }
}