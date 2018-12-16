<?php
if(!defined('BASEPATH')) exit('No direct script acces allowed');

class Model_Transaction extends CI_Model
{
    //protected $table = 'transactions_history';
	function getAll(){
		return $this->db->get('transactions_history');
	}

    function get($id) {
        $data = $this->db->where('id', $id)->get('transactions_history')->row_array();
        return $data;
    }

    function insert($data) {
        $query = ($this->db->insert('transactions_history', $data)) ? TRUE : FALSE ;
        return $query;
    }

    function update($id, $data) {
        $query = ($this->db->where("id", $id)->update('transactions_history', $data)) ? TRUE : FALSE ;
        return $query;
    }

    function delete($id) {
        $query = ($this->db->where("id", $id)->delete('transactions_history')) ? TRUE : FALSE ;
        return $query;
    }
}
