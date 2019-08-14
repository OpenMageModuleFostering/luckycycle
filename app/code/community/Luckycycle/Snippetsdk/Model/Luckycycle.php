<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 12/25/2014
 * Time: 3:33 PM
 */
class Luckycycle_Snippetsdk_Model_Luckycycle extends Mage_Core_Model_Abstract
{
    public function __construct()
    {
        $this->_init('snippetsdk/luckycycle');
        parent::_construct();
    }
}