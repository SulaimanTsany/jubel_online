<?php
if(!defined('BASEPATH')) exit('No direct script acces allowed');

class Model_Category extends CI_Model
{
    //protected $table = 'categories';
	function getAll(){
		return $this->db->get('categories');
	}

    function get($id) {
        $data = $this->db->where('id', $id)->get('categories')->row_array();
        return $data;
    }

	function getName ($id) {
        $item = $this->db->where('id', $id)->get('categories')->row_array();
        return $item['name'];
    }

    function insert($data) {
        $query = ($this->db->insert('categories', $data)) ? TRUE : FALSE ;
        return $query;
    }

    function update($id, $data) {
        $query = ($this->db->where("id", $id)->update('categories', $data)) ? TRUE : FALSE ;
        return $query;
    }

    function delete($id) {
        $query = ($this->db->where("id", $id)->delete('categories')) ? TRUE : FALSE ;
        return $query;
    }
}
