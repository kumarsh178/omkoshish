<?php 
$customVariable = Mage::getModel('core/variable');
$data = array('code'=>'blog_code','name'=>"blog_code","plain_value"=>"Latest News");
$customVariable->setData($data);
$customVariable->save();