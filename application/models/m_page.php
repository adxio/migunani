<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

// --
class m_page extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    // get last inserted id
    function get_last_inserted_id() {
        return $this->db->insert_id();
    }

    // get all portal
    function get_all_page_cat() {
        $sql = "SELECT * FROM com_page_cat ORDER BY cat_name ASC";
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
        $sql = "SELECT * FROM com_page_cat WHERE cat_id = ?";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    //delete data
    function delete($params) {
        $sql = "DELETE from com_page_cat WHERE cat_id = ?";
        return $this->db->query($sql, $params);
    }

    //update data
    function update($params) {
        $sql = "UPDATE com_page_cat SET cat_name = ?,cat_description = ?,mdb = ?,mdd= NOW()WHERE cat_id = ?";
        return $this->db->query($sql, $params);
    }

    //insert data
    function insert($params) {
        $sql = "INSERT com_page_cat(cat_name,cat_description,mdb,mdd)VALUES(?,?,?,NOW())";
        return $this->db->query($sql, $params);
    }

    //--
    //page manajemen
    function get_all_page_by_cat($params) {
        $sql = "SELECT * FROM com_page_cat a INNER JOIN trx_page b ON a.cat_id = b.page_cat WHERE a.cat_id = ?";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    //page manajemen
    function get_page_detail_by_id($params) {
        $sql = "SELECT * FROM com_page_cat a INNER JOIN trx_page b ON a.cat_id = b.page_cat WHERE a.cat_id = ? AND b.page_id = ?";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    //update data
    function manage($params) {
        $sql = "UPDATE trx_page SET page_title = ?, page_content = ?, active_st = ?, mdb = ?, mdd= NOW() WHERE page_id = ?";
        return $this->db->query($sql, $params);
    }

}