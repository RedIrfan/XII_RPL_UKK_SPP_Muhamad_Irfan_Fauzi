<?php
require_once APPPATH . 'controllers/admin.php';
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminSiswa extends Admin {

    public function __construct()
    {
        parent::__construct();
        $this->only_admin();
        
        $this->load->model('siswa');
        $this->load->model('kelas');
        $this->load->model('spp');
    }

    public function index()
    {
        $data["students"] = $this->siswa->get();

        $this->view("admin/siswa/list", "Siswa", $data);
    }

    public function add()
    {
        $data["classes"] = $this->kelas->get();
        $data["spps"] = $this->spp->get();

        $this->view('admin/siswa/add', "Siswa Tambah", $data);
    }

    public function insert()
    {
        $nisn = $this->input->post('nisn');
        $nis = $this->input->post('nis');
        $nama = $this->input->post('nama');
        $kelas = $this->input->post('kelas');
        $alamat = $this->input->post('alamat');
        $no_telp = $this->input->post('no_telp');
        $spp = $this->input->post('spp');

        $check_nisn = $this->siswa->get_where_by_id($nisn);

        if (count($check_nisn) <= 0){
            $this->siswa->insert($nisn, $nis, $nama, $kelas, $alamat, $no_telp, $spp);
    
            if ($query){
                redirect(site_url('admin/siswa'));
            } else{
                redirect(site_url('admin/siswa/add/'));
            }
        } else{
            redirect(site_url('admin/siswa/add/'));
        }

    }

    public function edit($nisn)
    {
        $data["student"] = $this->siswa->get_where($nisn)[0];
        $data["classes"] = $this->kelas->get();
        $data["spps"] = $this->spp->get();

        $this->view('admin/siswa/edit', "Siswa Edit", $data);
    }

    public function update($nisn)
    {
        $new_nisn = $this->input->post('nisn');
        $nis = $this->input->post('nis');
        $nama = $this->input->post('nama');
        $kelas = $this->input->post('kelas');
        $alamat = $this->input->post('alamat');
        $no_telp = $this->input->post('no_telp');
        $spp = $this->input->post('spp');

        $check_nisn = $this->siswa->get_where_by_id($new_nisn);

        if (count($check_nisn) <= 0){
            $query = $this->siswa->update($nisn, $new_nisn, $nama, $kelas, $alamat, $no_telp, $spp);

            if ($query){
                redirect(site_url('admin/siswa'));
            } else{
                redirect(site_url('admin/siswa/edit/' . $nisn));
            }
        } else{
            redirect(site_url('admin/siswa/edit/' . $nisn));
        }
    }

    public function delete($nisn)
    {
        $this->siswa->delete($nisn);

        redirect(site_url('admin/siswa'));
    }
}
