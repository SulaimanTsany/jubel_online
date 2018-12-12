<?php
defined('BASEPATH') or exit('No direct sricpt access allowed');
class Home extends CI_Controller
{
  function __construct()
  {
    parent:: __construct();
    $this->load->model("Model_data");
    $this->load->model("Model_Item");
    $this->load->model("M_data");

  }

  public function index()
	{
        $items['items'] = $this->Model_Item->getAll()->result();
        //var_dump($);
		$this->load->view('home', $items);
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

}

?>
