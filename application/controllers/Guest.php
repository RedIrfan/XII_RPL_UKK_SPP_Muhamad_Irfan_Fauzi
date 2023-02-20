<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guest extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('siswa');
        $this->load->model('spp');
        $this->load->model('pembayaran');
    }

    public function view($view_path, $title="", $data=array())
    {
        $data['title'] = $title;

        $this->load->view('header', $data);
        $this->load->view('guest/header', $data);
        $this->load->view($view_path, $data);
        $this->load->view('guest/footer', $data);
    }

    public function index()
    {
        $this->view("guest/index", "Home");
    }

    public function to_spp()
    {
        $nisn = $_POST["nisn"];

        $check_student = $this->siswa->get_where($nisn);

        if (count($check_student)){
            redirect(site_url('spp/' . $nisn));
        }
        redirect(site_url('home'));
    }

    public function spp($nisn)
    {   
        $data["student"] = $this->siswa->get_where($nisn)[0];
        $data["spp"] = $this->spp->get_where($data["student"]->id_spp)[0];
        $data["histories"] = $this->pembayaran->get_where_by_spp($data["student"]->id_spp);

        $this->view('guest/spp', "SPP", $data);
    }

}
