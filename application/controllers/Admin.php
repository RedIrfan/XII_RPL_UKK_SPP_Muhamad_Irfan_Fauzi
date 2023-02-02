<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        if (! isset($_SESSION["username"])){
            redirect(site_url('login'));
        }
    }

    protected function only_admin()
    {
        if ($_SESSION["level"] != "admin"){
            if (isset($_SESSION['previous_page'])){
                redirect($_SESSION["previous_page"]);
            } else{
                redirect(site_url('login'));
            }
        }
    }

    public function view($view_path, $title="", $data=array())
    {
        $this->session->set_userdata('previous_page', current_url());
        $data['title'] = $title;
        $data["bodyclass"] = "sb-nav-fixed";

        $this->load->view('header', $data);
        $this->load->view('admin/header', $data);
        $this->load->view($view_path, $data);
        $this->load->view('admin/footer', $data);
    }

	public function index()
	{
        $this->view('admin/dashboard', 'Dashboard');
	}
}
