<?php
defined('BASEPATH') or exit('No direct script access allowed');

class staffpengadaan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_staffpengadaan');
    }

    public function staffpengadaan()
    {

        $data['staffpengadaan'] = $this->m_staffpengadaan->get_data();
        $data['staffpengadaan2'] = $this->m_staffpengadaan->get_data1();



        $this->load->view('staffpengadaan/staffpengadaan', $data);
    }
    public function datapengadaan1($id)
    {

        $data['staffpengadaan1'] = $this->m_staffpengadaan->get_data2($id); // menampung di variable $data
        $data['data_pengadaan'] = $this->m_staffpengadaan->get_data3($id); // menampung di variable $data

        $this->load->view('staffpengadaan/datapengadaan1', $data);
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

    public function tambahdatapengadaan($id_data)
    {

        $nosp = $this->input->post('nosp');
        if ($foto = ''){
        } else {
            $config['upload_path']          = 'assets/file/';
            $config['allowed_types']        = 'pdf|word|png|jpg|jpeg';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('filesp')){
                echo "upload gagal";
            } else {
                $filesp = $this->upload->data('file_name');
            }
        }
        if ($foto2 = ''){
        } else {
            $config['upload_path']          = 'assets/file/';
            $config['allowed_types']        = 'pdf|word|png|jpg|jpeg';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('hps')){
                echo "upload gagal";
            } else {
                $hps = $this->upload->data('file_name');
            }
        }
        if ($foto3 = ''){
        } else {
            $config['upload_path']          = 'assets/file/';
            $config['allowed_types']        = 'pdf|word|png|jpg|jpeg';

            $this->load->library('upload', $config);
            if(!$this->upload->do_upload('bast')){
                echo "upload gagal";
            } else {
                $bast = $this->upload->data('file_name');
            }
        }
        $id_perencanaan = $this->input->post('id_perencanaan');
        $data = array(
            'nosp' => $nosp,
            'filesp' => $filesp,
            'hps' => $hps,
            'bast' => $bast,
            'id_data' => $id_data,
            'id_perencanaan' => $id_perencanaan,
        );
        $this->m_staffpengadaan->updatefile($data, 'datapengadaan');
        redirect('staffpengadaan/datapengadaan1/'.$id_perencanaan);

    }
}
