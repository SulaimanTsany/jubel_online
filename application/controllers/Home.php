<?php
defined('BASEPATH') or exit('No direct sricpt access allowed');
class Home extends CI_Controller
{
  function __construct()
  {
    parent:: __construct();
    $this->load->model("Model_data");
  }

  public function index()
	{
		$this->load->view('home');
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
}

?>
