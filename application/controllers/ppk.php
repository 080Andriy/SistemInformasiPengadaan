<?php
defined('BASEPATH') or exit('No direct script access allowed');

class ppk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_ppk');
    }

    public function ppk()
    {
       
        $data['ppk'] = $this->m_ppk->get_data();
        $data['ppk2'] = $this->m_ppk->get_data1();

       

        $this->load->view('ppk/ppk', $data);
    }
    public function datapengadaan1($id)
    {

        $data['ppk1'] = $this->m_ppk->get_data2($id); // menampung di variable $data
        $data['data_pengadaan'] = $this->m_ppk->get_data3($id); // menampung di variable $data

        $this->load->view('ppk/datapengadaan1', $data);
    }

    public function editdatakup($id_data)
    {

       
        $stj_ppk = $this->input->post('stj_ppk');
        $id_perencanaan = $this->input->post('id_perencanaan');

        $data = array(
            'stj_ppk' => $stj_ppk,
            'id_data' => $id_data,
            'id_perencanaan' => $id_perencanaan,

        );

        $this->m_ppk->update_data($data, 'datapengadaan');
        redirect('ppk/datapengadaan1/' . $id_perencanaan);
    }


}