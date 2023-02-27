<?php
require_once APPPATH . 'controllers/admin.php';
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminPembayaran extends Admin {

    public function __construct()
    {
        parent::__construct();
        $this->load->library('pdf');
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
        $petugas = $this->petugas->get_where_by_username($_SESSION['username'])[0];
        $siswa = $this->input->post('siswa');
        $tanggal = $this->input->post('tanggal');
        $bulan = $this->input->post('bulan');
        $spp = $this->siswa->get_where($siswa)[0];
        $jumlah = $this->input->post('jumlah');

        $this->spp->update($spp->id_spp, $spp->bulan + $bulan, $spp->nominal + $jumlah);
        $query = $this->pembayaran->insert($petugas->id_petugas, $siswa, $tanggal, $bulan, $spp->id_spp, $jumlah);

        if ($query){
            redirect(site_url('admin/history'));
        } else{
            redirect(site_url('admin/transaksi'));
        }
    }

    public function print_laporan(){
        $data["histories"] = $this->pembayaran->get();

        $this->load->view('admin/pembayaran/laporan', $data);
        $html = $this->load->view('admin/pembayaran/laporan', $data, true);
        $this->pdf->create_pdf($html, 'laporanpembayaran');
    }
}
