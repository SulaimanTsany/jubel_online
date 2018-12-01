

<?php if(!defined('BASEPATH')) exit('No direct script acces allowed');

class M_data extends CI_Model
{
    //protected $table = 'user1';
	function getUserAll(){
		return $this->db->get('user1');
	}

    function getUserById($id) {
        $data = $this->db->where('id', $id)->get('user1')->row_array();
        return $data;
    }

    function insertUser($data) {
        $query = ($this->db->insert('user1', $data)) ? TRUE : FALSE ;
        return $query;
    }

    function updateUserById($id, $data) {
        $query = ($this->db->where("id", $id)->update('user1', $data)) ? TRUE : FALSE ;
        return $query;
    }

    function deleteUserById($id) {
        $query = ($this->db->where("id", $id)->delete('user1')) ? TRUE : FALSE ;
        return $query;
    }
}
