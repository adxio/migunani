                                <?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

// --
class m_project extends CI_Model {

    function __construct() {
        // Call the Model constructor
        parent::__construct();
    }

    // get last inserted id
    function get_last_inserted_id() {
        return $this->db->insert_id();
    }

    // get all portal
    function get_all_project_cat() {
        $sql = "SELECT * FROM com_project_cat ORDER BY cat_name ASC";
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
        $sql = "SELECT * FROM com_project_cat WHERE cat_id = ?";
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
        $sql = "DELETE from com_project_cat WHERE cat_id = ?";
        return $this->db->query($sql, $params);
    }

    //update data
    function update($params) {
        $sql = "UPDATE com_project_cat SET cat_name = ?,cat_description = ?,mdb = ?,mdd= NOW()WHERE cat_id = ?";
        return $this->db->query($sql, $params);
    }

    //insert data
    function insert($params) {
        $sql = "INSERT com_project_cat(cat_name,cat_description,mdb,mdd)VALUES(?,?,?,NOW())";
        return $this->db->query($sql, $params);
    }

    //get all project content
    function get_latest_project() {
        $sql = "SELECT * FROM trx_project WHERE active_st = 1 LIMIT 0,5";
        $query = $this->db->query($sql);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    //get all project content
    function get_all_project_by_cat($params) {
        $sql = "SELECT * FROM trx_project WHERE project_cat = ? LIMIT ?,?";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    //get all project content
    function get_detail_project_by_cat($params) {
        $sql = "SELECT * FROM trx_project WHERE project_cat = ? AND project_id = ?";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    function get_total_data($params) {
        $sql = "SELECT COUNT(*)'total' FROM trx_project WHERE project_cat = ?";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows() > 0) {
            $result = $query->row_array();
            $query->free_result();
            return $result['total'];
        } else {
            return 0;
        }
    }

    //insert data
    function insert_project($params) {
        $sql = "INSERT trx_project (client_id, project_cat, project_title, project_content, project_location, start_date, end_date, active_st, create_date, mdb, mdd)
                VALUES(?, ?, ?, ?, ?, ?, ?, ?, NOW(), ?, NOW())";
        return $this->db->query($sql, $params);
    }

    //update data
    function update_project($params) {
        $sql = "UPDATE trx_project SET client_id = ?, project_title = ?, project_content = ?, project_location = ?, start_date = ?, end_date = ?, active_st = ?, mdd = now() WHERE project_cat = ? AND project_id = ?";
        return $this->db->query($sql, $params);
    }

    //delete data
    function delete_project($params) {
        $sql = "DELETE from trx_project WHERE project_id = ? AND project_cat = ?";
        return $this->db->query($sql, $params);
    }

    //update data
    function update_gal_id($params) {
        $sql = "UPDATE trx_galery SET project_id = ? WHERE gal_cat = ? AND gal_nm = ?";
        return $this->db->query($sql, $params);
    }

    function get_galery_by_id($params) {
        $sql = "SELECT * FROM trx_project a INNER JOIN trx_galery b ON a.project_id = b.project_id AND a.project_cat = b.gal_cat WHERE a.project_cat = ? AND b.project_id = ? ORDER BY b.gal_id ";
        $query = $this->db->query($sql, $params);
        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }

    //get project by client
    function get_project_by_client_name($params) {
        $this->db->select('client_id');
        $this->db->where('client_name', $params);
        $data = $this->db->get('trx_client');
        if ($data->num_rows > 0) {
            return $data->row();
        } else {
            return $data = array();
        }
    }

    //get all project by client id
    function get_all_project_by_client_id($id) {
        $this->db->where('client_id', $id);
        $data = $this->db->get('trx_project');
        if ($data->num_rows > 0) {
            return $data->result_array();
        } else {
            return $data = array();
        }
    }

    //get year
    function get_year() {
        $data = $this->db->query("select distinct(year(start_date)) year from trx_project");
        if ($data->num_rows > 0) {
            return $data->result_array();
        } else {
            return $data = array();
        }
    }

    //get project by project_id
    function get_project_by_id($params) {
        $this->db->where('active_st', 1);
        $this->db->where('project_id', $params);
        $data = $this->db->get('trx_project');
        if ($data->num_rows > 0) {
            return $data->row_array();
        } else {
            return $data = array();
        }
    }

    //get project by project_cat
    function get_project_cat_by_trx_project_cat($params) {
        $this->db->where('active_st', 1);
        $this->db->where('project_cat', $params);
        $data = $this->db->get('trx_project');
        if ($data->num_rows > 0) {
            return $data->result_array();
        } else {
            return array();
        }
    }

    function get_project_name_by_cat($params) {
        $this->db->select('cat_name');
        $this->db->where('cat_id', $params);
        $data = $this->db->get('com_project_cat');
        if ($data->num_rows > 0) {
            return $data->row_array();
        } else {
            return array();
        }
    }

    //get project by title
    function get_project_by_title($params) {
        $this->db->where('project_title', $params);
        $data = $this->db->get('trx_project');
        if ($data->num_rows > 0) {
            return $data->row();
        } else {
            return array();
        }
    }

    function get_project_cat_by_name($params) {
        $this->db->where('cat_name', $params);
        $data = $this->db->get('com_project_cat');
        if ($data->num_rows > 0) {
            return $data->row();
        } else {
            return array();
        }
    }

    function get_project_search($type, $client, $year) {
        $query = 'SELECT * FROM trx_project WHERE active_st =1 AND project_cat = ' . $type . ' AND client_id = ' . $client . ' AND (SELECT distinct year(start_date) FROM trx_project WHERE project_cat = ' . $type . ' AND client_id = ' . $client . ') = '.$year;
        $data = $this->db->query($query);
        if ($data->num_rows > 0) {
            return $data->result();
        } else {
            return array();
        }
    }

}

                            