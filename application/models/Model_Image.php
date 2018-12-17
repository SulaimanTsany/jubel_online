<?php
if(!defined('BASEPATH')) exit('No direct script acces allowed');

class Model_Image extends CI_Model
{
    //protected $table = 'images';

    function get($id) {
        $data = $this->db->where('id', $id)->get('images')->row_array();
        return $data;
    }

    function insert($data) {
        $query = ($this->db->insert('images', $data)) ? TRUE : FALSE ;
        return $query;
    }

    function update($id, $data) {
        $query = ($this->db->where("item_id", $id)->update('images', $data)) ? TRUE : FALSE ;
        return $query;
    }

    function delete($id) {
        $query = ($this->db->where("item_id", $id)->delete('images')) ? TRUE : FALSE ;
        return $query;
    }
}
