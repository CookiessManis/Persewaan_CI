<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penyewa extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('Madmin');
	}

	public function index(){
		$data['penyewa']=$this->Madmin->get_all_data('tbl_penyewa')->result();
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/layout/header');
		$this->load->view('admin/penyewa/tampil', $data);
		$this->load->view('admin/layout/footer');
	}

	public function submit_reservation(){
		 
		$data = array(
			'nik' => $this->input->post('nik'),
			'namaPenyewa' => $this->input->post('namaPenyewa'),
			'alamat' => $this->input->post('alamat'),
			'gender' => $this->input->post('gender'),
			'email' => $this->input->post('email'),
			'no_telp' => $this->input->post('no_telp'),
			'idCottage' => $this->input->post('idCottage'),
			'tglCheckin' => date('Y-m-d H:i:s', strtotime($this->input->post('tglCheckin'))),
			'tglCheckout' => date('Y-m-d H:i:s', strtotime($this->input->post('tglCheckout'))),
		);
        
		// $this->db->insert('tbl_penyewa', $data);
		
		
		$this->load->model('Madmin');
    	$this->Madmin->kurangiStokCottage($this->input->post('idCottage'));
		$nik = $this->Madmin->simpan_penyewa($data);
		redirect('penyewa/detail_penyewa/'.$nik);
	}

	    public function detail_penyewa($id_penyewa) {
        $data = array(
			'get_penyewa' => $this->Madmin->get_detail_p($id_penyewa)
		);
        $this->load->view('rincianTransaksi', $data);
    }


	public function tambah_rincian(){
		$data = array (
			'id_penyewa' => $this->input->post('id_penyewa'),
		);
		$id_transaksi = $this->Madmin->simpan_rincian($data);
		return redirect('penyewa/detail_pembayaran/'.$id_transaksi);
	}


	public function detail_pembayaran($id_transaksi){
		$data = array(
			'get_transaksi' => $this->Madmin->get_transaksi($id_transaksi),
			'get_metode' => $this->Madmin->get_metode()

		);
        $this->load->view('pembayaran', $data);
	}

	public function simpan_pembayaran($id_transaksi){
		 // Proses data yang dikirimkan oleh formulir
        $metode = $this->input->post('metode');
        $id_pembayaran = $this->input->post('id_pembayaran');
		$status = 2;

        // Upload file
        $config['upload_path'] = './assets/bukti_pembayaran/'; // Sesuaikan dengan folder tempat menyimpan file
        $config['allowed_types'] = 'gif|jpg|png|pdf'; // Sesuaikan dengan jenis file yang diizinkan
        $config['max_size'] = 1024; // Sesuaikan dengan ukuran file maksimum (dalam kilobyte)

        $this->load->library('upload', $config);

        if ($this->upload->do_upload('bukti_pembayaran')) {
            $data = array(
				'id_transaksi' => $id_transaksi,
                'metode' => $metode,
                'id_pembayaran' => $id_pembayaran,
                'bukti_pembayaran' => $this->upload->data('file_name'),
				'status' => $status
            );

            // Simpan data ke database
            $insert_id = $this->Madmin->simpan_bukti($data);

            // Lakukan sesuatu setelah data disimpan, seperti menampilkan pesan sukses
            echo "Data berhasil disimpan dengan ID: " . $insert_id;
        } else {
            // Jika upload gagal, tampilkan pesan error
            echo $this->upload->display_errors();
        }
	}
}
