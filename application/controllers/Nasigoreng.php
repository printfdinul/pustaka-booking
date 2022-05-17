<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Nasigoreng extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function index()
    {
        // buat tabel 'users' apabila belum ada
        $this->db->query('CREATE TABLE IF NOT EXISTS users (id VARCHAR PRIMARY KEY, nama VARCHAR, email VARCHAR UNIQUE)');
        // apakah ada pencarian data spesifik dengan kata kunci tertentu?
        $search = $this->input->get('search');
        if (!empty($search)) {
            $this->db->like('id', $search, 'both'); 
            $this->db->or_like('nama', $search, 'both'); 
            $this->db->or_like('email', $search, 'both'); 
        }
        $users = $this->db->get('users');
        $data['result'] = $users->result_array();
        $data['num_rows'] = $users->num_rows();
        $this->load->view('head');
        $this->load->view('read', $data);
        $this->load->view('foot');
    }

    public function save()
    {
        $input['id'] = $this->input->post('id');
        $input['nama'] = $this->input->post('nama');
        $input['email'] = $this->input->post('email');
        $updateID = $this->input->post('updateID');
        if (!empty($updateID)) {
            $this->db->where('id', $updateID);
            $this->db->update('users', $input);
        } else {
            $this->db->insert('users', $input);
        }
        redirect('/Nasigoreng/index');
    }

    public function create()
    {
        $this->load->view('head');
        $this->load->view('create');
        $this->load->view('foot');
    }

    public function update($id)
    {
        $this->db->where('id', $id);
        $data['update'] = $this->db->get('users')->row_array();
        $this->load->view('head');
        $this->load->view('create', $data);
        $this->load->view('foot');
    }

    public function delete($id)
    {
        $this->db->where('id', $id);
        $data['delete'] = $this->db->get('users')->row_array();
        $this->load->view('head');
        $this->load->view('delete', $data);
        $this->load->view('foot');
    }

    public function real_delete()
    {
        $id = $this->input->post('id');
        $this->db->where('id', $id);
        $this->db->delete('users');
        redirect('/Nasigoreng/');
    }
}