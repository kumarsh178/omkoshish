<?php


class Magpieinfotech_Volunteers_Block_Adminhtml_Volunteers extends Mage_Adminhtml_Block_Widget_Grid_Container{

	public function __construct()
	{

	$this->_controller = "adminhtml_volunteers";
	$this->_blockGroup = "volunteers";
	$this->_headerText = Mage::helper("volunteers")->__("Volunteers Manager");
	$this->_addButtonLabel = Mage::helper("volunteers")->__("Add New Item");
	parent::__construct();
	
	}

}