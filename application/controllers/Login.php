<?php
defined('BASEPATH') or exit('No direct sricpt access allowed');
class Login extends CI_Controller
{
  function __construct()
  {
    parent:: __construct();
    $this->load->model("M_data");
  }


  public function loginhome (){
    $this->load->view(echo base_url("/index.php/home/home_user"));
    /*$name = $this->input->post('name');
    $password = $this->input->post('password');
    $where = array(
      'name'=>$name,
      'password'=>$password
    );
    $cek = $this->M_data->cek_login('users',$where)->num_rows();
    if($cek){
      $data_session = array(
        'name' => $name,
        'status' => "Login"
      );
      $this->session->set_userdata($data_session);

    }
    else{
      echo "Password Tidak Pas";
    }*/
  }
}

?>
