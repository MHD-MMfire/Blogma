<?php


class Register extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $this->load->view('Users/Register');
    }

    function submit()
    {
        //validation:
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[1]|max_length[15]|is_unique[users.username]');
        $this->form_validation->set_rules('pass', 'Password', 'trim|required|min_length[1]|max_length[30]');
        $this->form_validation->set_rules('confirmpass', 'Password Confirmation', 'trim|required|matches[pass]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');

        if($this->form_validation->run() == false)
        {
            $this->load->view('Users/Register');
        }
        else
        {
            $this->load->view('Users/RegisterSuccessful');
        }
    }
}