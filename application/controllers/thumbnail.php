<?php
defined('BASEPATH') or exit('No direct sricpt access allowed');
class thumbnail extends CI_Controller
{

    function __construct()
    {
        parent:: __construct();
        $this->load->library('image_lib');
    }

    public function index()
    {
        $this->load->view('upload');
    }


    public function prosesupload()
    {
        if(isset($_FILE['file']['name'])){
        
        }
    }

    function upload(){
        $config['upload_path']          = './uploads/';
        $config['allowed_types']        = 'gif|jpg|png';
        $config['max_size']             = 100;
        $config['max_width']            = 1024;
        $config['max_height']           = 768;
        $this->load->library('upload', $config);
        if ( ! $this->upload->do_upload('userfile'))
        {
        $error = array('error' => $this->upload->display_errors());
        $this->load->view('upload_form', $error);
        }
        else
        {
        $data = array('upload_data' => $this->upload->data());
        $this->load->view('upload_success', $data);
        }
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
