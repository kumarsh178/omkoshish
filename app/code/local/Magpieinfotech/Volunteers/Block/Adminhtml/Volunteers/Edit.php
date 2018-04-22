<?php
	
class Magpieinfotech_Volunteers_Block_Adminhtml_Volunteers_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
		public function __construct()
		{

				parent::__construct();
				$this->_objectId = "entity_id";
				$this->_blockGroup = "volunteers";
				$this->_controller = "adminhtml_volunteers";
				$this->_updateButton("save", "label", Mage::helper("volunteers")->__("Save Item"));
				$this->_updateButton("delete", "label", Mage::helper("volunteers")->__("Delete Item"));

				$this->_addButton("saveandcontinue", array(
					"label"     => Mage::helper("volunteers")->__("Save And Continue Edit"),
					"onclick"   => "saveAndContinueEdit()",
					"class"     => "save",
				), -100);



				$this->_formScripts[] = "

							function saveAndContinueEdit(){
								editForm.submit($('edit_form').action+'back/edit/');
							}
						";
		}

		public function getHeaderText()
		{
				if( Mage::registry("volunteers_data") && Mage::registry("volunteers_data")->getId() ){

				    return Mage::helper("volunteers")->__("Edit Item '%s'", $this->htmlEscape(Mage::registry("volunteers_data")->getId()));

				} 
				else{

				     return Mage::helper("volunteers")->__("Add Item");

				}
		}
}