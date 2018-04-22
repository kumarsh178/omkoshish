<?php   
class Magpieinfotech_Banner_Block_Index extends Mage_Core_Block_Template{   

public $_bannerFactory;
	public $_bannerHelper;
	public $_campaignFactory;
	public $_volunteersFactory;
	public $_blogHelper;
	public $_postBlock;
	public $_galleryFactory;
	public function __construct()
    {
		$this->_bannerHelper = Mage::helper('banner');
		$this->_campaignFactory = Mage::getModel('campaign/campaign');
		$this->_volunteersFactory = Mage::getModel('volunteers/volunteers');
		$this->_bannerFactory = Mage::getModel('banner/banner');
		$this->_blogHelper = Mage::getModel('campaign/campaign');
		$this->_postBlock = Mage::getModel('blog/blog');
		$this->_galleryFactory = Mage::getModel('gallery/gallery');
    }

    public function getBanners(){
    	$collection = $this->_bannerFactory->getCollection()->setOrder('entity_id', 'desc');
    	return $collection;
    }

    public function getImageUrl($image){
    	return $this->_bannerHelper->getImageUrlPath($image);
    }



}