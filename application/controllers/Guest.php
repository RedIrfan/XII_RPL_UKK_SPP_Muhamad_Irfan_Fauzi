<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Guest extends CI_Controller {

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

}
