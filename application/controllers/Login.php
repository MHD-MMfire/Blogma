<?php


class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        if($this->session->userdata('login') != null)
            redirect('/');
        $this->load->helper('form');

    }

    public function index()
    {
        $this->load->view('Users/User_header');
        $this->load->view('Users/Login');
        $this->load->view('Users/User_footer');
    }

    public function submit()
    {
        $user = $this->input->post('username');
        $pass = md5($this->input->post('pass'));
        $this->load->database();
        $this->load->model('user_model','user');
        $user_info = $this->user->get(array('user_name' => $user))[0];
        if(!empty($user_info) and $user_info['user_password'] == $pass)
        {
            //create session by user_id
            $this->session->set_userdata('login',$user_info['user_id']);
            redirect('/User');
        }
        else
        {
            //when using no ajax
            redirect('/Login');
        }
    }
}