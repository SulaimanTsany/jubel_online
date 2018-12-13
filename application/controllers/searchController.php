<?php

defined('BASEPATH') or exit('No direct sricpt access allowed');
class searchController extends CI_Controller
{
  function __construct()
  {
    parent:: __construct();
    $this->load->model("Model_search");
    $this->load->model("Model_Item");
    

  }

  public function index()
  {
        $cari = $this->input->post("inputBarang");
        $items['items'] = $this->Model_search->get($cari)->result();
        $this->load->view('layout/app_header');
        $this->load->view('search',$items);
        $this->load->view('layout/app_footer');
  }

  public function show($id) {;
      $data['item'] = $this->Model_Item->get($id);
      $this->load->view('layout/app_header');
      $this->load->view('item/show_item', $data );
      $this->load->view('layout/app_footer');
  }


}

?>
