<?php
defined('BASEPATH') or exit('No direct script access allowed');

class profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('m_profile');

    }

    public function profile1()
    {
       
    $data['profile'] = $this->m_profile->get_data()->result();
      
       $this->load->view('profile/profile1', $data);
    
    }
     public function editdata($username)
    {
        $username = $this->input->post('username');
        $email = $this->input->post('email');
      
        


        $data = array(
            'username' => $username,
            'email' => $email,
        );

        $this->m_profile->update_data($data, 'user');
        redirect('profile/profile1');
    }
}