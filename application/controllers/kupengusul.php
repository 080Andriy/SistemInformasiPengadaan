<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kupengusul extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_kupengusul');
    }

    public function kupengusul()
    {
       
        $data['kupengusul'] = $this->m_kupengusul->get_data();
        $data['kupengusul2'] = $this->m_kupengusul->get_data1();

       

        $this->load->view('kupengusul/kupengusul', $data);
    }
    public function datapengadaan1($id)
    {

        $data['kupengusul1'] = $this->m_kupengusul->get_data2($id); // menampung di variable $data
        $data['data_pengadaan'] = $this->m_kupengusul->get_data3($id); // menampung di variable $data

        $this->load->view('kupengusul/datapengadaan1', $data);
    }

    public function editdatakup($id_data)
    {

       
        $stj_kupengusul = $this->input->post('stj_kupengusul');
        $id_perencanaan = $this->input->post('id_perencanaan');

        $data = array(
            'stj_kupengusul' => $stj_kupengusul,
            'id_data' => $id_data,
            'id_perencanaan' => $id_perencanaan,

        );

        $this->m_kupengusul->update_data($data, 'datapengadaan');
        redirect('kupengusul/datapengadaan1/' . $id_perencanaan);
    }


}