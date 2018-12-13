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
}
