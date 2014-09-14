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
        $this->load->model('m_com_email');
        $this->load->library('tnotification');
        $this->load->library('tupload');
        // set global variable
    }

    public function index() {
        // set page rules
        $this->_set_page_rule("R");
        // set template content
        $this->smarty->assign("template_content", "masterdata/email/list.html");
        //--
        $this->smarty->assign("rs_email", $this->m_com_email->get_all_email());
        // notification
        $this->tnotification->display_notification();
        $this->tnotification->display_last_field();
        // output
        parent::display();
    }

    public function add() {
        // set page rules
        $this->_set_page_rule("U");
        // set template content
        $this->smarty->assign("template_content", "masterdata/email/add.html");
        // notification
        $this->tnotification->display_notification();
        $this->tnotification->display_last_field();
        // output
        parent::display();
    }

    public function add_process() {
        // set page rules
        $this->_set_page_rule("U");
        // cek input
        $this->tnotification->set_rules('personal_name', 'Personal Name', 'trim|required');
        $this->tnotification->set_rules('personal_phone', 'Personal Phone', 'trim|required');
        $this->tnotification->set_rules('personal_email', 'Personal Email', 'trim|required');
        $this->tnotification->set_rules('personal_desc', 'Personal Desc', 'trim|required');

        //--
//        if ($this->m_client->is_exist_name($this->input->post('client_name')) !== FALSE) {
//            //--
//            $this->tnotification->set_error_message("Nama Client sudah terdaftar");
//        }
//        if (empty($_FILES["client_logo"])) {
//            //--
//            $this->tnotification->set_error_message("File tidak ditemukan");
//        }
        // process
        if ($this->tnotification->run() !== FALSE) {
            $params = array($this->input->post('personal_name'), $this->input->post('personal_phone'),
                $this->input->post('personal_email'), $this->input->post('personal_desc'));
            // insert
            if ($this->m_com_email->insert($params)) {
//                $str_ori_file_nm = $_FILES["client_logo"]["name"];
//                $str_file_ext = strtolower(pathinfo($str_ori_file_nm, PATHINFO_EXTENSION));
//                //upload config
//                $config['allowed_types'] = 'gif|jpg|jpeg|png|bmp';
//                $config['upload_path'] = 'resource/doc/images/client/temp';
//                $config['file_name'] = $this->m_client->get_last_inserted_id() . "." . $str_file_ext;
//                $config['max_size'] = '1024';
//
//                $this->tupload->initialize($config);
//
//                if ($this->tupload->do_upload_image("client_logo")) {
//                    $file = $this->tupload->data();
//                    //auto compress for 130
//                    $config_resize['source_file'] = 'resource/doc/images/client/temp/' . $config['file_name'];
//                    $config_resize['target_dir'] = 'resource/doc/images/client';
//                    $config_resize['new_width'] = ($file['image_width'] > 130) ? 130 : $file['image_width'];
//                    //resize
//                    if ($this->tupload->do_resize_image($config_resize)) {
//                        $params = array($config['file_name'], $this->m_client->get_last_inserted_id());
//                        if ($this->m_client->update_logo($params)) {
//                            $this->tnotification->sent_notification("success", "berhasil mengunggah file");
//                        } else {
//                            $this->tnotification->sent_notification("error", "gagal mengunggah file");
//                        }
//                    }
//                }
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
        redirect("masterdata/email/add/");
    }

    public function delete() {
        $id = $_POST['id'];
        if ($id) {
            if ($this->m_com_email->delete($id)) {
                echo $id;
            }
        }
    }
    
    public function update($params) {
        // set page rules
        $this->_set_page_rule("U");
        // set template content
        $this->smarty->assign("template_content", "masterdata/email/update.html");
        // get data
        $result = $this->m_com_email->get_detail_by_id($params);
        $this->smarty->assign("result", $result);
        // notification
        $this->tnotification->display_notification();
        $this->tnotification->display_last_field();
        // output
        parent::display();
    }
    
    public function update_process() {
        // set page rules
        $this->_set_page_rule("U");
        // cek input
        $this->tnotification->set_rules('personal_id', 'Personal ID', 'trim|required|is_numeric');
        $this->tnotification->set_rules('personal_name', 'Personal Name', 'trim|required');
        $this->tnotification->set_rules('personal_phone', 'Personal Phone', 'trim|required');
        $this->tnotification->set_rules('personal_email', 'Personal Email', 'trim|required');
        $this->tnotification->set_rules('personal_desc', 'Personal Desc', 'trim|required');

        //--
//        if ($this->input->post('client_name') != $this->input->post('client_old_name')) {
//            if ($this->m_client->is_exist_name($this->input->post('client_name')) !== FALSE) {
//                //--
//                $this->tnotification->set_error_message("Nama Client sudah terdaftar");
//            }
//        }
//
//        if (empty($_FILES["client_logo"])) {
//            //--
//            $this->tnotification->set_error_message("File tidak ditemukan");
//        }
        // process
        if ($this->tnotification->run() !== FALSE) {
            $params = array($this->input->post('personal_name'), $this->input->post('personal_phone'),
                $this->input->post('personal_email'), $this->input->post('personal_desc'), 
                $this->input->post('personal_id'));
            // insert
            if ($this->m_com_email->update($params)) {
//                $str_ori_file_nm = $_FILES["client_logo"]["name"];
//                $str_file_ext = strtolower(pathinfo($str_ori_file_nm, PATHINFO_EXTENSION));
//                //upload config
//                $config['allowed_types'] = 'gif|jpg|jpeg|png|bmp';
//                $config['upload_path'] = 'resource/doc/images/client/temp';
//                $config['file_name'] = $this->input->post('client_id') . "." . $str_file_ext;
//                $config['max_size'] = '1024';
//                //config
//                $this->tupload->initialize($config);
//                if ($this->tupload->do_upload_image("client_logo")) {
//                    $file = $this->tupload->data();
//                    //auto compress for 130
//                    $config_resize['source_file'] = 'resource/doc/images/client/temp/' . $config['file_name'];
//                    if (is_file("resource/doc/images/client/" . $this->input->post("client_old_logo"))) {
//                        unlink("resource/doc/images/client/" . $this->input->post("client_old_logo"));
//                    }
//                    $config_resize['target_dir'] = 'resource/doc/images/client';
//                    $config_resize['new_width'] = ($file['image_width'] > 130) ? 130 : $file['image_width'];
//                    //resize
//                    if ($this->tupload->do_resize_image($config_resize)) {
//                        $params = array($config['file_name'], $this->input->post('client_id'));
//                        if ($this->m_client->update_logo($params)) {
//                            $this->tnotification->sent_notification("success", "berhasil mengunggah file");
//                        } else {
//                            $this->tnotification->sent_notification("error", "gagal mengunggah file");
//                        }
//                    }
//                }
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
        redirect("masterdata/email/update/" . $this->input->post('personal_id'));
    }

}
