<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 12/29/2014
 * Time: 10:43 AM
 */
class Luckycycle_Snippetsdk_Model_Bannerdefault extends Mage_Adminhtml_Model_System_Config_Backend_Image {
    protected function _getAllowedExtensions()
    {
        return array('jpg','png','jpeg','gif');
    }
}