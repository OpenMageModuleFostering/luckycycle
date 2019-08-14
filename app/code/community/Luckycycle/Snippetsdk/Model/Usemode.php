<?php
class Luckycycle_Snippetsdk_Model_Usemode {
    public function toOptionArray() {
        return array(
            array('value' => 0, 'label'=>Mage::helper('adminhtml')->__('Use Iframe')),
            array('value' => 1, 'label'=>Mage::helper('adminhtml')->__('Use Banner')),
        );
    }
}