<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->model('petugas');
        $this->load->view('header');
    }

    public function view($view_path, $title="", $data=array())
    {
        $data['title'] = $title;

        $this->load->view('header', $data);
        $this->load->view($view_path, $data);
    }

	public function index()
	{
		$this->view('auth/login', "Login");
	}

    public function register()
    {
        $this->view('auth/register', "Register");
    }

    public function login_auth()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $query = $this->petugas->get_where($username, $password);

        if (count($query) > 0){
            $_SESSION['username'] = $username;
            $_SESSION['level'] = $query->level;

            redirect('admin');
        }
        else{
            redirect('login');
        }
    }

    public function register_auth()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $nama = $this->input->post('nama');
        $level = $this->input->post('level');

        $query = $this->petugas->insert($username, $password, $nama, $level);

        if ($query){
            redirect('login');
        }
        else{
            redirect('register');
        }
    }

    public function logout()
    {
        unset($_SESSION);

        redirect('login');
    }

    public function testing($text)
    {
        echo $text;
    }


}
