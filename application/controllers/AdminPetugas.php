<?php
require_once APPPATH . 'controllers/admin.php';
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminPetugas extends Admin {

    public function __construct()
    {
        parent::__construct();
        $this->only_admin();
        
        $this->load->model('petugas');
    }

    public function index()
    {
        $data["workers"] = $this->petugas->get();

        $this->view("admin/petugas/list", "Petugas", $data);
    }

    public function add()
    {
        $this->view('admin/petugas/add', "Petugas Tambah");
    }

    public function insert()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $nama_petugas = $this->input->post('nama');
        $level = $this->input->post('level');

        $query = $this->petugas->insert($username, $password, $nama_petugas, $level);

        if ($query){
            redirect(site_url('admin/petugas'));
        } else{
            redirect(site_url('admin/petugas/add'));
        }
    }

    public function edit($id)
    {
        $data["worker"] = $this->petugas->get_where_with_id($id)[0];

        $this->view('admin/petugas/edit', "Petugas Edit", $data);
    }

    public function update($id)
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $nama_petugas = $this->input->post('nama');
        $level = $this->input->post('level');

        $query = $this->petugas->update($id, $username, $password, $nama_petugas, $level);

        if($query){
            redirect(site_url('admin/petugas'));
        } else{
            redirect(site_url('admin/petugas/edit'));
        }
    }

    public function delete($id)
    {
        $query = $this->petugas->delete($id);

        redirect(site_url('admin/petugas'));
    }
}
