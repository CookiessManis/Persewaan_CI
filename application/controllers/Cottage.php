<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cottage extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->library('form_validation'); 
		$this->load->model('Madmin');
	}

	public function index(){
		$data =  array(
			'judul' => 'Cottage',
			'page' => 'cottage/tampil',
			'cot' => $this->Madmin->all_datacottage(),
		);
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/layout/header');
		$this->load->view('admin/cottage/tampil', $data);
		$this->load->view('admin/layout/footer');
	}
    public function add(){
		$this->load->view('admin/layout/sidebar');
		$this->load->view('admin/layout/header');
		$this->load->view('admin/cottage/formAdd');
		$this->load->view('admin/layout/footer');
    }   
    public function save(){
		$this->load->library('form_validation');
	// Set rules for form validation
		$this->form_validation->set_rules('idCottage', 'ID Cottage', 'required');
		$this->form_validation->set_rules('namaCottage', 'Nama Cottage', 'required');
		$this->form_validation->set_rules('jumlahKamar', 'Jumlah Kamar', 'required|numeric');
		$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
		$this->form_validation->set_rules('harga', 'Harga', 'required|numeric');

		if ($this->form_validation->run() === FALSE) {
		// Form validation failed
		 $cottage_id = $this->Madmin->insert_cottage($cottage_data);
		redirect('cottage/addGambar');
		} else {
		// Form validation passed
		$cottage_data = array(
			'idCottage' => $this->input->post('idCottage'),
			'namaCottage' => $this->input->post('namaCottage'),
			'jumlahKamar' => $this->input->post('jumlahKamar'),
			'deskripsi' => $this->input->post('deskripsi'),
			'harga' => $this->input->post('harga')
		);

        $cottage_id = $this->Madmin->insert_cottage($cottage_data);
		redirect('cottage/addGambar');
	}
	}
		public function addGambar(){
				$this->load->model('Madmin');
		
				// Memanggil metode getAllCottages() dari model
				$data['cottageList'] = $this->Madmin->getAllCottages();
		
				// Memuat tampilan 'add_cottage_form.php' dengan data cottageList
			$this->load->view('admin/layout/sidebar');
			$this->load->view('admin/layout/header');
			$this->load->view('admin/cottage/addGambar', $data);
			$this->load->view('admin/layout/footer');
		}  

		public function save_gambar(){
			$idCottage = $this->input->post('idCottage');
			$idGambar = $this->input->post('idGambar');
			
		
			 // Konfigurasi upload
			 $config['upload_path']   = FCPATH . 'assets/admin/images/';
			 $config['allowed_types'] = 'gif|jpg|jpeg|png';
			 $config['max_size']      = 2048; // Ukuran maksimum dalam kilobyte (2MB)
		 
			$this->load->library('upload', $config);
		
			 // Proses upload gambar
			 $uploadData = array();
			 foreach (['gambar1', 'gambar2', 'gambar3'] as $field) {
				if ($this->upload->do_upload($field)) {
					$uploadData[$field] = $this->upload->data('file_name');
				} else {
					// Handle error upload, jika diperlukan
					$uploadData[$field] = ''; // atau set default jika diperlukan
				}
			}
			$data = array(
				'idGambar' => $idGambar,
				'idCottage' => $idCottage,
				'gambar1' => $uploadData['gambar1'],
				'gambar2' => $uploadData['gambar2'],
				'gambar3' => $uploadData['gambar3'],
			);
		
			// Simpan data ke tbl_gambar
			$this->load->model('Madmin');
			$this->Madmin->insert_gambar($data);
		
			redirect('cottage');
		}
		public function edit($idCottage) {
			$this->load->model('Madmin');
			$data['cottage'] = $this->Madmin->get_cottage_by_id($idCottage);
			$this->load->view('admin/layout/sidebar');
			$this->load->view('admin/layout/header');
			$this->load->view('admin/cottage/formEdit', $data);
			$this->load->view('admin/layout/footer');
		}
		
		public function update($idCottage) {
			$this->load->library('form_validation');
			// Set rules for form validation
			$this->form_validation->set_rules('idCottage', 'ID Cottage', 'required');
			$this->form_validation->set_rules('namaCottage', 'Nama Cottage', 'required');
			$this->form_validation->set_rules('jumlahKamar', 'Jumlah Kamar', 'required|numeric');
			$this->form_validation->set_rules('deskripsi', 'Deskripsi', 'required');
			$this->form_validation->set_rules('harga', 'Harga', 'required|numeric');
		
			if ($this->form_validation->run() === FALSE) {
				$data_cottage = array(
					'idCottage' => $this->input->post('idCottage'),
					'namaCottage' => $this->input->post('namaCottage'),
					'jumlahKamar' => $this->input->post('jumlahKamar'),
					'deskripsi' => $this->input->post('deskripsi'),
					'harga' => $this->input->post('harga')
				);
				$cottage_id = $this->Madmin->update_cottage($idCottage, $data_cottage);
				redirect('cottage/editGambar/' . $idCottage);
				// Form validation failed
				// Handle the validation errors if needed
			} else {
				// Form validation passed
				$data_cottage = array(
					'idCottage' => $this->input->post('idCottage'),
					'namaCottage' => $this->input->post('namaCottage'),
					'jumlahKamar' => $this->input->post('jumlahKamar'),
					'deskripsi' => $this->input->post('deskripsi'),
					'harga' => $this->input->post('harga')
				);
		
				// Update cottage data
				$cottage_id = $this->Madmin->update_cottage($idCottage, $data_cottage);
				redirect('cottage/editGambar/' . $idCottage);
			}
		}

		public function editGambar($idCottage) {
			$this->load->model('Madmin');
			$data['cottageList'] = $this->Madmin->getAllCottages();
			$data['images'] = $this->Madmin->get_images_by_id($idCottage);
			$data['cottage'] = $this->Madmin->get_cottage_by_id($idCottage);
		
			$this->load->view('admin/layout/sidebar');
			$this->load->view('admin/layout/header');
			$this->load->view('admin/cottage/editGambar', $data);
			$this->load->view('admin/layout/footer');
		}
	
		
		public function updateGambar($idCottage){
			$idGambar = $this->input->post('idGambar');
			
			// Konfigurasi upload
			$config['upload_path']   = FCPATH . 'assets/admin/images/';
			$config['allowed_types'] = 'gif|jpg|jpeg|png';
			$config['max_size']      = 2048; // Ukuran maksimum dalam kilobyte (2MB)
		 
			$this->load->library('upload', $config);
		
			// Proses upload gambar
			$uploadData = array();
			foreach (['gambar1', 'gambar2', 'gambar3'] as $field) {
				if ($this->upload->do_upload($field)) {
					$uploadData[$field] = $this->upload->data('file_name');

				} else {
					// Handle error upload, jika diperlukan
					$uploadData[$field] = ''; // atau set default jika diperlukan
				}
			}
			$data_images = array(
				'idGambar' => $idGambar,
				'idCottage' => $idCottage,
				'gambar1' => $uploadData['gambar1'],
				'gambar2' => $uploadData['gambar2'],
				'gambar3' => $uploadData['gambar3'],
			);
		
			// Simpan data ke tbl_gambar
			$this->load->model('Madmin');
			if ($this->Madmin->update_images($data_images)) {
				log_message('info', 'Gambar updated successfully.');
			} else {
				log_message('error', 'Failed to update images.');
			}
			log_message('info', 'Redirecting to cottage');
			// Redirect kembali ke halaman cottage
			redirect('cottage');
		}
	
public function delete($id){
    // Hapus data cottage dan gambarnya berdasarkan idCottage
    $this->Madmin->delete_cottage('tbl_cottage', 'idCottage', $id);
    $this->Madmin->delete_gambar('tbl_gambar', 'idCottage', $id);
    
    // Redirect kembali ke halaman cottage
    redirect('cottage'); 
}
}

