<?php 
class Matakuliah extends CI_Controller
{
        function __construct(){
        parent::__construct();
        $this->load->library('form_validation');
    }


    public function index()
    {
        $this->load->view('view-form-matakuliah');
    }

    public function cetak()
    {
     
        $this->form_validation->set_rules('kode','kode matakuliah','required|min_length[3]', 
            ['required'=>'kode matakuliah Harus diisi','min_length'=>'kode terlalu pendek']);

        $this->form_validation->set_rules('nama','nama matakuliah','required|min_length[3]', 
            ['required'=>'nama matakuliah Harus diisi','min_length'=>'nama terlalu pendek']);

        if ($this->form_validation->run() != true) {
            $this->load->view('view-form-matakuliah');
        }else {
            $data = [
                'kode' => $this->input->post('kode'),
                'nama' => $this->input->post('nama'),
                'sks' => $this->input->post('sks')
            ];

        $this->load->view('viewdata', $data);

        }
    }
}

?>
