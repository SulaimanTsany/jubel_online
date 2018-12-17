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

	function getName ($id) {
        $item = $this->db->where('id', $id)->get('items')->row_array();
        return $item['name'];
    }

	function getPrice ($id) {
        $item = $this->db->where('id', $id)->get('items')->row_array();
        return $item['price'];
    }
	function getAmount ($id) {
        $item = $this->db->where('id', $id)->get('items')->row_array();
        return $item['amount'];
    }

	function reduceAmount($id, $amount) {
        $item = $this->get($id);
        $data['amount'] = $item['amount'] - $amount;
        $this->db->where("id", $id)->update('items', $data);
    }

	function getPrice_in_rupiah ($id) {
		$price = $this->getPrice($id);
		return 'Rp. '.strrev(implode('.',str_split(strrev(strval($price)),3)));
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
