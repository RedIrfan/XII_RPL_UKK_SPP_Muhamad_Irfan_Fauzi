<?php
require_once APPPATH . 'controllers/admin.php';
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminPembayaran extends Admin {

    public function __construct()
    {
        parent::__construct();
    }

    public function history()
    {
        $data["histories"] = $this->pembayaran->get();

        $this->view("admin/pembayaran/history", "History", $data);
    }

    public function transaksi()
    {
        $data["students"] = $this->siswa->get();
        $data["spps"] = $this->spp->get();

        $this->view('admin/pembayaran/transaksi', "Transaksi", $data);
    }

    public function transaksi_insert()
    {
        $petugas = $_SESSION['username'];
        $siswa = $this->input->post('siswa');
        $tanggal = $this->input->post('tanggal');
        $bulan = $this->input->post('bulan');
        $tahun = $this->input->post('tahun');
        $spp = $this->input->post('spp');
        $jumlah = $this->input->post('jumlah');

        $query = $this->pembayaran->insert($petugas, $siswa, $tanggal, $bulan, $tahun, $spp, $jumlah);

        if ($query){
            redirect(site_url('admin/history'));
        } else{
            redirect(site_url('admin/transaksi'));
        }
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
