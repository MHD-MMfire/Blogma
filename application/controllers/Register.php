<?php


class Register extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        if($this->session->userdata('login') != null)
            redirect('/');
        $this->load->helper('form');
        $this->load->library('form_validation');

    }

    public function index()
    {
        $this->load->view('Users/User_header');
        $this->load->view('Users/Register');
        $this->load->view('Users/User_footer');
    }

    function submit()
    {
        if(!$this->input->post('submit'))
        {
            redirect('/Register');
        }
        //loading model
        $this->load->model('user_model','user');
        //validation:
        $this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[1]|max_length[15]|is_unique[user.user_name]');
        $this->form_validation->set_rules('pass', 'Password', 'trim|required|min_length[1]|max_length[30]');
        $this->form_validation->set_rules('confirmpass', 'Password Confirmation', 'trim|required|matches[pass]');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.user_email]');
        $this->form_validation->set_rules('blogname', 'Blog name', 'required|min_length[1]|max_length[30]|is_unique[user.user_blogname]');
        $this->form_validation->set_rules('img', 'Image', 'trim');



        if($this->form_validation->run() == false)
        {
            return $this->index();
        }
        else
        {
            //start image
            $upload_folder = "/Public/image/";
            $config['upload_path']   = realpath(APPPATH . '../Public/image');
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size']      = 1024;
            $config['max_width']     = 1024;
            $config['max_height']    = 1024;
            $config['file_ext_tolower']  = TRUE;
            $config['overwrite']  = FALSE;
            $config['encrypt_name']  = TRUE;
            $config['remove_spaces']  = TRUE;
            $config['detect_mime']  = TRUE;
            $config['mod_mime_fix']  = TRUE;
            $this->load->library('upload', $config);

            if ( ! $this->upload->do_upload('userimg'))
                //TODO : error to view
                return $this->index();
            $imgpath = $upload_folder . $this->upload->data('file_name');
            //end image
            $username = $this->input->post('username');
            $data = array(
                'user_name' => $username,
                'user_password' => md5($this->input->post('pass')),
                'user_email' => $this->input->post('email'),
                'user_salt' => md5('blmhdstrppr' . $username),
                'user_blogname' => $this->input->post('blogname'),
                'user_img' => $imgpath
            );

            if(!($user_id = $this->user->insert($data)))
            {
                die("We're sorry, an internal error has occured!");
            }
            $this->session->set_userdata('login', $user_id);
            redirect('/User');
        }
    }
}