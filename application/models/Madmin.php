<?php

class Madmin extends CI_Model{
	
	public function cek_login($u, $p){
		$q = $this->db->get_where('tbl_admin', array('userName'=>$u, 'password'=>$p));
		return $q;
	}

    public function get_all_data($tabel){
		$q=$this->db->get($tabel);
		return $q;
	}

	public function insert($tabel, $data){
		$this->db->insert($tabel, $data);
	}

	public function get_by_id($tabel, $id){
		return $this->db->get_where($tabel, $id);
	}

	public function update($tabel, $data, $pk, $id){
		$this->db->where($pk, $id);
		$this->db->update($tabel, $data);
	}

	public function delete_cottage($table, $column, $id) {
        // Hapus data dari tabel cottage berdasarkan kolom dan ID
        $this->db->where($column, $id);
        $this->db->delete($table);
    }

    public function delete_gambar($table, $column, $id) {
        // Hapus data dari tabel gambar berdasarkan kolom dan ID
        $this->db->where($column, $id);
        $this->db->delete($table);
    }
 
	public function all_datatransaksi()
	{
		$this->db->select('*');
		$this->db->from('tbl_transaksi');
		$this->db->join('tbl_cottage', 'tbl_transaksi.idCottage = tbl_cottage.idCottage', 'left');
		$this->db->join('tbl_penyewa', 'tbl_penyewa.NIK = tbl_transaksi.NIK', 'left');
		return $this->db->get()->result();
	}

	// mengambil stok cottage
	public function getStok($idCottage)
	{
		$this->db->select('jumlahKamar,tbl_cottage.idCottage,tbl_cottage.jumlahKamar');
		$this->db->from('tbl_cottage');
		 $this->db->where('tbl_cottage.idCottage', $idCottage);
		return $this->db->get()->row();
	}

	public function kurangiStokCottage($idCottage) {
        // Fungsi untuk mengurangkan stok cottage
        $this->db->where('idCottage', $idCottage);
        $stok_sekarang = $this->db->get('tbl_cottage')->row()->jumlahKamar;

        // Kurangi stok
        $stok_baru = $stok_sekarang - 1; // Ubah angka 1 sesuai dengan jumlah stok yang ingin dikurangkan
        $this->db->update('tbl_cottage', array('jumlahKamar' => $stok_baru), array('idCottage' => $idCottage));
    }

	// public function getCottage()
	// {
	// 	$this->db->select('idCottage');
	// 	$this->db->from('tbl_cottage');
    //     $this->db->join('tbl_', 'tbl_kategori.id_kategori = tbl_barang.id_kategori', 'left');
    //     $this->db->where('id_barang', $id_barang);
    //     return $this->db->get()->row();
	// }

	public function all_datacottage()
	{
		$this->db->select('*');
		$this->db->from('tbl_gambar');
		$this->db->join('tbl_cottage', 'tbl_gambar.idCottage = tbl_cottage.idCottage', 'left');
		return $this->db->get()->result();
	}
	public function get_all_cottages() {
        return $this->db->get('tbl_cottage')->result();
    }
	public function getAllCottages() {
        $query = $this->db->get('tbl_cottage');
        return $query->result_array();
    }

    public function insert_cottage($cottage_data) {
        $this->db->insert('tbl_cottage', $cottage_data);
        return $this->db->insert_id();
    }
	public function insert_gambar($data) {
        $this->db->insert('tbl_gambar', $data);
    }

	public function get_cottage_by_id($idCottage) {
        $this->db->where('idCottage', $idCottage);
        $query = $this->db->get('tbl_cottage');

        return $query->row();
    }

    public function get_images_by_id($idCottage) {
        $this->db->where('idCottage', $idCottage);
        $query = $this->db->get('tbl_gambar');

        return $query->row();
    }

	public function update_cottage($idCottage, $data_cottage) {
		$this->db->where('idCottage', $idCottage);
		$this->db->update('tbl_cottage', $data_cottage);
	}
	
	public function update_images($data_images) {
		try {
			log_message('info', 'Trying to update images for idCottage: ' . $data_images['idCottage']);
			
			$this->db->where('idCottage', $data_images['idCottage']);
			$this->db->update('tbl_gambar', $data_images);
	
			// Periksa apakah update berhasil
			if ($this->db->affected_rows() >= 0) {
				log_message('info', 'Images updated successfully.');
				return true; // Berhasil
			} else {
				log_message('error', 'Failed to update images. No rows affected.');
				return false; // Gagal
			}
		} catch (Exception $e) {
			log_message('error', 'Error updating images: ' . $e->getMessage());
			return false; // Gagal dengan penanganan kesalahan
		}
	}
	
    public function get_images_by_idCottage($idCottage) {
        $this->db->where('idCottage', $idCottage);
        $query = $this->db->get('tbl_gambar');
        return $query->row(); // Mengembalikan satu baris hasil query
    }
    public function get_images_by_cottage($idCottage) {
        return $this->db->get_where('tbl_gambar', array('idCottage' => $idCottage))->row();
    }


	public function update_gambar($idCottage, $data) {
        $this->db->where('idCottage', $idCottage);
        $this->db->update('tbl_gambar', $data);
    }

    public function get_cottage_and_images($idCottage) {
        $this->db->where('idCottage', $idCottage);
        $query = $this->db->get('tbl_cottage');
        $result['cottage'] = $query->row();

        $this->db->where('idCottage', $idCottage);
        $query = $this->db->get('tbl_gambar');
        $result['images'] = $query->row();

        return $result;
    }

	public function simpan_penyewa($data)
	{
		$this->db->insert('tbl_penyewa', $data);
    	return $this->db->insert_id();
	
	}

	public function simpan_rincian($data)
	{
		$this->db->insert('tbl_transaksi',$data);
		return $this->db->insert_id();
	}

	public function get_detail_p ($id_penyewa){
		$this->db->select('*');
		$this->db->from('tbl_penyewa');
		$this->db->join('tbl_cottage','tbl_penyewa.idCottage = tbl_cottage.idCottage');
		$this->db->where('id_penyewa',$id_penyewa);
		return $this->db->get()->result();
	}

	public function get_transaksi($id_transaksi)
	{
		$this->db->select('*');
		$this->db->from('tbl_transaksi');
		$this->db->join('tbl_penyewa','tbl_transaksi.id_penyewa = tbl_penyewa.id_penyewa');
		$this->db->join('tbl_cottage','tbl_penyewa.idCottage = tbl_cottage.idCottage');
		$this->db->where('id_transaksi',$id_transaksi);
		return $this->db->get()->result();
	}

	public function get_metode()
	{
		$this->db->select('*');
		$this->db->from('tbl_pembayaran');
		return $this->db->get()->result();
	}

	public function simpan_bukti($data)
	{
		$this->db->where('id_transaksi', $data['id_transaksi']);
		$this->db->update('tbl_transaksi',$data);

	}
}
