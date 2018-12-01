<?php
if(!defined('BASEPATH')) exit('No direct script acces allowed');

class Model_Item extends CI_Model
{
    //protected $table = 'items';
	function getAll(){
		return $this->db->get('items');
	}

    function get($id) {
        $data = $this->db->where('id', $id)->get('items')->row_array();
        return $data;
    }

    function insert($data) {
        $query = ($this->db->insert('items', $data)) ? TRUE : FALSE ;
        return $query;
    }

    function update($id, $data) {
        $query = ($this->db->where("id", $id)->update('items', $data)) ? TRUE : FALSE ;
        return $query;
    }

    function delete($id) {
        $query = ($this->db->where("id", $id)->delete('items')) ? TRUE : FALSE ;
        return $query;
    }
}
