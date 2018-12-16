<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_user extends CI_Model {

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function find($username) {
        //select from user where username = $username
        $query = $this->db->get_where('users', array('username' => $username));
        return $query->row();
    }

    public function insert($data) {
        if($this->find( $data['username'] ) == null) {
            //insert into user data
            $this->db->insert('users', $data);
        }
    }

    function getAll (){
		return $this->db->get('users');
	}

    function get ($id) {
        $data = $this->db->where('id', $id)->get('users')->row_array();
        return $data;
    }

    function getUserId ($username) {
        $data = $this->db->get_where('users', array('username' => $username))->row_array();
        return $data['id'];
    }

    function getRole ($username) {
        $user = $this->db->where('username', $username)->get('users')->row_array();
        return $user['role'];
    }

    function getFullName ($id) {
        $user = $this->db->where('id', $id)->get('users')->row_array();
        return $user['full_name'];
    }

    public function getBalance($id) {
        $data = $this->db->where('id', $id)->get('users')->row_array();
        return $data['balance'];
    }

    public function getBalance_in_rupiah ($id) {
        $user = $this->get($id);
        $balance = $user['balance'];
        return 'Rp. '.strrev(implode('.',str_split(strrev(strval($balance)),3)));;
    }

    function update ($id, $data) {
        $query = ($this->db->where("id", $id)->update('users', $data)) ? TRUE : FALSE ;
        return $query;
    }

    function delete($id) {
        $query = ($this->db->where("id", $id)->delete('users')) ? TRUE : FALSE ;
        return $query;
    }

    function addBalance($id, $balance) {
        $user = $this->get($id);
        $data['balance'] = $user['balance'] + $balance;
        $this->db->where("id", $id)->update('users', $data);
    }

    function reduceBalance($id, $amount) {
        $user = $this->get($id);
        $data['balance'] = $user['balance'] - $amount;
        $this->db->where("id", $id)->update('users', $data);
    }

    function isLoggedIn(){
        if($this->session->userdata('username') != null){
            return true;
        }
        return false;
    }
}
