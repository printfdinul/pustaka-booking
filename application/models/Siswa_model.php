<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa_model extends CI_Model

{
	private $table = 'siswa';

	//validasi form, method ini akan mengembalikan data berupa rules validasi form

	public function rules()
	{
		return [
			[
				'field' => 'Nama', //samakan dengan atribute name pada tags input
				'label' => 'Nama',  // label yang akan ditampilkan pada pesan error
				'rules' => 'trim|required' //rules validasi
			],

			[
				'field' => 'Nis', 
				'label' => 'Nis',  
				'rules' => 'trim|required'
			],

			[
				'field' => 'Kelas', 
				'label' => 'Kelas',  
				'rules' => 'trim|required'
			],

			[
				'field' => 'TanggalLahir', 
				'label' => 'TanggalLahir',  
				'rules' => 'trim|required'
			],

			[
				'field' => 'TempatLahir', 
				'label' => 'TempatLahir',  
				'rules' => 'trim|required'
			],

			[
				'field' => 'Alamat', 
				'label' => 'Alamat',  
				'rules' => 'trim|required'
			],

			[
				'field' => 'JenisKelamin', 
				'label' => 'JenisKelamin',  
				'rules' => 'trim|required'
			],

			[
				'field' => 'Agama', 
				'label' => 'Agama',  
				'rules' => 'trim|required'
			],

		];
	}

	//menampilkan data mahasiswa berdasarkan id mahasiswa
	public function getById($id)
	{
		return $this->db->get_where($this->table, ["IdSiswa" => $id])->row();
		//query diatas seperti halnya query pada mysql
		//select * from siswa where IdSiswa='$id'
	}

	//menampilkan semua data siswa
	public function getAll()
	{
		$this->db->from($this->table);
		$this->db->order_by("IdSiswa", "desc");
		$query = $this->db->get();
		return $query->result();
		//fungsi diatas seperti halnya query
		//select * form siswa order by IdSiswa desc
	}

	public function save()
	{
		$data = array(
			"Nama" => $this->input->post('Nama'),
			"Nis" => $this->input->post('Nis'),
			"Kelas" => $this->input->post('Kelas'),
			"TanggalLahir" => $this->input->post('TanggalLahir'),
			"TempatLahir" => $this->input->post('TempatLahir'),
			"Alamat" => $this->input->post('Alamat'),
			"JenisKelamin" => $this->input->post('JenisKelamin'),
			"Agama" => $this->input->post('Agama')
		);
		return $this->db->insert($this->table, $data);
	}

	//hapus data siswa
	public function delete($id)
	{
		return $this->db->delete($this->table, array("IdSiswa" => $id));
	}
}
