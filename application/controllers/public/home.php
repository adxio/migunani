                                <?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
// load base class if needed
require_once( APPPATH . 'controllers/base/PublicBase.php' );

// --

class home extends ApplicationBase {

    // constructor
    public function __construct() {
        // parent constructor
        parent::__construct();
        //load model
        $this->load->model('m_client');
        $this->load->model('m_project');
        // load global
        $this->load->library('tnotification');
    }

    // view
    public function index($status = "") {
        // set template content
        $this->smarty->assign("template_content", "public/home.html");
        //client
        $this->smarty->assign("rs_client", $this->m_client->get_all_client());
        //--
        $this->smarty->assign("latest_project", $this->m_project->get_latest_project());
        //--
        $this->smarty->assign("url_client", site_url("public/project/client/"));
        $this->smarty->assign("url_project", site_url("public/project/detail/"));
        // output
        parent::display();
    }

}
                            