<?php
class Magpieinfotech_Campaign_Block_Adminhtml_Campaign_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
		protected function _prepareForm()
		{

				$form = new Varien_Data_Form();
				$this->setForm($form);
				$fieldset = $form->addFieldset("campaign_form", array("legend"=>Mage::helper("campaign")->__("Item information")));

				
						$fieldset->addField("title", "text", array(
						"label" => Mage::helper("campaign")->__("Title"),					
						"class" => "required-entry",
						"required" => true,
						"name" => "title",
						));
					
						$fieldset->addField("description", "text", array(
						"label" => Mage::helper("campaign")->__("Description"),					
						"class" => "required-entry",
						"required" => true,
						"name" => "description",
						));
									
						$fieldset->addField('image', 'image', array(
						'label' => Mage::helper('campaign')->__('Image'),
						'name' => 'image',
						'note' => '(*.jpg, *.png, *.gif)',
						));				
						 $fieldset->addField('status', 'select', array(
						'label'     => Mage::helper('campaign')->__('Status'),
						'values'   => Magpieinfotech_Campaign_Block_Adminhtml_Campaign_Grid::getValueArray3(),
						'name' => 'status',
						));
						$fieldset->addField("lattitude", "text", array(
						"label" => Mage::helper("campaign")->__("Lattitude"),					
						"class" => "required-entry",
						"required" => true,
						"name" => "lattitude",
						));
					
						$fieldset->addField("longitude", "text", array(
						"label" => Mage::helper("campaign")->__("Longitude"),					
						"class" => "required-entry",
						"required" => true,
						"name" => "longitude",
						));
					
						$dateFormatIso = Mage::app()->getLocale()->getDateTimeFormat(
							Mage_Core_Model_Locale::FORMAT_TYPE_SHORT
						);

						$fieldset->addField('date', 'date', array(
						'label'        => Mage::helper('campaign')->__('Date'),
						'name'         => 'date',					
						"class" => "required-entry",
						"required" => true,
						'time' => true,
						'image'        => $this->getSkinUrl('images/grid-cal.gif'),
						'format'       => $dateFormatIso
						));
						$fieldset->addField("location", "text", array(
						"label" => Mage::helper("campaign")->__("Location"),					
						"class" => "required-entry",
						"required" => true,
						"name" => "location",
						));
					

				if (Mage::getSingleton("adminhtml/session")->getCampaignData())
				{
					$form->setValues(Mage::getSingleton("adminhtml/session")->getCampaignData());
					Mage::getSingleton("adminhtml/session")->setCampaignData(null);
				} 
				elseif(Mage::registry("campaign_data")) {
				    $form->setValues(Mage::registry("campaign_data")->getData());
				}
				return parent::_prepareForm();
		}
}
