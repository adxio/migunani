<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

// --
class m_client extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    /*
     * Users Management
     */

    // get last inserted id
    function get_last_inserted_id() {
        return $this->db->insert_id();
    }

    // get total user
    function get_total_users() {
        $sql = "SELECT COUNT(*)'total' FROM trx_client";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result['total'];
        } else {
            return 0;
        }
    }

    // get all user limit
    function get_all_client() {
        $sql = "SELECT * FROM trx_client ORDER BY client_id";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    // get detail user by id
    function get_detail_by_id($client_id) {
        $sql = "SELECT * FROM trx_client WHERE client_id = ?";
        $query = $this->db->query($sql, $client_id);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    // check username
    function is_exist_name($username) {
        $sql = "SELECT COUNT(*)'total' FROM trx_client WHERE client_name = ?";
        $query = $this->db->query($sql, $username);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            if ($result['total'] == 0) {
                return false;
            }
        }
        return true;
    }

    // get detail user by id
    function insert($params) {
        $sql = "INSERT INTO trx_client(client_name,client_desc,mdb,mdd) VALUES(?,?,?,NOW())";
        return $this->db->query($sql, $params);
    }
    // get detail user by id
    function delete($params) {
        $sql = "DELETE FROM trx_client WHERE client_id = ? ";
        return $this->db->query($sql, $params);
    }

    // get detail user by id
    function update($params) {
        $sql = "UPDATE trx_client SET client_name = ? , client_desc = ?, mdb = ?, mdd = NOW() WHERE client_id = ?";
        return $this->db->query($sql, $params);
    }

    // get detail user by id
    function update_logo($params) {
        $sql = "UPDATE trx_client SET client_logo = ? WHERE client_id = ?";
        return $this->db->query($sql, $params);
    }

}