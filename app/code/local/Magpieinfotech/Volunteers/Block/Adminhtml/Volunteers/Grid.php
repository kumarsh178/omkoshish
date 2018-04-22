<?php

class Magpieinfotech_Volunteers_Block_Adminhtml_Volunteers_Grid extends Mage_Adminhtml_Block_Widget_Grid
{

		public function __construct()
		{
				parent::__construct();
				$this->setId("volunteersGrid");
				$this->setDefaultSort("entity_id");
				$this->setDefaultDir("DESC");
				$this->setSaveParametersInSession(true);
		}

		protected function _prepareCollection()
		{
				$collection = Mage::getModel("volunteers/volunteers")->getCollection();
				$this->setCollection($collection);
				return parent::_prepareCollection();
		}
		protected function _prepareColumns()
		{
				$this->addColumn("entity_id", array(
				"header" => Mage::helper("volunteers")->__("ID"),
				"align" =>"right",
				"width" => "50px",
			    "type" => "number",
				"index" => "entity_id",
				));
                
				$this->addColumn("title", array(
				"header" => Mage::helper("volunteers")->__("Title"),
				"index" => "title",
				));
				$this->addColumn("description", array(
				"header" => Mage::helper("volunteers")->__("Description"),
				"index" => "description",
				));
						$this->addColumn('status', array(
						'header' => Mage::helper('volunteers')->__('Status'),
						'index' => 'status',
						'type' => 'options',
						'options'=>Magpieinfotech_Volunteers_Block_Adminhtml_Volunteers_Grid::getOptionArray3(),				
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
			$this->getMassactionBlock()->addItem('remove_volunteers', array(
					 'label'=> Mage::helper('volunteers')->__('Remove Volunteers'),
					 'url'  => $this->getUrl('*/adminhtml_volunteers/massRemove'),
					 'confirm' => Mage::helper('volunteers')->__('Are you sure?')
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
			foreach(Magpieinfotech_Volunteers_Block_Adminhtml_Volunteers_Grid::getOptionArray3() as $k=>$v){
               $data_array[]=array('value'=>$k,'label'=>$v);		
			}
            return($data_array);

		}
		

}