<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Wan_Check_Model_Mysql4_Ward extends Mage_Core_Model_Mysql4_Abstract {

    public function _construct() {
        $this->_init('wan_check/ward', 'ward_id');
    }

}