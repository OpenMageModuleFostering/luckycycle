<?php
class Luckycycle_Snippetsdk_Model_Mysql4_Luckycycle_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract {
    public function _construct() {

        $this->_init('snippetsdk/luckycycle');
        parent::_construct();
    }
}