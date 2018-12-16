<?php
defined('BASEPATH') or exit('No direct sricpt access allowed');
class Home extends CI_Controller
{
    function __construct()
    {
        parent:: __construct();
        $this->load->model("Model_data");
        $this->load->model("Model_Item");
        $this->load->model("Model_Category");
        $this->load->model("Model_Transaction");
        $this->load->model("Model_user");
        $this->load->model("M_data");
        $this->load->model("Model_login");
        $this->load->model("Model_search");
        $this->load->model("Model_auth");
    }

    public function index()
    {
        $data['items'] = $this->Model_Item->getAll()->result();
        $data['auth'] = $this->isLoggedIn();
        //$data['balance'] = $this->convert_to_rupiah(0);
        if ($data['auth'] == true) {
            $data['user_id'] = $this->user->id;
            $data['balance'] = $this->convert_to_rupiah($this->user->balance);
        }
        if ($this->Model_user->getRole($this->session->userdata('username')) == 'admin') {
            $this->load->view('layout/app_header', $data);
            $this->load->view('dashboard/home_admin', $data);
            $this->load->view('layout/app_footer');
        } else {
            $this->load->view('layout/app_header', $data);
            $this->load->view('dashboard/home', $data);
            $this->load->view('layout/app_footer');
        }
    }

    public function index_user_view () {
        $data['items'] = $this->Model_Item->getAll()->result();
        $data['auth'] = $this->isLoggedIn();
        $this->load->view('layout/app_header', $data);
        $this->load->view('dashboard/home', $data);
        $this->load->view('layout/app_footer');
    }

    function buyItem () {
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
        redirect("Home/index");
    }

    public function beranda()
    {

        $this->load->view('layout/beranda_header');
        $this->load->view('dashboard/beranda');
        $this->load->view('layout/beranda_footer');
    }

    function signupPage()
    {
        $this->load->view('signup');
    }

    function home_user()
    {
        $this->load->view('home_user');
    }

    function produck()
    {
        $this->load->view('produck');
    }

    function cash()
    {
        $this->load->view('cash');
    }

    private function isLoggedIn(){
        if($this->session->userdata('username') != null) {
            $username = $this->session->userdata('username');
            $this->user = $this->Model_user->find($username);
            return true;
        }
        return false;
    }

    public function convert_to_rupiah($angka)
    {
        return 'Rp. '.strrev(implode('.',str_split(strrev(strval($angka)),3)));
    }
}

?>
