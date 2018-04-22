<?php


class Magpieinfotech_Gallery_Block_Adminhtml_Gallery extends Mage_Adminhtml_Block_Widget_Grid_Container{

	public function __construct()
	{

	$this->_controller = "adminhtml_gallery";
	$this->_blockGroup = "gallery";
	$this->_headerText = Mage::helper("gallery")->__("Gallery Manager");
	$this->_addButtonLabel = Mage::helper("gallery")->__("Add New Item");
	parent::__construct();
	
	}

}