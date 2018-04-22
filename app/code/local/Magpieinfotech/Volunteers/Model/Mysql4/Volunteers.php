<?php
class Magpieinfotech_Volunteers_Model_Mysql4_Volunteers extends Mage_Core_Model_Mysql4_Abstract
{
    protected function _construct()
    {
        $this->_init("volunteers/volunteers", "entity_id");
    }
}