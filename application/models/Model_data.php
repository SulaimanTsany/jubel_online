<?php if (!defined('BASEPATH')) exit('No direct sricpt access allowed');
class Model_data extends CI_Model
{
  function __construct(){
        parent::__construct();
    }

    function tampil_product()
    {
      $query = $this->db->get('product');
          return $query->result_array();
    }
}

?>
