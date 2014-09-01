<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
// load base class if needed
require_once( APPPATH . 'controllers/base/MemberBase.php' );

// --

class client extends ApplicationBase {

    // constructor
    public function __construct() {
        // parent constructor
        parent::__construct();
        // load
        $this->load->model('m_client');
        $this->load->library('tnotification');
        $this->load->library('tupload');
        // set global variable
    //
    }

    // list portal menu
    public function index() {
        // set page rules
        $this->_set_page_rule("R");
        // set template content
        $this->smarty->assign("template_content", "masterdata/client/list.html");
        //--
        $this->smarty->assign("rs_id", $this->m_client->get_all_client());
        // notification
        $this->tnotification->display_notification();
        $this->tnotification->display_last_field();
        // output
        parent::display();
    }

    //delete data
    public function delete() {
        $id = $_POST['id'];
        if ($id) {
            if ($this->m_client->delete($id)) {
                echo $id;
            }
        }
    }

    //edit data
    public function add() {
        // set page rules
        $this->_set_page_rule("U");
        // set template content
        $this->smarty->assign("template_content", "masterdata/client/add.html");
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
        $this->smarty->assign("template_content", "masterdata/client/update.html");
        // get data
        $result = $this->m_client->get_detail_by_id($params);
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
        $this->tnotification->set_rules('client_name', 'Client Name', 'trim|required');
        $this->tnotification->set_rules('client_desc', 'Client Decription', 'trim|required');

        //--
        if ($this->m_client->is_exist_name($this->input->post('client_name')) !== FALSE) {
            //--
            $this->tnotification->set_error_message("Nama Client sudah terdaftar");
        }

        if (empty($_FILES["client_logo"])) {
            //--
            $this->tnotification->set_error_message("File tidak ditemukan");
        }
        // process
        if ($this->tnotification->run() !== FALSE) {
            $params = array($this->input->post('client_name'), $this->input->post('client_desc'),
                $this->com_user['user_id']);
            // insert
            if ($this->m_client->insert($params)) {
                $str_ori_file_nm = $_FILES["client_logo"]["name"];
                $str_file_ext = strtolower(pathinfo($str_ori_file_nm, PATHINFO_EXTENSION));
                //upload config
                $config['allowed_types'] = 'gif|jpg|jpeg|png|bmp';
                $config['upload_path'] = 'resource/doc/images/client/temp';
                $config['file_name'] = $this->m_client->get_last_inserted_id() . "." . $str_file_ext;
                $config['max_size'] = '1024';

                $this->tupload->initialize($config);

                if ($this->tupload->do_upload_image("client_logo")) {
                    $file = $this->tupload->data();
                    //auto compress for 130
                    $config_resize['source_file'] = 'resource/doc/images/client/temp/' . $config['file_name'];
                    $config_resize['target_dir'] = 'resource/doc/images/client';
                    $config_resize['new_width'] = ($file['image_width'] > 130) ? 130 : $file['image_width'];
                    //resize
                    if ($this->tupload->do_resize_image($config_resize)) {
                        $params = array($config['file_name'], $this->m_client->get_last_inserted_id());
                        if ($this->m_client->update_logo($params)) {
                            $this->tnotification->sent_notification("success", "berhasil mengunggah file");
                        } else {
                            $this->tnotification->sent_notification("error", "gagal mengunggah file");
                        }
                    }
                }
                //--
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
        redirect("masterdata/client/add/");
    }

    // edit process
    public function update_process() {
        // set page rules
        $this->_set_page_rule("U");
        // cek input
        $this->tnotification->set_rules('client_name', 'Client Name', 'trim|required');
        $this->tnotification->set_rules('client_old_name', 'Client Old Name', 'trim|required');
        $this->tnotification->set_rules('client_old_logo', 'Client Old Logo', 'trim|required');
        $this->tnotification->set_rules('client_logo', 'Client Logo', 'trim');
        $this->tnotification->set_rules('client_desc', 'Client Decription', 'trim|required');
        $this->tnotification->set_rules('client_id', 'Client ID', 'trim|required|is_numeric');

        //--
        if ($this->input->post('client_name') != $this->input->post('client_old_name')) {
            if ($this->m_client->is_exist_name($this->input->post('client_name')) !== FALSE) {
                //--
                $this->tnotification->set_error_message("Nama Client sudah terdaftar");
            }
        }

        if (empty($_FILES["client_logo"])) {
            //--
            $this->tnotification->set_error_message("File tidak ditemukan");
        }
        // process
        if ($this->tnotification->run() !== FALSE) {
            $params = array($this->input->post('client_name'), $this->input->post('client_desc'),
                $this->com_user['user_id'], $this->input->post('client_id'));
            // insert
            if ($this->m_client->update($params)) {
                $str_ori_file_nm = $_FILES["client_logo"]["name"];
                $str_file_ext = strtolower(pathinfo($str_ori_file_nm, PATHINFO_EXTENSION));
                //upload config
                $config['allowed_types'] = 'gif|jpg|jpeg|png|bmp';
                $config['upload_path'] = 'resource/doc/images/client/temp';
                $config['file_name'] = $this->input->post('client_id') . "." . $str_file_ext;
                $config['max_size'] = '1024';
                //config
                $this->tupload->initialize($config);
                if ($this->tupload->do_upload_image("client_logo")) {
                    $file = $this->tupload->data();
                    //auto compress for 130
                    $config_resize['source_file'] = 'resource/doc/images/client/temp/' . $config['file_name'];
                    if (is_file("resource/doc/images/client/" . $this->input->post("client_old_logo"))) {
                        unlink("resource/doc/images/client/" . $this->input->post("client_old_logo"));
                    }
                    $config_resize['target_dir'] = 'resource/doc/images/client';
                    $config_resize['new_width'] = ($file['image_width'] > 130) ? 130 : $file['image_width'];
                    //resize
                    if ($this->tupload->do_resize_image($config_resize)) {
                        $params = array($config['file_name'], $this->input->post('client_id'));
                        if ($this->m_client->update_logo($params)) {
                            $this->tnotification->sent_notification("success", "berhasil mengunggah file");
                        } else {
                            $this->tnotification->sent_notification("error", "gagal mengunggah file");
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
        redirect("masterdata/client/update/" . $this->input->post('client_id'));
    }

}