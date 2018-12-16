<?php if(!defined('BASEPATH')) exit('No direct script acces allowed');

class Model_login extends CI_Model
{
  public function logged_id()
      {
          return $this->session->userdata('user_id');
      }

  public function check($table,$user,$pass){
      $this->db->select('*');
      $this->db->from($table);
      $this->db->where($user);
      $this->db->where($pass);
      $this->db->limit(1);
      $query= $this->db->get();
      if($query->num_rows()==0){
        return FALSE;
      }else{
        return $query->result();
      }
    }
}
