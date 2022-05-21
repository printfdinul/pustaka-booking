<?php

/**
 * 
 */
class Autentifikasi extends CI_Controller
{
	
	public function index()
	{
		if($this->session->userdata('email')){
			redirect('user');
		}
		$this->form_validation->set_rules('email', 'Alamat Email',
		'required|trim|valid_email', [
			'required' => 'Email harus diisi JANCOK!!!',
			'valid_email' => 'Email Tidak Benar GBLK!!!'
		]);

		$this->form_validation->set_rules('password', 'Password',
			'required|trim', [
				'required' => 'Password Harus Di isi'
			]);

		if ($this->form_validation->run() == false) {
			$data['judul'] = 'Login';
			$data['user'] = '';
			$data['header'] = $this->load->view('admin/auto_header', NULL, TRUE);
			$data['footer'] = $this->load->view('admin/auto_footer', NULL, TRUE);

			$this->load->view('admin/login', $data);
		} else {
			$this->_login();
		}
	}

	private function _login()
	{
		$email = htmlspecialchars($this->input->post('email', true));
		$password = $this->Input->post('password', true);
		$user = $this->ModelUSer->cekData(['email' => $email])->row_array();

		if ($user) {

			if ($user['is_active'] == 1) {

				if (password_verify($password, $user['password'])) {
					$data = [
						'email' -> $user['email'],
						'role_id' -> $user['role_id']
					];
					$this->session->set_userdata($data);

					if ($user['role_id'] == 1) {
						redirect('admin');
					} else {
						if ($user['image'] == 'default.jpg') {
							$this->session->set_flashdata('pesan',
								'<div class="alert alert-info alert-message" "role="alert">Silahkan ubah profile anda untuk ubah foto profil</div>');
						}
						redirect('user');
					}
				} else {
					$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" "role="alert">Password Salah</div>');
					redirect('autentifikasi');
				}
				} else {
					$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" "role="alert">User Belom Di Aktifasi</div>');
					redirect('autentifikasi');
				}
				} else {
					$this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-message" "role="alert">Email Tidak Terdaftar!!!!!</div>');
					redirect('autentifikasi');
				}
			}
			}			
?>