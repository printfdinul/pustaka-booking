<?php
class Lemas extends CI_Controller
    {
        public function index()
    {
        $this->load->view('viewform-lemas');
    }
        public function cetak()
    {
        $this->form_validation->set_rules('nama', 'Nama', 'required|min_length[3]', [
        'required' => 'Nama Harus diisi',
        'min_length' => 'Nama terlalu pendek'
    ]);
        $this->form_validation->set_rules('nis', 'NIS', 'required|min_length[3]', [
        'required' => 'NIS Harus diisi',
        'min_length' => 'NIS terlalu pendek'
    ]);
    $this->form_validation->set_rules('kelas', 'Kelas', 'required|min_length[1]', [
        'required' => 'Kelas Harus diisi',
        'min_length' => 'Kelas terlalu pendek'
    ]);
    $this->form_validation->set_rules('tanggal_l', 'Tanggal Lahir', 'required|min_length[8]', [
        'required' => 'Tanggal Lahir Harus diisi',
        'min_length' => 'Tanggal Lahir terlalu pendek'
    ]);
    $this->form_validation->set_rules('tempat_l', 'Tempat Lahir', 'required|min_length[4]', [
        'required' => 'Tempat Lahir Harus diisi',
        'min_length' => 'Tempat Lahir terlalu pendek'
    ]);
    $this->form_validation->set_rules('alamat', 'Alamat', 'required|min_length[4]', [
        'required' => 'Alamat Harus diisi',
        'min_length' => 'Alamat terlalu pendek'
    ]);


    if ($this->form_validation->run() != true) {
    $this->load->view('viewform-lemas');
    }else{

        $data = [
            'nama' => $this->input->post('nama'),
            'nis' => $this->input->post('nis'),
            'kelas' => $this->input->post('kelas'),
            'tanggal_l' => $this->input->post('tanggal_l'),
            'tempat_l' => $this->input->post('tempat_l'),
            'alamat' => $this->input->post('alamat'),
            'jenis_k' => $this->input->post('jenis_k'),
            'agama' => $this->input->post('agama'),
        ];
 
        $this->load->view('viewdata-lemas', $data);
        }
    }
}