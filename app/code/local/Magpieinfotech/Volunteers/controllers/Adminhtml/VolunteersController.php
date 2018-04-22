<?php

class Magpieinfotech_Volunteers_Adminhtml_VolunteersController extends Mage_Adminhtml_Controller_Action
{
		protected function _isAllowed()
		{
		//return Mage::getSingleton('admin/session')->isAllowed('volunteers/volunteers');
			return true;
		}

		protected function _initAction()
		{
				$this->loadLayout()->_setActiveMenu("volunteers/volunteers")->_addBreadcrumb(Mage::helper("adminhtml")->__("Volunteers  Manager"),Mage::helper("adminhtml")->__("Volunteers Manager"));
				return $this;
		}
		public function indexAction() 
		{
			    $this->_title($this->__("Volunteers"));
			    $this->_title($this->__("Manager Volunteers"));

				$this->_initAction();
				$this->renderLayout();
		}
		public function editAction()
		{			    
			    $this->_title($this->__("Volunteers"));
				$this->_title($this->__("Volunteers"));
			    $this->_title($this->__("Edit Item"));
				
				$id = $this->getRequest()->getParam("id");
				$model = Mage::getModel("volunteers/volunteers")->load($id);
				if ($model->getId()) {
					Mage::register("volunteers_data", $model);
					$this->loadLayout();
					$this->_setActiveMenu("volunteers/volunteers");
					$this->_addBreadcrumb(Mage::helper("adminhtml")->__("Volunteers Manager"), Mage::helper("adminhtml")->__("Volunteers Manager"));
					$this->_addBreadcrumb(Mage::helper("adminhtml")->__("Volunteers Description"), Mage::helper("adminhtml")->__("Volunteers Description"));
					$this->getLayout()->getBlock("head")->setCanLoadExtJs(true);
					$this->_addContent($this->getLayout()->createBlock("volunteers/adminhtml_volunteers_edit"))->_addLeft($this->getLayout()->createBlock("volunteers/adminhtml_volunteers_edit_tabs"));
					$this->renderLayout();
				} 
				else {
					Mage::getSingleton("adminhtml/session")->addError(Mage::helper("volunteers")->__("Item does not exist."));
					$this->_redirect("*/*/");
				}
		}

		public function newAction()
		{

		$this->_title($this->__("Volunteers"));
		$this->_title($this->__("Volunteers"));
		$this->_title($this->__("New Item"));

        $id   = $this->getRequest()->getParam("id");
		$model  = Mage::getModel("volunteers/volunteers")->load($id);

		$data = Mage::getSingleton("adminhtml/session")->getFormData(true);
		if (!empty($data)) {
			$model->setData($data);
		}

		Mage::register("volunteers_data", $model);

		$this->loadLayout();
		$this->_setActiveMenu("volunteers/volunteers");

		$this->getLayout()->getBlock("head")->setCanLoadExtJs(true);

		$this->_addBreadcrumb(Mage::helper("adminhtml")->__("Volunteers Manager"), Mage::helper("adminhtml")->__("Volunteers Manager"));
		$this->_addBreadcrumb(Mage::helper("adminhtml")->__("Volunteers Description"), Mage::helper("adminhtml")->__("Volunteers Description"));


		$this->_addContent($this->getLayout()->createBlock("volunteers/adminhtml_volunteers_edit"))->_addLeft($this->getLayout()->createBlock("volunteers/adminhtml_volunteers_edit_tabs"));

		$this->renderLayout();

		}
		public function saveAction()
		{

			$post_data=$this->getRequest()->getPost();


				if ($post_data) {

					try {

						
				 //save image
		try{

if((bool)$post_data['image']['delete']==1) {

	        $post_data['image']='';

}
else {

	unset($post_data['image']);

	if (isset($_FILES)){

		if ($_FILES['image']['name']) {

			if($this->getRequest()->getParam("id")){
				$model = Mage::getModel("volunteers/volunteers")->load($this->getRequest()->getParam("id"));
				if($model->getData('image')){
						$io = new Varien_Io_File();
						$io->rm(Mage::getBaseDir('media').DS.implode(DS,explode('/',$model->getData('image'))));	
				}
			}
						$path = Mage::getBaseDir('media') . DS . 'volunteers' . DS .'volunteers'.DS;
						$uploader = new Varien_File_Uploader('image');
						$uploader->setAllowedExtensions(array('jpg','png','gif'));
						$uploader->setAllowRenameFiles(false);
						$uploader->setFilesDispersion(false);
						$destFile = $path.$_FILES['image']['name'];
						$filename = $uploader->getNewFileName($destFile);
						$uploader->save($path, $filename);

						$post_data['image']='volunteers/volunteers/'.$filename;
		}
    }
}

        } catch (Exception $e) {
				Mage::getSingleton('adminhtml/session')->addError($e->getMessage());
				$this->_redirect('*/*/edit', array('id' => $this->getRequest()->getParam('id')));
				return;
        }
//save image


						$model = Mage::getModel("volunteers/volunteers")
						->addData($post_data)
						->setId($this->getRequest()->getParam("id"))
						->save();

						Mage::getSingleton("adminhtml/session")->addSuccess(Mage::helper("adminhtml")->__("Volunteers was successfully saved"));
						Mage::getSingleton("adminhtml/session")->setVolunteersData(false);

						if ($this->getRequest()->getParam("back")) {
							$this->_redirect("*/*/edit", array("id" => $model->getId()));
							return;
						}
						$this->_redirect("*/*/");
						return;
					} 
					catch (Exception $e) {
						Mage::getSingleton("adminhtml/session")->addError($e->getMessage());
						Mage::getSingleton("adminhtml/session")->setVolunteersData($this->getRequest()->getPost());
						$this->_redirect("*/*/edit", array("id" => $this->getRequest()->getParam("id")));
					return;
					}

				}
				$this->_redirect("*/*/");
		}



		public function deleteAction()
		{
				if( $this->getRequest()->getParam("id") > 0 ) {
					try {
						$model = Mage::getModel("volunteers/volunteers");
						$model->setId($this->getRequest()->getParam("id"))->delete();
						Mage::getSingleton("adminhtml/session")->addSuccess(Mage::helper("adminhtml")->__("Item was successfully deleted"));
						$this->_redirect("*/*/");
					} 
					catch (Exception $e) {
						Mage::getSingleton("adminhtml/session")->addError($e->getMessage());
						$this->_redirect("*/*/edit", array("id" => $this->getRequest()->getParam("id")));
					}
				}
				$this->_redirect("*/*/");
		}

		
		public function massRemoveAction()
		{
			try {
				$ids = $this->getRequest()->getPost('entity_ids', array());
				foreach ($ids as $id) {
                      $model = Mage::getModel("volunteers/volunteers");
					  $model->setId($id)->delete();
				}
				Mage::getSingleton("adminhtml/session")->addSuccess(Mage::helper("adminhtml")->__("Item(s) was successfully removed"));
			}
			catch (Exception $e) {
				Mage::getSingleton("adminhtml/session")->addError($e->getMessage());
			}
			$this->_redirect('*/*/');
		}
			
		/**
		 * Export order grid to CSV format
		 */
		public function exportCsvAction()
		{
			$fileName   = 'volunteers.csv';
			$grid       = $this->getLayout()->createBlock('volunteers/adminhtml_volunteers_grid');
			$this->_prepareDownloadResponse($fileName, $grid->getCsvFile());
		} 
		/**
		 *  Export order grid to Excel XML format
		 */
		public function exportExcelAction()
		{
			$fileName   = 'volunteers.xml';
			$grid       = $this->getLayout()->createBlock('volunteers/adminhtml_volunteers_grid');
			$this->_prepareDownloadResponse($fileName, $grid->getExcelFile($fileName));
		}
}
