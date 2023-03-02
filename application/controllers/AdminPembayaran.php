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
        $data["scripts"] = [
                        'https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js',
                        'https://cdn.datatables.net/buttons/2.3.4/js/dataTables.buttons.min.js',
                        'https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js',
                        'https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js',
                        'https://cdn.datatables.net/buttons/2.3.4/js/buttons.html5.min.js', 
                        'https://cdn.datatables.net/buttons/2.3.4/js/buttons.print.min.js', 
        ];

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
