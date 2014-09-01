<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
// load base class if needed
require_once( APPPATH . 'controllers/base/MemberBase.php' );

// --

class page extends ApplicationBase {

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
        $this->smarty->assign("template_content", "content/page/list.html");
        //--
        $this->smarty->assign("rs_id", $this->m_page->get_all_page_cat());
        
        redirect("content/page/manage/6");
        // notification
        $this->tnotification->display_notification();
        $this->tnotification->display_last_field();
        // output
        parent::display();
    }

    //edit data
    public function manage($params) {
        // set page rules
        $this->_set_page_rule("U");
        // set template content
        if ($params != '6') {
            $this->smarty->assign("template_content", "content/page/manage.html");
        } else {
            $this->smarty->assign("template_content", "content/page/list_quality.html");
        }
        // get data
        // notification
        $this->tnotification->display_notification();
        $this->tnotification->display_last_field();
        // output
        parent::display();
    }

    //edit data
    public function manage_quality($page_id, $cat_id) {
        // set page rules
        $this->_set_page_rule("U");
        // set template content
        $this->smarty->assign("template_content", "content/page/manage.html");
        // get data
        $result = $this->m_page->get_page_detail_by_id(array($cat_id, $page_id));
        $this->smarty->assign("result", $result);
        // notification
        $this->tnotification->display_notification();
//        $this->tnotification->display_last_field();
        // output
        parent::display();
    }

    // edit process
    public function manage_process() {
        // set page rules
        $this->_set_page_rule("U");
        // cek input
        $this->tnotification->set_rules('page_id', 'Page ID', 'trim|required|is_numeric');
        $this->tnotification->set_rules('page_cat', 'Page Category ID', 'trim|is_numeric');
        $this->tnotification->set_rules('page_title', 'Page Title', 'trim|required');
        $this->tnotification->set_rules('page_content', 'Page Content', 'trim|required');
        $this->tnotification->set_rules('active_st', 'Active Status', 'trim|required|is_numeric');
        // process
        if ($this->tnotification->run() !== FALSE) {
            $params = array($this->input->post('page_title'), $this->input->post('page_content'),
                $this->input->post('active_st'), $this->com_user['user_id'], $this->input->post('page_id'));
            // insert
            if ($this->m_page->manage($params)) {
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
        //assign var
        $page_cat = $this->input->post('page_cat');
        $page_id = $this->input->post('page_id');
        //redirect
        if ($page_cat != '6') {
            // default redirect
            redirect("content/page/manage/" . $this->input->post('page_id'));
        } else {
            redirect("content/page/manage_quality/" . $page_id . "/" . $page_cat);
        }
    }

}