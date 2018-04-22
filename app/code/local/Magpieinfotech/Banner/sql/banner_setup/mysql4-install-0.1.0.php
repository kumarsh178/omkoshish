<?php
$installer = $this;
$installer->startSetup();
$sql=<<<SQLTEXT
CREATE TABLE `banner` (
  `entity_id` int(11) NOT NULL AUTO_INCREMENT,
  `first_title` varchar(100) DEFAULT NULL,
  `second_title` varchar(100) DEFAULT NULL,
  `third_title` varchar(100) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  PRIMARY KEY (`entity_id`)
)
SQLTEXT;

$installer->run($sql);
//demo 
//Mage::getModel('core/url_rewrite')->setId(null);
//demo 
$installer->endSetup();
	 