<?php

defined('BASEPATH') or exit('No direct sricpt access allowed');
class searchController extends CI_Controller
{
  function __construct()
  {
    parent:: __construct();
    $this->load->model("Model_search");
    $this->load->model("Model_Item");
    $this->load->model('Model_auth');

  }

  public function index()
  {
        $cari = $this->input->post("inputBarang");
        $data['auth'] = $this->Model_auth->isLoggedIn();
        $items['items'] = $this->Model_search->get($cari)->result();
        $this->load->view('layout/app_header',$data);
        $this->load->view('search',$items);
        $this->load->view('layout/app_footer');
  }

  
  public function list($value='')
  {

  }


}

?>
