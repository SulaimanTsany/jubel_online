<?php
defined('BASEPATH') or exit('No direct sricpt access allowed');
class Home extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();
        $this->load->model("Model_data");
        $this->load->model("Model_Item");
        $this->load->model("Model_user");
        $this->load->model("M_data");
        $this->load->model("Model_login");
        $this->load->model("Model_search");

    }

    public function index()
    {
        $data['items'] = $this->Model_Item->getAll()->result();
        $data['auth'] = $this->isLoggedIn();
        $data['balance'] = $this->convert_to_rupiah(0);
        if ($data['auth'] == true) {
            $data['balance'] = $this->convert_to_rupiah($this->user->balance);
        }
        if ($this->Model_user->getRole($this->session->userdata('username')) == 'admin') {
            $this->load->view('layout/app_header', $data);
            $this->load->view('dashboard/home_admin', $data);
            $this->load->view('layout/app_footer');
        } else {
            $this->load->view('layout/app_header', $data);
            $this->load->view('dashboard/home', $data);
            $this->load->view('layout/app_footer');
        }
    }


    function signupPage()
    {
        $this->load->view('signup');
    }

    function home_user()
    {
        $this->load->view('home_user');
    }

    function produck()
    {
        $this->load->view('produck');
    }

    function cash()
    {
        $this->load->view('cash');
    }

    private function isLoggedIn(){
        if($this->session->userdata('username') != null) {
            $username = $this->session->userdata('username');
            $this->user = $this->Model_user->find($username);
            return true;
        }
        return false;
    }

    public function convert_to_rupiah($angka)
    {
        return 'Rp. '.strrev(implode('.',str_split(strrev(strval($angka)),3)));
    }
}

?>
