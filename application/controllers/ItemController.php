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
        $this->load->model("Model_user");
        //middleware
        if ( !$this->Model_user->isLoggedIn()) {
            redirect("Home/index");
        } else {
            $username = $this->session->userdata('username');
            if ($this->Model_user->getRole($username) != 'admin') {
                redirect("Home/index");
            }
        }
    }

    public function index()
    {
        $profil['auth'] = $this->Model_user->isLoggedIn();
        $data['items'] = $this->Model_Item->getAll()->result();
        $this->load->view('layout/app_header',$profil);
        $this->load->view('item/index_item', $data );
        $this->load->view('layout/app_footer');
    }

    public function show($id) {;
        $data['item'] = $this->Model_Item->get($id);
        $profil['auth'] = $this->Model_user->isLoggedIn();
        $this->load->view('layout/app_header',$profil);
        $this->load->view('item/show_item', $data );
        $this->load->view('layout/app_footer');
    }

    public function create()
    {
        //return view for add new data
        $data['categories'] = $this->Model_Category->getAll()->result();
        $data['auth'] = $this->Model_user->isLoggedIn();
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
        if(isset($_FILES['gambar']['name'])){
        $config['upload_path']          = './product/';
        $config['allowed_types']        = 'jpeg|gif|jpg|png';
        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('gambar')){
            echo $this->upload->display_errors();
        }else {
            $data = $this->upload->data();

            $config['image_library'] = 'gd2';
            $config['source_image'] = './product/'.$data['file_name'];
            $config['create_thumb'] = FALSE;
            $config['maintain_ratio'] = FALSE;
            $config['width']          = 700;
            $config['height']         = 400;
            $config['new_image'] = './product/thumb/'.$data['file_name'];

            $this->load->library('image_lib',$config);
            $this->image_lib->resize();
            $nama = $data['file_name'];
            $lokasi = '/product/thumb/'.$data['file_name'];
            $datainsert = array(
    			'name'=>$name,
    			'price'=>$price,
                'code' =>$code,
                'category_id'=>$category_id,
    			'amount'=>$amount,
                'path_image'=>$lokasi
    		);
            $this->Model_Item->insert($datainsert);
            $this->index();
        }
        }else{
            echo "error variabel";
        }

        /*$this->Model_Item->insert($item);
		$this->index();*/
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
        $profil['auth'] = $this->Model_user->isLoggedIn();
        $data['item'] = $this->Model_Item->get($id);
        $data['categories'] = $this->Model_Category->getAll()->result();
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
        if(isset($_FILES['gambar']['name'])){
        $config['upload_path']          = './product/';
        $config['allowed_types']        = 'jpeg|gif|jpg|png';
        $this->load->library('upload', $config);

        if(!$this->upload->do_upload('gambar')){
            echo $this->upload->display_errors();
        }else {
            $data = $this->upload->data();

            $config['image_library'] = 'gd2';
            $config['source_image'] = './product/'.$data['file_name'];
            $config['create_thumb'] = FALSE;
            $config['maintain_ratio'] = FALSE;
            $config['width']          = 700;
            $config['height']         = 400;
            $config['new_image'] = './product/thumb/'.$data['file_name'];

            $this->load->library('image_lib',$config);
            $this->image_lib->resize();
            $nama = $data['file_name'];
            $lokasi = '/product/thumb/'.$data['file_name'];
            $dataupdate = array(
    			'name'=>$name,
    			'price'=>$price,
                'code' =>$code,
                'category_id'=>$category_id,
    			'amount'=>$amount,
                'path_image'=>$lokasi
    		);
            $this->Model_Item->update($id, $dataupdate);

                $this->index();
        }
        }else{
            echo "error variabel";
        }
    }

    public function destroy($id)
    {
        //delete a data from database
        $this->Model_Item->delete($id);
        $this->Model_Image->delete($id);
        $this->index();
    }

}

?>
