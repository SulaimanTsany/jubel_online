<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Model_user');
        $this->load->model('Model_Item');
        //middleware
        if ( !$this->Model_user->isLoggedIn()) {
            redirect("Home/index");
        } else {
            $username = $this->session->userdata('username');
            if ($this->Model_user->getRole($username) != 'admin') {
                redirect("Home/index");
            }
        }
    }

    function topUp_form() {
        $data['items'] = $this->Model_Item->getAll()->result();
        $data['users'] = $this->Model_user->getAll()->result();
        $data['auth'] = $this->Model_user->isLoggedIn();
        $this->load->view('layout/app_header', $data);
		$this->load->view('topup/index', $data);
        $this->load->view('layout/app_footer');
    }

    function topup() {
        $id = $this->input->post('id');
        $balance = $this->input->post('topup_value');
		$this->Model_user->addBalance($id, $balance);
		$this->topUp_form();
    }


}
