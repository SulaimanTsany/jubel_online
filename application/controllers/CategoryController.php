<?php
defined('BASEPATH') or exit('No direct sricpt access allowed');

class CategoryController extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();
        $this->load->model("Model_Category");
    }

    public function index()
    {
        $categories['categories'] = $this->Model_Category->getAll()->result();
        $this->load->view('layout/app_header');
        $this->load->view('category/index_category', $categories );
        $this->load->view('layout/app_footer');
    }

    public function create()
    {
        //return view for add new data
        $this->load->view('layout/app_header');
        $this->load->view('category/create_category');
        $this->load->view('layout/app_footer');
    }

    public function store()
    {
        //save new data to database
        $name = $this->input->post('name');
		$data=array(
			'name'=>$name
		);
		$this->Model_Category->insert($data);
		$this->index();
    }

    public function edit($id)
    {
        //return view for edit a data
        $data['category'] = $this->Model_Category->get($id);
        $this->load->view('layout/app_header');
        $this->load->view('category/edit_category', $data );
        $this->load->view('layout/app_footer');
    }

    public function update() {
        //update a data
        $id = $this->input->post('id');
        $name = $this->input->post('name');
		$data = array(
			'name'=>$name
		);
		$this->Model_Category->update($id, $data);
		$this->index();
    }

    public function destroy($id)
    {
        //delete a data from database
        $this->Model_Category->delete($id);
        $this->index();
    }
}

?>
