<?php
class Magpieinfotech_Banner_Block_Adminhtml_Banner_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
		protected function _prepareForm()
		{

				$form = new Varien_Data_Form();
				$this->setForm($form);
				$fieldset = $form->addFieldset("banner_form", array("legend"=>Mage::helper("banner")->__("Item information")));

				
						$fieldset->addField("first_title", "text", array(
						"label" => Mage::helper("banner")->__("First Title"),					
						"class" => "required-entry",
						"required" => true,
						"name" => "first_title",
						));
					
						$fieldset->addField("second_title", "text", array(
						"label" => Mage::helper("banner")->__("Second Title"),					
						"class" => "required-entry",
						"required" => true,
						"name" => "second_title",
						));
									
						$fieldset->addField('image', 'image', array(
						'label' => Mage::helper('banner')->__('Image'),
						'name' => 'image',
						'note' => '(*.jpg, *.png, *.gif)',
						));				
						 $fieldset->addField('status', 'select', array(
						'label'     => Mage::helper('banner')->__('Status'),
						'values'   => Magpieinfotech_Banner_Block_Adminhtml_Banner_Grid::getValueArray3(),
						'name' => 'status',
						));
						$fieldset->addField("third_title", "text", array(
						"label" => Mage::helper("banner")->__("Third Title"),					
						"class" => "required-entry",
						"required" => true,
						"name" => "third_title",
						));
					

				if (Mage::getSingleton("adminhtml/session")->getBannerData())
				{
					$form->setValues(Mage::getSingleton("adminhtml/session")->getBannerData());
					Mage::getSingleton("adminhtml/session")->setBannerData(null);
				} 
				elseif(Mage::registry("banner_data")) {
				    $form->setValues(Mage::registry("banner_data")->getData());
				}
				return parent::_prepareForm();
		}
}
