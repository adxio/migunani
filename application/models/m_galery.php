<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

// --
class m_galery extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    // get last inserted id
    function get_last_inserted_id() {
        return $this->db->insert_id();
    }

    // get all portal
    function get_all_galery_by_cat() {
        $sql = "SELECT * FROM trx_galery WHERE gal_cat = ?";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    // get all portal
    function get_detail_by_id($params) {
        $sql = "SELECT * FROM trx_galery WHERE gal_id = ?";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }
    
    function get_galery_by_project_id($params){
        $this->db->select('gal_cat,project_id,gal_nm');
        $this->db->where('project_id',$params);
        $data = $this->db->get('trx_galery');
        if($data->num_rows > 0){
            return $data->result_array();
        }else{
            return array();
        }
    }

    //delete data
    function delete($params) {
        $sql = "DELETE from trx_galery WHERE gal_nm = ? AND gal_cat = ?";
        return $this->db->query($sql, $params);
    }

    //insert data
    function insert($params) {
        $sql = "INSERT trx_galery(gal_cat, gal_nm, mdb, mdd)VALUES(?, ?, ?, NOW())";
        return $this->db->query($sql, $params);
    }

}