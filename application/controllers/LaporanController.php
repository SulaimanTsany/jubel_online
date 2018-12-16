<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LaporanController extends CI_Controller {

    function __construct()
    {
        parent:: __construct();
        $this->load->model("Model_Item");
        $this->load->model("Model_Category");
        $this->load->model("Model_user");
        $this->load->model("Model_Transaction");
        $this->load->library("pdf");
    }

    public function laporanAplikasi(){
        $data['items'] = $this->Model_Item->getAll()->result();
        $data['categories'] = $this->Model_Category->getAll()->result();
        $data['users'] = $this->Model_user->getAll()->result();
        $profil['auth'] = $this->Model_user->isLoggedIn();

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-aplikasi.pdf";
        $this->pdf->load_view('reportPdf/applicationPdf', $data);
    }

    function laporanTransaksi () {
        $data['transactions'] = $this->Model_Transaction->getAll()->result();
        $profil['auth'] = $this->Model_user->isLoggedIn();

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "laporan-history-transaksi.pdf";
        $this->pdf->load_view('reportPdf/transactionPdf', $data);
    }

}
