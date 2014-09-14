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
        $this->smarty->assign("url_client", site_url("public/qualityofperformance/detail"));
        parent::display();
    }

    function detail($id=null) {
        $qop = $this->m_page->get_detail_page_by_id($id);
        $page_cat = $qop[0]['page_cat'];
        $cat_name = $this->m_page->get_page_cat_name($page_cat);
        $similiar_cat = $this->m_page->get_page_by_id($page_cat);
        $this->smarty->assign("template_content", "public/qop-page.html");
//        // get data
        $this->smarty->assign("quality", $qop);
        $this->smarty->assign("catname", $cat_name);
        $this->smarty->assign("similiar", $similiar_cat);
        $this->smarty->assign("url_client", site_url("public/qualityofperformance/detail"));
        parent::display();
    }

}
