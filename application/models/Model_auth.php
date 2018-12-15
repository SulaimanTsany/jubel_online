<?php if(!defined('BASEPATH')) exit('No direct script acces allowed');

class Model_auth extends CI_Model
{


    function isLoggedIn(){
        if($this->session->userdata('username') != null){
            return true;
        }
        return false;
    }
}

?>
