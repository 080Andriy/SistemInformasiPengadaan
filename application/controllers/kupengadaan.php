<?php
defined('BASEPATH') or exit('No direct script access allowed');

class kupengadaan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_kupengadaan');
    }

    public function kupengadaan()
    {
       
        $data['kupengadaan'] = $this->m_kupengadaan->get_data();
        $data['kupengadaan2'] = $this->m_kupengadaan->get_data1();

       

        $this->load->view('kupengadaan/kupengadaan', $data);
    }
    public function datapengadaan1($id)
    {

        $data['kupengadaan1'] = $this->m_kupengadaan->get_data2($id); // menampung di variable $data
        $data['data_pengadaan'] = $this->m_kupengadaan->get_data3($id); // menampung di variable $data

        $this->load->view('kupengadaan/datapengadaan1', $data);
    }

    public function editdatakup($id_data)
    {

       
        $stj_kupengadaan = $this->input->post('stj_kupengadaan');
        $id_perencanaan = $this->input->post('id_perencanaan');

        $data = array(
            'stj_kupengadaan' => $stj_kupengadaan,
            'id_data' => $id_data,
            'id_perencanaan' => $id_perencanaan,

        );

        $this->m_kupengadaan->update_data($data, 'datapengadaan');
        redirect('kupengadaan/datapengadaan1/' . $id_perencanaan);
    }

    public function tambahpengadaan($id_data)
    {

       
        $metodepengadaan= $this->input->post('metodepengadaan');
        $jenispengadaan = $this->input->post('jenispengadaan');
        $judulpengadaan = $this->input->post('judulpengadaan');
        $picpengadaan = $this->input->post('picpengadaan');
        $id_perencanaan = $this->input->post('id_perencanaan');

        $data = array(
            'metodepengadaan' => $metodepengadaan,
            'jenispengadaan' => $jenispengadaan,
            'judulpengadaan' => $judulpengadaan,
            'picpengadaan' => $picpengadaan,
            'id_data' => $id_data,
            'id_perencanaan' => $id_perencanaan,

            

        );

        $this->m_kupengadaan->insert_data($data, 'datapengadaan');
        redirect('kupengadaan/datapengadaan1/' . $id_perencanaan);
    }


}