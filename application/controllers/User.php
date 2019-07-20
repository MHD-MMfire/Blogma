<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
    private $user_id;

    public function __construct()
    {
        parent::__construct();
        $this->user_id = $this->session->userdata('login');
        if($this->user_id == null)
            redirect('/');
    }

    public function index ()
    {
        $this->load->model('user_model', 'user');
        $user_info = $this->user->get($this->user_id);
        $user_info = $user_info[0];
        $data['user_img'] = $user_info['user_img'];
        $data['username'] = $user_info['user_name'];
        $this->load->view('Dashboard/Dashboard_header', $data);
        $this->load->view('Dashboard/Dashboard', $data);
        $this->load->view('Dashboard/Dashboard_footer');
    }

    public function signout()
    {
        $this->load->model('user_model', 'user');
        if($this->user->update($this->user_id, array('user_keeplogin' => null)))
            delete_cookie('keeplogin');
        $this->session->unset_userdata('login');
        $this->session->sess_destroy();
        redirect('/');
    }
}