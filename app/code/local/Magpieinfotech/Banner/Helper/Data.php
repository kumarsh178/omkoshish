<?php
class Magpieinfotech_Banner_Helper_Data extends Mage_Core_Helper_Abstract
{
  public function getImageUrlPath($image){
    		$mediaUrl = Mage::getBaseUrl(Mage_Core_Model_Store::URL_TYPE_MEDIA);
    		return $mediaUrl.$image;
    }

    public function getDays($date){
    	$date1=date_create($date);
		$date2=date_create(date('y-m-d'));
		$diff=date_diff($date1,$date2);
		return $diff->format("%a");
    }
     /**
     * get date formatted
     * @param $date
     * @param bool $monthly
     * @return false|string
     */
    public function getDateFormat($date, $monthly = false)
    {
        $dateTime = (new \DateTime($date, new \DateTimeZone('UTC')));
        $dateTime->setTimezone(new \DateTimeZone($this->getTimezone()));

        $dateType = 'general/date_type';
        $dateFormat = $dateTime->format($dateType);

        return $dateFormat;
    }

    /**
     * get configuration zone
     * @return mixed
     */
    public function getTimezone()
    {
        return  Mage::getStoreConfig('general/locale/timezone');
    }

}

	 