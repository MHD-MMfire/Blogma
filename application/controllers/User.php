<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('login') == null)
            redirect('/');
    }

    public function index ()
    {
        $this->load->view('Dashboard/Dashboard_header');
        $this->load->view('Dashboard/Dashboard');
        $this->load->view('Dashboard/Dashboard_footer');
    }

}