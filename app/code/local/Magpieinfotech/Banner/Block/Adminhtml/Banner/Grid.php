<?php

class Magpieinfotech_Banner_Block_Adminhtml_Banner_Grid extends Mage_Adminhtml_Block_Widget_Grid
{

		public function __construct()
		{
				parent::__construct();
				$this->setId("bannerGrid");
				$this->setDefaultSort("entity_id");
				$this->setDefaultDir("DESC");
				$this->setSaveParametersInSession(true);
		}

		protected function _prepareCollection()
		{
				$collection = Mage::getModel("banner/banner")->getCollection();
				$this->setCollection($collection);
				return parent::_prepareCollection();
		}
		protected function _prepareColumns()
		{
				$this->addColumn("entity_id", array(
				"header" => Mage::helper("banner")->__("ID"),
				"align" =>"right",
				"width" => "50px",
			    "type" => "number",
				"index" => "entity_id",
				));
                
				$this->addColumn("first_title", array(
				"header" => Mage::helper("banner")->__("First Title"),
				"index" => "first_title",
				));
				$this->addColumn("second_title", array(
				"header" => Mage::helper("banner")->__("Second Title"),
				"index" => "second_title",
				));
						$this->addColumn('status', array(
						'header' => Mage::helper('banner')->__('Status'),
						'index' => 'status',
						'type' => 'options',
						'options'=>Magpieinfotech_Banner_Block_Adminhtml_Banner_Grid::getOptionArray3(),				
						));
						
				$this->addColumn("third_title", array(
				"header" => Mage::helper("banner")->__("Third Title"),
				"index" => "third_title",
				));
			$this->addExportType('*/*/exportCsv', Mage::helper('sales')->__('CSV')); 
			$this->addExportType('*/*/exportExcel', Mage::helper('sales')->__('Excel'));

				return parent::_prepareColumns();
		}

		public function getRowUrl($row)
		{
			   return $this->getUrl("*/*/edit", array("id" => $row->getId()));
		}


		
		protected function _prepareMassaction()
		{
			$this->setMassactionIdField('entity_id');
			$this->getMassactionBlock()->setFormFieldName('entity_ids');
			$this->getMassactionBlock()->setUseSelectAll(true);
			$this->getMassactionBlock()->addItem('remove_banner', array(
					 'label'=> Mage::helper('banner')->__('Remove Banner'),
					 'url'  => $this->getUrl('*/adminhtml_banner/massRemove'),
					 'confirm' => Mage::helper('banner')->__('Are you sure?')
				));
			return $this;
		}
			
		static public function getOptionArray3()
		{
            $data_array=array(); 
			$data_array[0]='disabled';
			$data_array[1]='enabled';
            return($data_array);
		}
		static public function getValueArray3()
		{
            $data_array=array();
			foreach(Magpieinfotech_Banner_Block_Adminhtml_Banner_Grid::getOptionArray3() as $k=>$v){
               $data_array[]=array('value'=>$k,'label'=>$v);		
			}
            return($data_array);

		}
		

}