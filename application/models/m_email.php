<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_email extends CI_Model {

    public function add($data) {
        $this->db->insert('trx_email', $data);
    }

    public function get_all_email() {
        $data = $this->db->get('trx_email');
        if ($data->num_rows > 0) {
            return $data->result_array();
        } else {
            return array();
        }
    }

    public function delete($params) {
        $this->db->where('email_id', $params);
        return $this->db->delete('trx_email');
    }

}
