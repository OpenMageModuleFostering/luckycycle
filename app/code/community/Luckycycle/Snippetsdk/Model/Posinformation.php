<?php
class Luckycycle_Snippetsdk_Model_Posinformation {
    public function toOptionArray() {
        return array(
            array('value' => 0, 'label'=>Mage::helper('adminhtml')->__('Before Banner/ Iframe')),
            array('value' => 1, 'label'=>Mage::helper('adminhtml')->__('After Banner/ Iframe')),
        );
    }
}