<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index ()
    {
        $this->load->model('user_model', 'user');
        $user_id = $this->session->userdata('login');
        //keep login
        if($user_id == null) {
            if ($keep_auth = get_cookie('keeplogin')) {
                $keep_id = $this->user->get(array('user_keeplogin' => $keep_auth));
                $keep_id = $keep_id[0];
                if (!empty($keep_id)) {
                    $this->session->set_userdata('login', $keep_id['user_id']);
                    //regenerate auth key
                    $this->load->helper('string');
                    $rnd = random_string('alnum',8);
                    $auth_key = md5('keeplogin' . $rnd);
                    $cookie = array(
                        'name'   => 'keeplogin',
                        'value'  => $auth_key,
                        'expire' => '1209600',  // Two weeks
                        'path'   => '/'
                    );

                    if($this->user->update($keep_id['user_id'], array('user_keeplogin' => $auth_key)))
                        $this->input->set_cookie($cookie);
                }
            }
        }
        //session
        $data['login'] = false;
        $data['user_img'] = null;
        if($user_id != null)
        {
            $data['login'] = true;
            $user_info = $this->user->get($user_id);
            $user_info = $user_info[0];
            $data['user_img'] = $user_info['user_img'];
        }
        $this->load->view('Home/Home_header', $data);
        $this->load->view('Home/Home', $data);
        $this->load->view('Home/Home_footer', $data);
    }

}