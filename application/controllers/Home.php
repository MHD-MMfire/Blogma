<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index ()
    {
        //TODO : change Home/Home view when user logged in (link to user dashboard)
        $this->load->view('Home/Home_header');
        $this->load->view('Home/Home');
        $this->load->view('Home/Home_footer');
    }

}