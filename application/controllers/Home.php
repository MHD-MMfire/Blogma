<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index ()
    {
        $this->load->view('Home/Home_header');
        $this->load->view('Home/Home');
        $this->load->view('Home/Home_footer');
    }

}