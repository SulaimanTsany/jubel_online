<?php
defined('BASEPATH') or exit('No direct sricpt access allowed');
class TransactionController extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();
        $this->load->model("Model_Transaction");
    }

    public function index()
    {
        $data['transactions'] = $this->Model_Transaction->getAll()->result();
        $this->load->view('layout/app_header');
        $this->load->view('transaction/index_transaction', $data );
        $this->load->view('layout/app_footer');
        //redirect("Home/index");
    }

    public function create()
    {
        //return view for add new data
        $this->load->view('layout/app_header');
        $this->load->view('transaction/create_transaction');
        $this->load->view('layout/app_footer');
    }

    public function store()
    {
        //save new data to database
        $item_id = $this->input->post('item_id');
        $user_id = $this->input->post('user_id');
		$amount = $this->input->post('amount');
		$data=array(
			'item_id'=>$item_id,
            'user_id' =>$user_id,
			'amount'=>$amount
		);
		$this->Model_Transaction->insert($data);
		$this->index();
    }

/*
    public function edit($id)
    {
        //return view for edit a data
        $data['transaction'] = $this->Model_Transaction->get($id);
        $this->load->view('layout/app_header');
        $this->load->view('transaction/edit_transaction', $data );
        $this->load->view('layout/app_footer');
    }

    public function update() {
        //update a data
        $id = $this->input->post('id');
        $item_id = $this->input->post('item_id');
        $user_id = $this->input->post('user_id');
		$amount = $this->input->post('amount');
		$data=array(
			'item_id'=>$item_id,
            'user_id' =>$user_id,
			'amount'=>$amount
		);
		$this->Model_Transaction->update($id, $data);
		$this->index();
    }

    public function destroy($id)
    {
        //delete a data from database
        $this->Model_Transaction->delete($id);
        $this->index();
    }
*/
}

?>
