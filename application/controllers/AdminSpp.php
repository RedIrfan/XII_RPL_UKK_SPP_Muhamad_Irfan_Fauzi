<?php
require_once APPPATH . 'controllers/admin.php';
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminSpp extends Admin {

    public function __construct()
    {
        parent::__construct();
        $this->only_admin();
        
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
        $bulan = $this->input->post('bulan');
        $nominal = $this->input->post('nominal');

        $query = $this->spp->insert($bulan, $nominal);

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
        $bulan = $this->input->post('bulan');
        $nominal = $this->input->post('nominal');

        $query = $this->spp->update($id, $bulan, $nominal);

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
