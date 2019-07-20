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
        //TODO : brute force
        $user = $this->input->post('username');
        $pass = md5($this->input->post('pass'));
        $keeplogin = (bool)$this->input->post('keeplogin');
        $this->load->model('user_model','user');
        $user_info = $this->user->get(array('user_name' => $user));
        $user_info = $user_info[0];
        if(!empty($user_info) and $user_info['user_password'] == $pass)
        {
            //create session by user_id
            $this->session->set_userdata('login',$user_info['user_id']);
            //if keeplogin, create cookie to stay signed in
            if($keeplogin)
            {
                $this->load->helper('string');
                $rnd = random_string('alnum',8);
                $auth_key = md5('keeplogin' . $rnd);
                $cookie = array(
                    'name'   => 'keeplogin',
                    'value'  => $auth_key,
                    'expire' => '1209600',  // Two weeks
                    'path'   => '/'
                );

                if($this->user->update($user_info['user_id'], array('user_keeplogin' => $auth_key)))
                    $this->input->set_cookie($cookie);
            }
            redirect('/User');
        }
        else
        {
            //when using no ajax
            redirect('/Login');
        }
    }
}