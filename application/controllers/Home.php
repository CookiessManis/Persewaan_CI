<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    function __construct(){
		parent::__construct();
        $this->load->model('Madmin');
	}
    
    public function index(){
        $data =  array(
			'judul' => 'Cottage',
			'page' => 'home',
			'cottage' => $this->Madmin->all_datacottage(),
		);
        $this->load->view('templates/header');
        $this->load->view('home', $data);
        $this->load->view('templates/footer');
    }
    public function detail_cottage($idCottage){
        $data =  array(
			'judul' => 'Cottage',
			'page' => 'home',
            'idCottage' => $idCottage,
			'cottage' => $this->Madmin->all_datacottage($idCottage),
			'stok' => $this->Madmin->getStok($idCottage)
		);
        $this->load->view('templates/header2');
        $this->load->view('detail_cottage', $data);
        $this->load->view('templates/footer');
        
    }
    public function room(){
        $data =  array(
			'judul' => 'Cottage',
			'page' => 'home',
			'cottage' => $this->Madmin->all_datacottage(),
		);
        $this->load->view('templates/header2');
        $this->load->view('rooms', $data);
        $this->load->view('templates/footer');
    }
    public function aboutus(){
        $this->load->view('templates/header2');
        $this->load->view('aboutus');
        $this->load->view('templates/footer');
    }
    public function destination(){
        $this->load->view('templates/header2');
        $this->load->view('destination');
        $this->load->view('templates/footer');
    }
    public function restaurant(){
        $this->load->view('templates/header2');
        $this->load->view('restaurant');
        $this->load->view('templates/footer');
    }
    public function contact(){
        $this->load->view('templates/header2');
        $this->load->view('contact');
        $this->load->view('templates/footer');
    }
}
