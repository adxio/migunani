<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
// load base class if needed
require_once( APPPATH . 'controllers/base/PublicBase.php' );

// --

class qualityofperformance extends ApplicationBase {

    // constructor
    public function __construct() {
        // parent constructor
        parent::__construct();
        //load model
        $this->load->model('m_page');
        // load global
        $this->load->library('tnotification');
    }

    // view
    public function index($status = "") {
        // set template content
        $this->smarty->assign("template_content", "public/qualityofperformance.html");
        // get data
        $this->smarty->assign("rs_quality", $this->m_page->get_all_page_by_cat(intval(6)));
        //client
//        $this->smarty->assign("rs_client", $this->m_client->get_all_client());
//        //--
//        $this->smarty->assign("latest_project", $this->m_project->get_latest_project());
//        //--
//        $this->smarty->assign("url_client", site_url("home/project/client/"));
//        $this->smarty->assign("url_project", site_url("home/project/title/"));
        // output
        parent::display();
    }

}