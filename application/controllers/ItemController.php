<?php
defined('BASEPATH') or exit('No direct sricpt access allowed');
class ItemController extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();
        $this->load->model("Model_Item");
        $this->load->model("Model_Category");
        $this->load->model("Model_Image");
        $this->load->model("Model_auth");
        $this->load->helper(array('form', 'url'));
    }

    public function index()
    {
        redirect("Home/index");
        //$this->load->view('home');
    }

    public function show($id) {;
        $data['item'] = $this->Model_Item->get($id);
        $profil['auth'] = $this->Model_auth->isLoggedIn();
        $this->load->view('layout/app_header',$profil);
        $this->load->view('item/show_item', $data );
        $this->load->view('layout/app_footer');
    }

    public function create()
    {
        //return view for add new data
        $data['categories'] = $this->Model_Category->getAll()->result();
        $data['auth'] = $this->Model_auth->isLoggedIn();
        $error = "";

        $this->load->view('layout/app_header', $data);
        $this->load->view('item/create_item', $data);
        $this->load->view('layout/app_footer');
    }

    public function store()
    {
        //save new data to database
        $name = $this->input->post('name');
        $code = $this->input->post('code');
		$price = $this->input->post('price');
        $category_id = $this->input->post('category_id');
		$amount = $this->input->post('amount');
		$item=array(
			'name'=>$name,
            'code' =>$code,
			'price'=>$price,
            'category_id'=>$category_id,
			'amount'=>$amount
		);
        $image = $this->input->post('image');
        $path = array (
            'name'=>$image,
            //'item_id'=>"1",
            'path' => "assets/images/"
        );
		$this->Model_Item->insert($item);
        $this->Model_Image->insert($path);
		$this->index();
    }

    // public function do_upload() {
    //     $config['upload_path']          = '/assets/images/';
    //     $config['allowed_types']        = 'gif|jpg|png';
    //     $config['max_size']             = 100;
    //     $config['max_width']            = 1024;
    //     $config['max_height']           = 768;
    //
    //     $this->load->library('upload', $config);
    //
    //     if ( ! $this->upload->do_upload('userfile'))
    //     {
    //         $error = array('error' => $this->upload->display_errors());
    //         $categories['categories'] = $this->Model_Category->getAll()->result();
    //         $this->load->view('layout/app_header');
    //         $this->load->view('item/create_item', array('categories'=>$categories, 'error'=>$error));
    //         $this->load->view('layout/app_footer');
    //     }
    //     else
    //     {
    //         $data = array('upload_data' => $this->upload->data());
    //         $this->index();
    //         //$this->load->view('upload_success', $data);
    //     }
    // }

    public function edit($id)
    {
        //return view for edit a data
        $cari = $this->input->post("inputBarang");
        $profil['auth'] = $this->Model_auth->isLoggedIn();
        $data['item'] = $this->Model_Item->get($id);
        $this->load->view('layout/app_header',$profil);
        $this->load->view('item/edit_item', $data );
        $this->load->view('layout/app_footer');
    }

    public function update() {
        //update a data
        $id = $this->input->post('id');
        $name = $this->input->post('name');
        $code = $this->input->post('code');
		$price = $this->input->post('price');
        $category_id = $this->input->post('category_id');
		$amount = $this->input->post('amount');
		$data = array(
			'name'=>$name,
			'price'=>$price,
            'code' =>$code,
            'category_id'=>$category_id,
			'amount'=>$amount
		);
		$this->Model_Item->update($id, $data);
		$this->index();
    }

    public function destroy($id)
    {
        //delete a data from database
        $this->Model_Item->delete($id);
        $this->index();
    }

}

?>
