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
  }

  public function index()
	{
        $data['items'] = $this->Model_Item->getAll()->result();
        $data['auth'] = $this->isLoggedIn();
        $data['balance'] = $this->convert_to_rupiah($this->user->balance);
        $this->load->view('layout/app_header', $data);
		$this->load->view('dashboard/home', $data);
        $this->load->view('layout/app_footer');
	}

  public function login(){
    if($this->m_data->logged_id())
    {
      //jika memang session sudah terdaftar, maka redirect ke halaman dahsboard
      redirect("Home/index");
    }

  }

  public function search(){
    $keyword = $this->input->post('keyword');
    $data['products']=$this->product_m->get_product_keyword($keyword);
    $this->load->view('search',$data);
  }

  function loginPage()
  {
    $this->load->view('login');
  }

  function signupPage()
  {
    $this->load->view('signup');
  }

  function searchPage()
  {
    $this->load->view('search');
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
