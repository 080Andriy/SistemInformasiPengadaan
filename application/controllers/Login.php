<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function Login()
    {
        $this->load->view('tamplates/login_header');
        $this->load->view('Login/Login');
        $this->load->view('tamplates/login_footer');
    }

    public function __construct()
    {
        parent::__construct();
        error_reporting(0);
        $this->load->library("session");
        $this->load->helper('url');
        $this->load->model('M_login');
    }

    public function ceklogin()
    {

        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $cek = $this->M_login->cek($username, $password);
        if ($cek->num_rows() == 1) {

            foreach ($cek->result() as $data) {
                $sess_data['username'] = $data->username;
                $sess_data['id_user'] = $data->id;
                $sess_data['id_role'] = $data->id_role;
                $sess_data['id_perencanaan'] = $data->id_perencanaan;
                
                $this->session->set_userdata($sess_data);
            }
            if ($this->session->userdata('id_role') == 'pengusul') {
                redirect('pengusul/pengusul');
            } elseif ($this->session->userdata('id_role') == 'kepalaunitpengusul') {
                redirect('kupengusul/kupengusul');
            } elseif ($this->session->userdata('id_role') == 'ppk') {
                redirect('ppk/ppk');
            } elseif ($this->session->userdata('id_role') == 'kepalaunitpengadaan') {
                redirect('kupengadaan/kupengadaan');
            } elseif ($this->session->userdata('id_role') == 'staffpengadaan') {
                redirect('staffpengadaan/staffpengadaan');
            } elseif ($this->session->userdata('id_role') == 'ppk') {
                redirect('ppk/ppk');
            } 
        } else {
            $this->session->set_flashdata('pesan', 'Maaf, kombinasi username dengan password salah.');
            redirect('landingpages');
        }
    }



    public function pengusul()
    {
        $this->load->view('pengusul/pengusul');
    }
}
