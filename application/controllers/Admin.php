<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        if (isset($_SESSION["level"])){
            if ($_SESSION["level"] == 'petugas'){
                redirect('login');
            }
        }
    }

    public function view($view_path, $title="", $data=array())
    {
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
