<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    function __construct() {
        parent::__construct();
        $this->load->model('Model_user');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('Model_auth');
    }

    public function showLogin(){
      $this->load->view('auth/template', $data);
      $this->load->view('auth/login');
    }

    public function login() {
        //view form
        if ($this->Model_auth->isLoggedIn()) {
            redirect("Home/index");
        } else {
            $data['auth'] = $this->Model_auth->isLoggedIn();
            $this->load->view('auth/template', $data);
            $this->load->view('auth/login');
        }
    }

    public function register() {
        //view form
        $data['auth'] = $this->Model_auth->isLoggedIn();
        $this->load->view('auth/template', $data);
        $this->load->view('auth/register');
    }

    public function logout() {
        if($this->Model_auth->isLoggedIn()) {
            $this->session->unset_userdata('username');
        }
        $this->session->sess_destroy();
redirect("Home/index");
    }

    public function validate_login(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->Model_user->find($username);

        if ($user != null) {
            if(password_verify ($password , $user->password )) {
                $session_data = array(
                    'username' => $username
                );
                $this->session->set_userdata($session_data);
                redirect("Home/index");
            } else {
                //$this->form_validation->set_message('Error Message');
                //$this->sessoin->set_flashdata('error','Invalid Username or Password');
                $this->login();
            }
        } else {
            $this->form_validation->set_message('Error Message');
            $this->login();
        }

        // $this->form_validation->set_rules('username', 'Username', 'required');
        // $this->form_validation->set_rules('password', 'Password', 'required');
        //
        // if ($this->form_validation->run() == FALSE) {
        //     $this->login();
        // } else {
        //     if($user!=null) {
        //         if(password_verify ($password , $user->password )) {
        //             $session_data = array(
        //                 'username' => $username
        //             );
        //             $this->session->set_userdata($session_data);
        //             redirect(base_url());
        //         } else {
        //             //$this->form_validation->set_message('Error Message');
        //             $this->sessoin->set_flashdata('error','Invalid Username or Password');
        //             redirect(base_url().'auth/login');
        //         }
        //     } else {
        //         //$this->form_validation->set_message('Error Message');
        //         redirect(base_url().'auth/login');
        //     }
        // }
    }


    public function validate_register(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $full_name = $this->input->post('full_name');

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
        $data['username'] = $username;
        $data['full_name'] = $full_name;
        $data['password'] = $hashedPassword;
        $this->Model_user->insert($data);
        $session_data = array(
            'username' => $username
        );
        $this->session->set_userdata($session_data);
        redirect("Home/index");

        // $this->form_validation->set_rules('username', 'Username', 'required|min_length[3]|max_length[20]');
        // $this->form_validation->set_rules('password', 'Password', 'required|min_length[6]');
        //
        // if ($this->form_validation->run() == FALSE) {
        //     $this->register();
        //     var_dump($this);
        //     die();
        // } else {
        //     $data['username'] = $username;
        //     $data['password'] = $hashedPassword;
        //     $this->Model_user->insert($data);
        //     redirect("Home/index");
        // }
    }


}
