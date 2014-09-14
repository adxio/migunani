<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
// load base class if needed
require_once( APPPATH . 'controllers/base/PublicBase.php' );

// --

class contact extends ApplicationBase {

    // constructor
    public function __construct() {
        // parent constructor
        parent::__construct();
        //load model
        $this->load->model('m_client');
        $this->load->model('m_project');
        $this->load->model('m_email');
        // load global
        $this->load->library('tnotification');
    }

    // view
    public function index($status = "") {
        // set template content
        $this->smarty->assign("template_content", "public/contact.html");
        // output
        parent::display();
    }

    function add() {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'Name', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('msg', 'Message', 'required');
        if ($this->form_validation->run() == FALSE) {
            
        } else {
            $data = array(
                'email_name' => $this->input->post('name'),
                'email_address' => $this->input->post('email'),
                'email_subject' => $this->input->post('subject'),
                'email_message' => $this->input->post('msg')
            );
            $this->m_email->add($data);
            echo '<div style="padding: 15px;margin-bottom: 20px;border: 1px solid transparent;border-radius: 4px;color: #8a6d3b;background-color: #fcf8e3;border-color: #faebcc;">Data berhasil disimpan.</div>';
        }
    }

}

                            