<?php
class Magpieinfotech_Volunteers_Block_Adminhtml_Volunteers_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{
		public function __construct()
		{
				parent::__construct();
				$this->setId("volunteers_tabs");
				$this->setDestElementId("edit_form");
				$this->setTitle(Mage::helper("volunteers")->__("Item Information"));
		}
		protected function _beforeToHtml()
		{
				$this->addTab("form_section", array(
				"label" => Mage::helper("volunteers")->__("Item Information"),
				"title" => Mage::helper("volunteers")->__("Item Information"),
				"content" => $this->getLayout()->createBlock("volunteers/adminhtml_volunteers_edit_tab_form")->toHtml(),
				));
				return parent::_beforeToHtml();
		}

}
