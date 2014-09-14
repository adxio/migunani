                                <?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
// load base class if needed
require_once( APPPATH . 'controllers/base/PublicBase.php' );

// --

class project extends ApplicationBase {

    // constructor
    public function __construct() {
        // parent constructor
        parent::__construct();
        //load model
        $this->load->model('m_client');
        $this->load->model('m_project');
        $this->load->model('m_galery');
        // load global
        $this->load->library('tnotification');
    }

    // view
    public function index($id=null) {
        // set template content
        $project_cat = $this->m_project->get_project_by_id($id);
        if ($id == NULL or $project_cat == NULL) {
            $this->smarty->assign("template_content", "public/project.html");
            $this->smarty->assign("rs_project_cat", $this->m_project->get_all_project_cat());
            $this->smarty->assign("rs_project", $this->m_project->get_project_by_id($id));
            $this->smarty->assign("rs_client", $this->m_client->get_all_client());
            $this->smarty->assign("rs_year", $this->m_project->get_year());
        } else {
            $cat = $project_cat['project_cat'];
            $this->smarty->assign("template_content", "public/project-page.html");
            $this->smarty->assign("proj", $this->m_project->get_project_by_id($id));
            $this->smarty->assign("galery", $this->m_galery->get_galery_by_project_id($id));
            $this->smarty->assign("catname", $this->m_project->get_project_name_by_cat($cat));
            $this->smarty->assign("category", $this->m_project->get_project_cat_by_trx_project_cat($cat));
            $this->smarty->assign("url_client", site_url("public/project/"));
        }
        parent::display();
    }
    
    function detail($id) {
        $project_cat = $this->m_project->get_project_by_id($id);
        $cat = $project_cat['project_cat'];
        $this->smarty->assign("template_content", "public/project-page.html");
        $this->smarty->assign("proj", $this->m_project->get_project_by_id($id));
        $this->smarty->assign("galery", $this->m_galery->get_galery_by_project_id($id));
        $this->smarty->assign("catname", $this->m_project->get_project_name_by_cat($cat));
        $this->smarty->assign("category", $this->m_project->get_project_cat_by_trx_project_cat($cat));
        $this->smarty->assign("url_client", site_url("public/project/detail/"));
        parent::display();
    }
    
    public function category($id=null) {
        $id = str_replace('%20', ' ', $id);
        // set template content
        $project_cat = $this->m_project->get_project_cat_by_name($id);
        $this->smarty->assign("template_content", "public/project.html");
        $this->smarty->assign("rs_project_cat", $this->m_project->get_all_project_cat());
        if ($id == NULL or $project_cat == NULL) {
            $this->smarty->assign("rs_project", $this->m_project->get_project_by_id($id));
        } else {
            $cat = $project_cat->cat_id;
            $this->smarty->assign("rs_project", $this->m_project->get_project_cat_by_trx_project_cat($cat));
        }
        $this->smarty->assign("rs_client", $this->m_client->get_all_client());
        $this->smarty->assign("rs_year", $this->m_project->get_year());
        $this->smarty->assign("url_client", site_url("public/project/"));
        parent::display();
    }
    
    public function client($name) {
        $new_name = str_replace('%20', ' ', $name);
        $data = $this->m_project->get_project_by_client_name($new_name);
        $id = $data->client_id;
        $this->smarty->assign("template_content", "public/project.html");
        $this->smarty->assign("rs_project", $this->m_project->get_all_project_by_client_id($id));
        $this->smarty->assign("rs_project_cat", $this->m_project->get_all_project_cat());
        $this->smarty->assign("rs_client", $this->m_client->get_all_client());
        $this->smarty->assign("rs_year", $this->m_project->get_year());
        $this->smarty->assign("url_client", site_url("public/project/"));
        parent::display();
    }

    public function title($name) {
        $new_name = str_replace('%20', ' ', $name);
        $data = $this->m_project->get_project_by_title($new_name);
        $id = $data->project_id;
        $project_cat = $this->m_project->get_project_by_id($id);
        $cat = $project_cat['project_cat'];
        $this->smarty->assign("template_content", "public/project-page.html");
        $this->smarty->assign("project", $this->m_project->get_project_by_id($id));
        $this->smarty->assign("catname", $this->m_project->get_project_name_by_cat($cat));
        $this->smarty->assign("category", $this->m_project->get_project_cat_by_trx_project_cat($cat));
        $this->smarty->assign("galery", $this->m_galery->get_galery_by_project_id($id));
        $this->smarty->assign("url_client", site_url("public/project/"));
        parent::display();
    }
    
    public function ajax_category() {
        $type = $this->input->post('project_type');
        $client = $this->input->post('client');
        $year = $this->input->post('year');
        $data = $this->m_project->get_project_search($type, $client, $year);
        if (empty($data)) {
            echo '<div style="font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
                font-weight:bold;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
                border-radius:5px;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;">Data tidak ditemukan</div>';
        }
        foreach ($data as $value) {
            echo '<h2 class="trigger"><span>' . $value->project_title . '</span></h2><div class="toggle_container"><div>';
            echo '<p>'.$value->project_content.'</p></div><div class="more"><a href=detail/' . $value->project_id . '>Readmore</a></div></div>';
        }
    }

}
                            
                            
                            
                            
                            
                            
                            
                            