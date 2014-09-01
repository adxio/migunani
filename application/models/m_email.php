<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_email extends CI_Model {

    function add($data) {
        $this->db->insert('trx_email', $data);
    }

}
