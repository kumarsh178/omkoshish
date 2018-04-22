<?php
class Magpieinfotech_Volunteers_Block_Adminhtml_Volunteers_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
		protected function _prepareForm()
		{

				$form = new Varien_Data_Form();
				$this->setForm($form);
				$fieldset = $form->addFieldset("volunteers_form", array("legend"=>Mage::helper("volunteers")->__("Item information")));

				
						$fieldset->addField("title", "text", array(
						"label" => Mage::helper("volunteers")->__("Title"),
						"name" => "title",
						));
					
						$fieldset->addField("description", "text", array(
						"label" => Mage::helper("volunteers")->__("Description"),
						"name" => "description",
						));
									
						$fieldset->addField('image', 'image', array(
						'label' => Mage::helper('volunteers')->__('Image'),
						'name' => 'image',
						'note' => '(*.jpg, *.png, *.gif)',
						));				
						 $fieldset->addField('status', 'select', array(
						'label'     => Mage::helper('volunteers')->__('Status'),
						'values'   => Magpieinfotech_Volunteers_Block_Adminhtml_Volunteers_Grid::getValueArray3(),
						'name' => 'status',
						));

				if (Mage::getSingleton("adminhtml/session")->getVolunteersData())
				{
					$form->setValues(Mage::getSingleton("adminhtml/session")->getVolunteersData());
					Mage::getSingleton("adminhtml/session")->setVolunteersData(null);
				} 
				elseif(Mage::registry("volunteers_data")) {
				    $form->setValues(Mage::registry("volunteers_data")->getData());
				}
				return parent::_prepareForm();
		}
}
