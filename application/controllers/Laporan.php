<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {

    function __construct(){
		parent::__construct();
		$this->load->model('Madmin');
	}

    public function index(){
		$data =  array(
			'judul' => 'Laporan',
			'page' => 'laporan/tampil',
			'lap' => $this->Madmin->all_datatransaksi(),
		);
        $this->load->view('admin/layout/sidebar');
		$this->load->view('admin/layout/header');
		$this->load->view('admin/laporan/laporan', $data);
		$this->load->view('admin/layout/footer');
	}
}