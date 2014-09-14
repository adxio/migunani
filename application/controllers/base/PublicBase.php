                                                                <?php

class ApplicationBase extends CI_Controller {

    // init base variable
    protected $portal_id;
    protected $com_portal;
    protected $com_user;
    protected $nav_id = 0;
    protected $parent_id = 0;
    protected $parent_selected = 0;
    protected $event_id = 0;

    public function __construct() {
        // load basic controller
        parent::__construct();
        // load app data
        $this->base_load_app();
        // view app data
        $this->base_view_app();
        //get model m_project
    }

    /*
     * Method pengolah base load
     * diperbolehkan untuk dioverride pada class anaknya
     */

    protected function base_load_app() {
        // load themes (themes default : default)
        $this->smarty->load_themes("public");
        //load style
        $this->smarty->load_style("public/css/slide.css");
        //load javascript
        $this->smarty->load_javascript('resource/js/jquery/jquery-1.4.2.min.js');
        $this->smarty->load_javascript('resource/js/jquery.navigation/superfish.js');
        $this->smarty->load_javascript('resource/js/jquery.navigation/supersubs.js');
        $this->smarty->load_javascript('resource/js/jquery.navigation/hoverintent.js');
        $this->smarty->load_javascript('resource/js/jquery.slide/jquery.easing.1.3.js');
        $this->smarty->load_javascript('resource/js/jquery.slide/jquery.skitter.js');
        // load base models
        // load helpers
        $this->load->library("datetimemanipulation");
        //setlocale time and other environment
        setlocale(LC_ALL, 'id_ID.UTF8', 'id_ID.UTF-8', 'id_ID.8859-1', 'id_ID', 'IND.UTF8', 'IND.UTF-8', 'IND.8859-1', 'IND', 'Indonesian.UTF8', 'Indonesian.UTF-8', 'Indonesian.8859-1', 'Indonesian', 'Indonesia', 'id', 'ID', 'id_ID.ISO_8859-1');
        // load javascript
        // get active event
        // set date now
        $this->date_now = date('Y') . '-' . date('m') . '-' . date('d');
        $this->now_format = date('d') . '-' . date('m') . '-' . date('Y');
        $this->now = $this->datetimemanipulation->arr_hari[date('N')] . "," . $this->datetimemanipulation->get_full_date($this->date_now);
        $this->day = $this->datetimemanipulation->arr_hari[date('N')];
        $this->smarty->assign("now", $this->now);
    }

    /*
     * Method pengolah base view
     * diperbolehkan untuk dioverride pada class anaknya
     */

    protected function base_view_app() {
        $this->smarty->assign("config", $this->config);
        // display global link
        self::_display_base_link();
        // display site title
        self::_display_site_title();
        // display current page
        self::_display_current_page();
        // display top navigation
        self::_display_top_navigation();
        //display widget data statistik
        self::_display_data_widget();
        /*
         *  global
         */
        // stats
        // --
        // footer
        self::_display_footer();
    }

    /*
     * Method layouting base document
     * diperbolehkan untuk dioverride pada class anaknya
     */

    protected function display($tmpl_name = 'base/public/document.html') {
        // set template
        $this->smarty->display($tmpl_name);
    }

    //
    // base private method here
    // prefix ( _ )
    // base link
    private function _display_base_link() {
        // logout
        $this->load->model('m_project');
        $this->smarty->assign("home_url", site_url("public/home"));
        $this->smarty->assign("about_us_url", site_url("public/aboutus"));
        $this->smarty->assign("contact_url", site_url("public/contact"));
        $this->smarty->assign("project_url", site_url("public/project/category"));
        //$this->smarty->assign("project_url", site_url("public/project"));
        /* project kind */
        $this->smarty->assign("project_cat", $this->m_project->get_all_project_cat());
        $this->smarty->assign("personel_url", site_url("public/personel"));
        $this->smarty->assign("quality_of_performance_url", site_url("public/qualityofperformance"));
    }

    // site title
    private function _display_site_title() {
        $this->portal_id = $this->config->item('public');
        // site data
    }

    // get current page
    private function _display_current_page() {
        $url = $this->router->fetch_class();
        $this->smarty->assign("url", $url);
    }

    // top navigation
    private function _display_top_navigation() {
        // get parent selected
    }

    // utility to get parent selected
    private function _get_parent_group() {
        
    }

    // display footer
    private function _display_footer() {
        // display 
    }

    //display data statistik widget
    private function _display_data_widget() {
        //declare variable
    }

}
                            
                            
                            
                            