<?php
defined('BASEPATH') or exit('No direct sricpt access allowed');
class TransactionController extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();
        $this->load->model("Model_Item");
        $this->load->model("Model_Transaction");
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
        $data['transactions'] = $this->Model_Transaction->getAll()->result();
        $profil['auth'] = $this->Model_user->isLoggedIn();
        $this->load->view('layout/app_header',$profil);
        $this->load->view('transaction/index_transaction', $data );
        $this->load->view('layout/app_footer');
        //redirect("Home/index");
    }

    public function create()
    {
        //return view for add new data
        $profil['auth'] = $this->Model_user->isLoggedIn();
        $this->load->view('layout/app_header',$profil);
        $this->load->view('transaction/create_transaction');
        $this->load->view('layout/app_footer');
    }

    public function store()
    {
        $balance = $this->Model_user->getBalance($this->input->post('user_id'));
        $price =  $this->Model_Item->getPrice($this->input->post('item_id')) * $this->input->post('amount');
        // var_dump($balance);
        // die();
        if ($balance >= $price) {
            //save new data to database
            $item_id = $this->input->post('item_id');
            $user_id = $this->input->post('user_id');
    		$amount = $this->input->post('amount');
    		$data=array(
    			'item_id'=>$item_id,
                'user_id' =>$user_id,
                'item'=>$this->Model_Item->getName($item_id),
                'user' =>$this->Model_user->getFullName($user_id),
    			'amount'=>$amount,
    		);
    		$this->Model_Transaction->insert($data);
            //reduce user balance
            $this->Model_user->reduceBalance($user_id, $price);
            //reduce item amount
            $this->Model_Item->reduceAmount($item_id, $amount);
        }
		redirect("TransactionController/index");
    }

/*
    public function edit($id)
    {
        //return view for edit a data
        $data['transaction'] = $this->Model_Transaction->get($id);
        $profil['auth'] = $this->Model_user->isLoggedIn();
        $this->load->view('layout/app_header',$profil);
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
