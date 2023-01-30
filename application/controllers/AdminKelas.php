<?php
require_once APPPATH . 'controllers/admin.php';
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminKelas extends Admin {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('kelas');
    }

    public function index()
    {
        $data["classes"] = $this->kelas->get();

        $this->view("admin/kelas/list", "Kelas", $data);
    }

    public function add()
    {
        $this->view('admin/kelas/add', "Kelas Tambah");
    }

    public function insert()
    {
        $nama = $this->input->post('nama');
        $kompetensi = $this->input->post('kompetensi');

        $query = $this->kelas->insert($nama, $kompetensi);

        if ($query){
            redirect(site_url('admin/kelas'));
        } else{
            redirect(site_url('admin/kelas/add'));
        }
    }

    public function edit($id)
    {
        $data["class"] = $this->kelas->get_where($id)[0];

        $this->view('admin/kelas/edit', "Kelas Edit", $data);
    }

    public function update($id)
    {
        $nama = $this->input->post('nama');
        $kompetensi = $this->input->post('kompetensi');

        $query = $this->kelas->update($id, $nama, $kompetensi);

        if($query){
            redirect(site_url('admin/kelas'));
        } else{
            redirect(site_url('admin/kelas/edit'));
        }
    }

    public function delete($id)
    {
        $query = $this->kelas->delete($id);

        redirect(site_url('admin/kelas'));
    }
}
