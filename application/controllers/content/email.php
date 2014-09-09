<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
// load base class if needed
require_once( APPPATH . 'controllers/base/MemberBase.php' );

class Email extends ApplicationBase {

    public function __construct() {
        parent::__construct();
        // load
        $this->load->model('m_email');
        $this->load->library('tnotification');
        $this->load->library('tupload');
        // set global variable
    }

    public function index() {
        // set page rules
        $this->_set_page_rule("R");
        // set template content
        $this->smarty->assign("template_content", "content/email/list.html");
        //--
        $this->smarty->assign("rs_email", $this->m_email->get_all_email());
        // notification
        $this->tnotification->display_notification();
        $this->tnotification->display_last_field();
        // output
        parent::display();
    }
    
    public function delete() {
        $id = $_POST['id'];
        if ($id) {
            if ($this->m_email->delete($id)) {
                echo $id;
            }
        }
    }

}
