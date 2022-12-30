<?php
defined('BASEPATH') or exit('No direct script access allowed');

class landingpages extends CI_Controller
{
    public function index()
    {
        $this->load->view('tamplates/login_header');
        $this->load->view('landingpages/landingpages');
        $this->load->view('tamplates/login_footer');
    }



    public function registration()
    {

        $this->load->view('tamplates/login_header');
        $this->load->view('landingpages/registration');
        $this->load->view('tamplates/login_footer');
    }


    public function about()
    {

        $this->load->view('landingpages/about');
    }
}
