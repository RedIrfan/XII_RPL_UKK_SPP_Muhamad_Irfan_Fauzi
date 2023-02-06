<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guest extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('siswa');
        $this->load->model('pembayaran');
    }

    public function view($view_path, $title="", $data=array())
    {
        $data['title'] = $title;

        $this->load->view('header', $data);
        $this->load->view('guest/header', $data);
        $this->load->view($view_path, $data);
    }

    public function index()
    {
        $this->view("guest/index", "Home");
    }

    public function to_spp()
    {
        $nisn = $_POST["nisn"];
        redirect(site_url('spp/' . $nisn));
    }

    public function spp($nisn)
    {   
        $data["student"] = $this->siswa->get_where($nisn)[0];
        $data["histories"] = $this->pembayaran->get_where_by_spp($data["student"]->id_spp);

        $this->view('guest/spp', "SPP", $data);
    }

}
