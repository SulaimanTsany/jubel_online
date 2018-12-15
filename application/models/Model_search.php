<?php if(!defined('BASEPATH')) exit('No direct script acces allowed');

class Model_search extends CI_Model
{

  public function search($table,$namabarang){
    $this->db->select('*');
    $this->db->from($table);
    $this->db->where($namabarang);
    $query = $this->db->get();
    if($query->num_rows()==0){
      return FALSE;
    }else{
    return $query->result();
    }
  }
/*  function getAll($namabarang){
    $this->db->where($namabarang);
    $query = $this->db->get('items');
		return $query;
	}*/

  public function get($namabarang)
  {
      $this->db->select("*");
      $this->db->from("items");
      if($namabarang !=''){
          $this->db->like('name',$namabarang);
          $this->db->or_like('price',$namabarang);
      }
     $this->db->order_by('name','DESC');
      return $this->db->get();
  }



}
