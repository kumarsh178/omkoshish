<?php
$installer = $this;
$installer->startSetup();
$sql=<<<SQLTEXT
CREATE TABLE `campaign` (
  `entity_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `description` text,
  `lattitude` varchar(100) DEFAULT NULL,
  `longitude` varchar(100) DEFAULT NULL,
  `date` datetime DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  `location` varchar(200) NOT NULL,
  PRIMARY KEY (`entity_id`)
)
SQLTEXT;

$installer->run($sql);
//demo 
//Mage::getModel('core/url_rewrite')->setId(null);
//demo 
$installer->endSetup();
	 