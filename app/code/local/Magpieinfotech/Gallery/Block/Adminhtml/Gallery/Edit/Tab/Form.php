<?php
class Magpieinfotech_Gallery_Block_Adminhtml_Gallery_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
		protected function _prepareForm()
		{

				$form = new Varien_Data_Form();
				$this->setForm($form);
				$fieldset = $form->addFieldset("gallery_form", array("legend"=>Mage::helper("gallery")->__("Item information")));

				
						$fieldset->addField("title", "text", array(
						"label" => Mage::helper("gallery")->__("Title"),
						"name" => "title",
						));
					
						$fieldset->addField("description", "text", array(
						"label" => Mage::helper("gallery")->__("Description"),
						"name" => "description",
						));
									
						$fieldset->addField('image', 'image', array(
						'label' => Mage::helper('gallery')->__('Image'),
						'name' => 'image',
						'note' => '(*.jpg, *.png, *.gif)',
						));				
						 $fieldset->addField('status', 'select', array(
						'label'     => Mage::helper('gallery')->__('Status'),
						'values'   => Magpieinfotech_Gallery_Block_Adminhtml_Gallery_Grid::getValueArray3(),
						'name' => 'status',
						));

				if (Mage::getSingleton("adminhtml/session")->getGalleryData())
				{
					$form->setValues(Mage::getSingleton("adminhtml/session")->getGalleryData());
					Mage::getSingleton("adminhtml/session")->setGalleryData(null);
				} 
				elseif(Mage::registry("gallery_data")) {
				    $form->setValues(Mage::registry("gallery_data")->getData());
				}
				return parent::_prepareForm();
		}
}
