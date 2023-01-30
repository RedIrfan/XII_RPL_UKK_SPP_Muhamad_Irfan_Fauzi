<?php
require_once APPPATH . 'controllers/admin.php';
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminSpp extends Admin {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('spp');
    }

    public function index()
    {
        $data["spps"] = $this->spp->get();

        $this->view("admin/spp/list", "Spp", $data);
    }

    public function add()
    {
        $this->view('admin/spp/add', "Spp Tambah");
    }

    public function insert()
    {
        $tahun = $this->input->post('tahun');
        $nominal = $this->input->post('nominal');

        $query = $this->spp->insert($tahun, $nominal);

        if ($query){
            redirect(site_url('admin/spp'));
        } else{
            redirect(site_url('admin/spp/add'));
        }
    }

    public function edit($id)
    {
        $data["spp"] = $this->spp->get_where($id)[0];

        $this->view('admin/spp/edit', "Spp Edit", $data);
    }

    public function update($id)
    {
        $tahun = $this->input->post('tahun');
        $nominal = $this->input->post('nominal');

        $query = $this->spp->update($id, $tahun, $nominal);

        if($query){
            redirect(site_url('admin/spp'));
        } else{
            redirect(site_url('admin/spp/edit'));
        }
    }

    public function delete($id)
    {
        $query = $this->spp->delete($id);

        redirect(site_url('admin/spp'));
    }
}
