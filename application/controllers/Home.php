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
    $this->load->model("Model_login");
    $this->load->model("Model_search");

  }

  public function index()
	{
        $items['items'] = $this->Model_Item->getAll()->result();
          $this->load->view('layout/app_header');
		    $this->load->view('home', $items);
        $this->load->view('layout/app_footer');
	}

  public function islogin(){
    if($this->Model_login->logged_id())
    {
        echo "Masuk";
    }
    else{
      $this->form_validation->set_rules('name','Name','required');
      $this->form_validation->set_rules('password','Password','required');
      $this->form_validation->set_message('required', '');
        if ($this->form_validation->run() == TRUE) {
                  $username = $this->input->post("name", TRUE);
                  $password = $this->input->post('password', TRUE);
                  $checking = $this->Model_login->check('users', array('name' => $username), array('password' => $password));
                          if ($checking != FALSE) {
                          foreach ($checking as $apps) {
                            $session_data = array(
                            'user_id'   => $apps->id,
                            'user_name' => $apps->username,
                            'user_pass' => $apps->password,
                          );
                  $this->session->set_userdata($session_data);
                        redirect('Home/index');
                  }
            }else{
              echo "Error";
          }
        }else{
          echo "Error lagi";
        }
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

}

?>
