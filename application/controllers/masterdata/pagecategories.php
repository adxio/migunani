<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
// load base class if needed
require_once( APPPATH . 'controllers/base/MemberBase.php' );

// --

class pagecategories extends ApplicationBase {

    // constructor
    public function __construct() {
        // parent constructor
        parent::__construct();
        // load
        $this->load->model('m_page');
        $this->load->library('tnotification');
        // set global variable
    //
    }

    // list portal menu
    public function index() {
        // set page rules
        $this->_set_page_rule("R");
        // set template content
        $this->smarty->assign("template_content", "masterdata/pagecategories/list.html");
        //--
        $this->smarty->assign("rs_id", $this->m_page->get_all_page_cat());
        // notification
        $this->tnotification->display_notification();
        $this->tnotification->display_last_field();
        // output
        parent::display();
    }

    //delete data
    public function delete() {
        $id = substr($_POST['id'], 1, 1);
        if ($id) {
            if ($this->m_page->delete($id)) {
                echo $id;
            }
        }
    }

    //edit data
    public function add() {
        // set page rules
        $this->_set_page_rule("U");
        // set template content
        $this->smarty->assign("template_content", "masterdata/pagecategories/add.html");
        // notification
        $this->tnotification->display_notification();
        $this->tnotification->display_last_field();
        // output
        parent::display();
    }

    //edit data
    public function update($params) {
        // set page rules
        $this->_set_page_rule("U");
        // set template content
        $this->smarty->assign("template_content", "masterdata/pagecategories/update.html");
        // get data
        $result = $this->m_page->get_detail_by_id($params);
        $this->smarty->assign("result", $result);
        // notification
        $this->tnotification->display_notification();
        $this->tnotification->display_last_field();
        // output
        parent::display();
    }

    // edit process
    public function add_process() {
        // set page rules
        $this->_set_page_rule("U");
        // cek input
        $this->tnotification->set_rules('cat_name', 'Category Name', 'trim|required');
        $this->tnotification->set_rules('cat_description', 'Category Decription', 'trim|required');
        // process
        if ($this->tnotification->run() !== FALSE) {
            $params = array($this->input->post('cat_name'), $this->input->post('cat_description'),
                $this->com_user['user_id']);
            // insert
            if ($this->m_page->insert($params)) {
                $this->tnotification->delete_last_field();
                $this->tnotification->sent_notification("success", "Data berhasil disimpan");
            } else {
                // default error
                $this->tnotification->sent_notification("error", "Data gagal disimpan");
            }
        } else {
            // default error
            $this->tnotification->sent_notification("error", "Data gagal disimpan");
        }
        // default redirect
        redirect("masterdata/pagecategories/add/");
    }

    // edit process
    public function update_process() {
        // set page rules
        $this->_set_page_rule("U");
        // cek input
        $this->tnotification->set_rules('cat_id', 'Category ID', 'trim|required|is_numeric');
        $this->tnotification->set_rules('cat_name', 'Category Name', 'trim|required');
        $this->tnotification->set_rules('cat_description', 'Category Decription', 'trim|required');
        // process
        if ($this->tnotification->run() !== FALSE) {
            $params = array($this->input->post('cat_name'), $this->input->post('cat_description'),
                $this->com_user['user_id'], $this->input->post('cat_id'));
            // insert
            if ($this->m_page->update($params)) {
                $this->tnotification->delete_last_field();
                $this->tnotification->sent_notification("success", "Data berhasil disimpan");
            } else {
                // default error
                $this->tnotification->sent_notification("error", "Data gagal disimpan");
            }
        } else {
            // default error
            $this->tnotification->sent_notification("error", "Data gagal disimpan");
        }
        // default redirect
        redirect("masterdata/pagecategories/update/" . $this->input->post('cat_id'));
    }

}