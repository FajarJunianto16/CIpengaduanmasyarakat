<?php

class Dashboard extends CI_Controller 
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('modelsistem');
    }
    public function index()
    {
        $this->load->view('home');
    }   
    public function masuk()
    {
        $this->load->view('login');
    }

    public function daftar()
    {
        $this->load->view('register');
    }

    public function insertuser()
    {
        $this->modelsistem->insertData();
    }

    public function LoginUser()
    {
        $usernames = $this->input->post('username');
        $passwords = $this->input->post('password');
        $where = array(
            'username' => $usernames,
            'password' => $passwords
        );
        $check = $this->modelsistem->cek_login("masyarakat", $where)->num_rows();

        if ($check > 0) {
            $data_session = array(
                'usernama' => $usernames,
                'status' => 'login'
            );

            $this->session->set_userdata($data_session);

            if($this->session->userdata('status') == 'login') {
                echo "berhasil login";
            } else {
                echo "username dan password anda salah";
            }
        } else {
            echo "data tidak ditemukan";
        }
    }
    public function LogoutUser()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
