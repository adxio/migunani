<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
// load base class if needed
require_once( APPPATH . 'controllers/base/MemberBase.php' );

// --

class project extends ApplicationBase {

    // constructor
    public function __construct() {
        // parent constructor
        parent::__construct();
        // load
        $this->load->model('m_project');
        $this->load->model('m_client');
        $this->load->library('tnotification');
        $this->load->library('pagination');
        // set global variable
    //
    }

    // list portal menu
    public function index() {
        // set page rules
        $this->_set_page_rule("R");
        // set template content
        $this->smarty->assign("template_content", "content/project/list.html");
        //--
        $this->smarty->assign("rs_id", $this->m_project->get_all_project_cat());
        // notification
        $this->tnotification->display_notification();
        $this->tnotification->display_last_field();
        // output
        parent::display();
    }

    //edit data
    public function manage($cat_id) {
        // set page rules
        $this->_set_page_rule("U");
        // set template content
        $this->smarty->assign("template_content", "content/project/list_project.html");
        /* start of pagination --------------------- */
        // pagination
        $config['base_url'] = site_url("content/project/manage/$cat_id/");
        $config['total_rows'] = $this->m_project->get_total_data($cat_id);
        $config['uri_segment'] = 5;
        $config['per_page'] = 10;
        $config['num_links'] = 2;
        $this->pagination->initialize($config);
        $pagination['data'] = $this->pagination->create_links();
        // pagination attribute
        $start = $this->uri->segment(5, 0) + 1;
        $end = $this->uri->segment(5, 0) + $config['per_page'];
        $end = (($end > $config['total_rows']) ? $config['total_rows'] : $end);
        $pagination['start'] = ($config['total_rows'] == 0) ? 0 : $start;
        $pagination['end'] = $end;
        $pagination['total'] = $config['total_rows'];
        // pagination assign value
        $this->smarty->assign("pagination", $pagination);
        $this->smarty->assign("no", $start);
        /* end of pagination ---------------------- */
        // get data
        $params = array($cat_id, ($start - 1), $config['per_page']);
        $this->smarty->assign("rs_id", $this->m_project->get_all_project_by_cat($params));
        //--
        $this->smarty->assign("page_cat", $this->m_project->get_detail_by_id($cat_id));
        //client
        $this->smarty->assign("rs_client", $this->m_client->get_all_client());
        //--
        // notification
        $this->tnotification->display_notification();
        $this->tnotification->display_last_field();
        // output
        parent::display();
    }

    //edit data
    public function add($params) {
        // set page rules
        $this->_set_page_rule("C");
        // set template content
        $this->smarty->assign("template_content", "content/project/add.html");
        //--
        $loc_folder = "resource/galery/temp/" . $params;
        //--
        $this->rrmdir($loc_folder);

        //load style for upload library
        $this->smarty->load_style("bootstrap/css/bootstrap.min.css");
        $this->smarty->load_style("fileupload/blueimp-gallery.min.css");
        $this->smarty->load_style("fileupload/jquery.fileupload.css");
        $this->smarty->load_style("fileupload/jquery.fileupload-ui.css");
//        $this->smarty->load_style("fileupload/jquery.fileupload-noscript.css");
//        $this->smarty->load_style("fileupload/jquery.fileupload-ui-noscript.css");
        //load jquery upload library
        $this->smarty->load_javascript('resource/js/jquery.upload/vendor/jquery.ui.widget.js');
        $this->smarty->load_javascript('resource/js/jquery.upload/tmpl.min.js');
        $this->smarty->load_javascript('resource/js/jquery.upload/jquery.load-image.min.js');
        $this->smarty->load_javascript('resource/js/jquery.upload/jquery.canvas-to-blob.min.js');
        //--
        $this->smarty->load_javascript('resource/js/bootstrap/bootstrap.min.js');
        //--
        $this->smarty->load_javascript('resource/js/jquery.upload/jquery.blueimp-gallery.min.js');
        $this->smarty->load_javascript('resource/js/jquery.upload/jquery.iframe-transport.js');
        $this->smarty->load_javascript('resource/js/jquery.upload/jquery.fileupload.js');
        $this->smarty->load_javascript('resource/js/jquery.upload/jquery.fileupload-process.js');
        $this->smarty->load_javascript('resource/js/jquery.upload/jquery.fileupload-image.js');
        $this->smarty->load_javascript('resource/js/jquery.upload/jquery.fileupload-audio.js');
        $this->smarty->load_javascript('resource/js/jquery.upload/jquery.fileupload-video.js');
        $this->smarty->load_javascript('resource/js/jquery.upload/jquery.fileupload-validate.js');
        $this->smarty->load_javascript('resource/js/jquery.upload/jquery.fileupload-ui.js');
        //$this->smarty->load_javascript('resource/js/jquery.upload/main.js');
        //--
        $this->smarty->assign("page_cat", $this->m_project->get_detail_by_id($params));
        $this->smarty->assign("rs_client", $this->m_client->get_all_client());
        // notification
        $this->tnotification->display_notification();
        $this->tnotification->display_last_field();
        // output
        parent::display();
    }

    //edit data
    public function update($cat_id = "", $project_id = "") {
        // set page rules
        $this->_set_page_rule("U");
        // set template content
        $this->smarty->assign("template_content", "content/project/edit.html");
        $result = $this->m_project->get_detail_project_by_cat(array($cat_id, $project_id));
        if (!empty($result)) {
            $this->smarty->assign('result', $result);
        } else {
            redirect('content/project/');
        }

        //load style for upload library
        $this->smarty->load_style("bootstrap/css/bootstrap.min.css");
        $this->smarty->load_style("fileupload/blueimp-gallery.min.css");
        $this->smarty->load_style("fileupload/jquery.fileupload.css");
        $this->smarty->load_style("fileupload/jquery.fileupload-ui.css");
//        $this->smarty->load_style("fileupload/jquery.fileupload-noscript.css");
//        $this->smarty->load_style("fileupload/jquery.fileupload-ui-noscript.css");
        //load jquery upload library
        $this->smarty->load_javascript('resource/js/jquery.upload/vendor/jquery.ui.widget.js');
        $this->smarty->load_javascript('resource/js/jquery.upload/tmpl.min.js');
        $this->smarty->load_javascript('resource/js/jquery.upload/jquery.load-image.min.js');
        $this->smarty->load_javascript('resource/js/jquery.upload/jquery.canvas-to-blob.min.js');
        //--
        $this->smarty->load_javascript('resource/js/bootstrap/bootstrap.min.js');
        //--
        $this->smarty->load_javascript('resource/js/jquery.upload/jquery.blueimp-gallery.min.js');
        $this->smarty->load_javascript('resource/js/jquery.upload/jquery.iframe-transport.js');
        $this->smarty->load_javascript('resource/js/jquery.upload/jquery.fileupload.js');
        $this->smarty->load_javascript('resource/js/jquery.upload/jquery.fileupload-process.js');
        $this->smarty->load_javascript('resource/js/jquery.upload/jquery.fileupload-image.js');
        $this->smarty->load_javascript('resource/js/jquery.upload/jquery.fileupload-audio.js');
        $this->smarty->load_javascript('resource/js/jquery.upload/jquery.fileupload-video.js');
        $this->smarty->load_javascript('resource/js/jquery.upload/jquery.fileupload-validate.js');
        $this->smarty->load_javascript('resource/js/jquery.upload/jquery.fileupload-ui.js');
        //$this->smarty->load_javascript('resource/js/jquery.upload/main.js');
        //--
        $this->smarty->assign("page_cat", $this->m_project->get_detail_by_id($cat_id));
        $this->smarty->assign("rs_client", $this->m_client->get_all_client());
        $this->smarty->assign("project_id", $project_id);
        // notification
        $this->tnotification->display_notification();
        $this->tnotification->display_last_field();
        // output
        parent::display();
    }

    //detail data
    public function detail($cat_id = "", $project_id = "") {
        // set page rules
        $this->_set_page_rule("U");
        // set template content
        $this->smarty->assign("template_content", "content/project/detail.html");
        $result = $this->m_project->get_detail_project_by_cat(array($cat_id, $project_id));
        if (!empty($result)) {
            $this->smarty->assign('result', $result);
        } else {
            redirect('content/project/');
        }

        //load style for upload library
        $this->smarty->load_style("fileupload/blueimp-gallery.min.css");
        //--
        $this->smarty->load_javascript('resource/js/jquery.upload/jquery.blueimp-gallery.min.js');
        //--
        $this->smarty->assign("page_cat", $this->m_project->get_detail_by_id($cat_id));
        $this->smarty->assign("project_id", $project_id);
        //client
        $this->smarty->assign("rs_client", $this->m_client->get_all_client());
        //galery

        $this->smarty->assign("rs_id", $this->m_project->get_galery_by_id(array($cat_id, $project_id)));
        // notification
        $this->tnotification->display_notification();
        $this->tnotification->display_last_field();
        // output
        parent::display();
    }

    // Function to remove folders and files 
    function rrmdir($dir) {
        if (is_dir($dir)) {
            $files = scandir($dir);
            foreach ($files as $file) {
                if ($file != "." && $file != "..") {
                    $this->rrmdir("$dir/$file");
                }
            }
            rmdir($dir);
        } else if (file_exists($dir)) {
            unlink($dir);
        }
    }

    // Function to Copy folders and files       
    function rcopy($src, $dst) {
        if (file_exists($dst)) {
            $this->rrmdir($dst);
        }
        if (is_dir($src)) {
            mkdir($dst, 0, true);
            $files = scandir($src);
            foreach ($files as $file)
                if ($file != "." && $file != "..")
                    $this->rcopy("$src/$file", "$dst/$file");
        } else if (file_exists($src))
            copy($src, $dst);
    }

    //delete data
    public function delete() {
        $id = explode('#', $_POST['id']);
        if (!empty($id)) {
            if ($this->m_project->delete_project(array($id[0], $id[1]))) {
                echo $id[0];
            }
        }
    }

    //load library
    public function do_upload($cat_id = "", $project_id = "") {
        $_SESSION['uploaded']["cat_id"] = $cat_id;
        $_SESSION['uploaded']["project_id"] = $project_id;
        $_SESSION['uploaded']['user_id'] = $this->com_user['user_id'];
        $_SESSION["image"]["max_file_size"] = 2000000;

        //url upload
        $_SESSION['uploaded']["upload_dir"] = "resource/galery/temp/" . $cat_id . "/";
        $_SESSION['uploaded']["delete_url"] = "content/project/do_upload/" . $cat_id . "/" . $project_id;
        $_SESSION['uploaded']["upload_url"] = "resource/galery/temp/" . $cat_id . "/";
        //--
        if (!empty($project_id)) {
            $_SESSION['uploaded']['upload_url'] = '/resource/galery/project/' . $cat_id . "/" . $project_id . "/";
            $_SESSION['uploaded']['upload_dir'] = '/resource/galery/project/' . $cat_id . "/" . $project_id . "/";
        }
        $this->load->model('m_upload');
        //---
    }

    // edit process
    public function add_process() {
        // set page rules
        $this->_set_page_rule("U");
        // cek input
        $this->tnotification->set_rules('client_id', 'ID Client', 'trim|required|is_numeric');
        $this->tnotification->set_rules('project_cat', 'Project Category', 'trim|required|is_numeric');
        $this->tnotification->set_rules('project_title', 'Project Title', 'trim|required|max_length[150]');
        $this->tnotification->set_rules('project_content', 'Project Content', 'trim|required');
        $this->tnotification->set_rules('start_date', 'Start Date', 'trim|required');
        $this->tnotification->set_rules('end_date', 'End Date', 'trim|required');
        $this->tnotification->set_rules('active_st', 'Active Status', 'trim|required|is_numeric');
        // process
        if ($this->tnotification->run() !== FALSE) {
            $params = array($this->input->post('client_id'), $this->input->post('project_cat'), $this->input->post('project_title'),
                $this->input->post('project_content'), $this->input->post('project_location'), date("Ymd", strtotime($this->input->post('start_date'))), date("Ymd", strtotime($this->input->post('end_date'))), $this->input->post('active_st'), $this->com_user['user_id']);
            // insert
            if ($this->m_project->insert_project($params)) {
                //copy file to destionation
                $src = "resource/galery/temp/" . $this->input->post('project_cat') . "/";
                $dst = "resource/galery/project/" . $this->input->post('project_cat') . "/" . $this->m_project->get_last_inserted_id() . "/";
                //--
                $this->rcopy($src, $dst);
                //--
                if (is_dir($dst)) {
                    $files = scandir($dst);
                    foreach ($files as $file) {
                        if ($file != "." && $file != ".." && !is_dir($file)) {
                            //--
                            $this->m_project->update_gal_id(array($this->m_project->get_last_inserted_id(), $this->input->post('project_cat'), $file));
                        }
                    }
                }
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
        redirect("content/project/add/" . $this->input->post('project_cat'));
    }

    // edit process
    public function update_process() {
        // set page rules
        $this->_set_page_rule("U");
        // cek input
        $this->tnotification->set_rules('project_id', 'Project ID', 'trim|required|is_numeric');
        $this->tnotification->set_rules('client_id', 'ID Client', 'trim|required|is_numeric');
        $this->tnotification->set_rules('project_cat', 'Project Category', 'trim|required|is_numeric');
        $this->tnotification->set_rules('project_title', 'Project Title', 'trim|required|max_length[150]');
        $this->tnotification->set_rules('project_content', 'Project Content', 'trim|required');
        $this->tnotification->set_rules('start_date', 'Start Date', 'trim|required');
        $this->tnotification->set_rules('end_date', 'End Date', 'trim|required');
        $this->tnotification->set_rules('active_st', 'Active Status', 'trim|required|is_numeric');

        // process
        if ($this->tnotification->run() !== FALSE) {
            $params = array($this->input->post('client_id'), $this->input->post('project_title'),
                $this->input->post('project_content'), $this->input->post('project_location'), date("Ymd", strtotime($this->input->post('start_date'))), date("Ymd", strtotime($this->input->post('end_date'))), $this->input->post('active_st'), $this->input->post('project_cat'), $this->input->post('project_id'));
            // insert
            if ($this->m_project->update_project($params)) {
                //copy file to destionation
                $dst = "resource/galery/project/" . $this->input->post('project_cat') . "/" . $this->input->post('project_id') . "/";
                //--
                if (is_dir($dst)) {
                    $files = scandir($dst);
                    foreach ($files as $file) {
                        if ($file != "." && $file != ".." && !is_dir($file)) {
                            //--
                            $this->m_project->update_gal_id(array($this->input->post('project_id'), $this->input->post('project_cat'), $file));
                        }
                    }
                }
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
        redirect("content/project/update/" . $this->input->post('project_cat') . "/" . $this->input->post('project_id'));
    }

}