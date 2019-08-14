<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 12/25/2014
 * Time: 3:35 PM
 */
class Luckycycle_Snippetsdk_Model_Mysql4_Luckycycle extends Mage_Core_Model_Mysql4_Abstract {
    public function _construct() {

        $this->_init('snippetsdk/luckycycle', 'id_poke');
    }
}