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
        //var_dump($items);
		$this->load->view('home', $items);
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
