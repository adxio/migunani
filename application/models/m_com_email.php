<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class M_com_email extends CI_Model {

    public function get_all_email() {
        $data = $this->db->get('com_email');
        if ($data->num_rows > 0) {
            return $data->result_array();
        } else {
            return array();
        }
    }

    public function insert($params) {
        $sql = "INSERT INTO com_email(personal_name, personal_phone, personal_email, personal_desc, mdd) VALUES(?,?,?,?,NOW())";
        return $this->db->query($sql, $params);
    }

    public function delete($params) {
        $sql = "DELETE FROM com_email WHERE idx = ? ";
        return $this->db->query($sql, $params);
    }
    
    public function get_detail_by_id($client_id) {
        $sql = "SELECT * FROM com_email WHERE idx = ?";
        $query = $this->db->query($sql, $client_id);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }
    
    public function update($params) {
        $sql = "UPDATE com_email SET personal_name = ? , personal_phone = ?, personal_email = ?, personal_desc = ? WHERE idx = ?";
        return $this->db->query($sql, $params);
    }

}
