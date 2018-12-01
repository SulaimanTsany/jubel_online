<?php
defined('BASEPATH') or exit('No direct sricpt access allowed');
class ItemController extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();
        $this->load->model("Model_Item");
    }

    public function index()
    {
        redirect("Home/index");
        //$this->load->view('home');
    }

    public function create()
    {
        //return view for add new data
        $this->load->view('layout/app_header');
        $this->load->view('item/create_item');
        $this->load->view('layout/app_footer');
    }

    public function store()
    {
        //save new data to database
        $name = $this->input->post('name');
		$price = $this->input->post('price');
        //$category_id = $this->input->post('category_id');
		$amount = $this->input->post('amount');
		$data=array(
			'name'=>$name,
			'price'=>$price,
            //'category_id'=>$category_id,
			'amount'=>$amount
		);
		$this->Model_Item->insert($data);
		$this->index();
    }

    public function edit($id)
    {
        //return view for edit a data
		$data['item'] = $this->Model_Item->get($id);
        $this->load->view('layout/app_header');
		$this->load->view('item/edit_item', $data );
        $this->load->view('layout/app_footer');
    }

    public function update() {
        //update a data
        $id = $this->input->post('id');
        $name = $this->input->post('name');
		$price = $this->input->post('price');
        //$category_id = $this->input->post('category_id');
		$amount = $this->input->post('amount');
		$data = array(
			'name'=>$name,
			'price'=>$price,
            //'category_id'=>$category_id,
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
