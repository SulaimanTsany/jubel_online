<?php
defined('BASEPATH') or exit('No direct sricpt access allowed');
class thumbnail extends CI_Controller
{

    function __construct()
    {
        parent:: __construct();
        $this->load->library('image_lib');
    }
    public function proses()
    {
            $config['image_library'] = 'gd2';
            $config['source_image'] = 'C:/Users/Acer/Pictures/Screenshots/Screenshot(4).png';
            $config['create_thumb'] = TRUE;
            $config['maintain_ratio'] = TRUE;
            $config['width']         = 75;
            $config['height']       = 50;
            $this->load->library('image_lib', $config);
            $this->image_lib->resize();
    }


}
