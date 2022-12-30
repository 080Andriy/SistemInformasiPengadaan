<?php
defined('BASEPATH') or exit('No direct script access allowed');

class pengusul extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('m_pengusul');
    }

    public function pengusul()
    {
        $id_user = $this->session->userdata('id_user');
        $query ="SELECT total FROM datapengadaan  JOIN perencanaan ON datapengadaan.id_perencanaan=perencanaan.id_perencanaan";

        $data['pengusul'] = $this->m_pengusul->get_data3($id_user);
        $data['pengusul2'] = $this->m_pengusul->get_data4($id_user);
       
       
        // var_dump( $data['pengusul']); exit;

        $this->load->view('pengusul/pengusul', $data);
    }


    public function ajukanpengadaan()
    {
        $pengusul = $this->m_pengusul->get_data(); // memanggil method getAll
        $data['pengusul'] = $pengusul; // menampung di variable $data

        $this->load->view('pengusul/ajukanpengadaan', $data);
    }
    public function ajukanpengadaan1($id)
    {

        $data['pengusul1'] = $this->m_pengusul->get_data1($id); // menampung di variable $data
        $data['data_pengadaan'] = $this->m_pengusul->get_data2($id); // menampung di variable $data

        $this->load->view('pengusul/ajukanpengadaan1', $data);
    }

    public function tambahdata()
    {

        $id_user = $this->session->userdata('id_user');
        $kokegiatan = $this->input->post('kokegiatan');
        $kakegiatan = $this->input->post('kakegiatan');
        $detailakun = $this->input->post('detailakun');
        $namapaket = $this->input->post('namapaket');



        $data = array(
            'kokegiatan' => $kokegiatan,
            'kakegiatan' => $kakegiatan,
            'detailakun' => $detailakun,
            'namapaket' => $namapaket,
            'id_user' => $id_user,
        );

        $this->m_pengusul->insert_data($data, 'perencanaan');


        redirect('pengusul/ajukanpengadaan1/' . $this->db->insert_id());
    }
    public function tambahdata1($id_perencanaan)
    {
        $id_user = $this->session->userdata('id_user');
        $nama_barang = $this->input->post('nama_barang');
        $spesifikasi = $this->input->post('spesifikasi');
        $satuan = $this->input->post('satuan');
        $volume = $this->input->post('volume');
        $harga_satuan = $this->input->post('harga_satuan');
        $total = $volume * $harga_satuan;
        $pdnimpor = $this->input->post('pdnimpor');
        $keterangan = $this->input->post('keterangan');


        $data = array(
            'nama_barang' => $nama_barang,
            'spesifikasi' => $spesifikasi,
            'satuan' => $satuan,
            'volume' => $volume,
            'harga_satuan' => $harga_satuan,
            'total' => $total,
            'pdnimpor' => $pdnimpor,
            'keterangan' => $keterangan,
            'id_user' => $id_user,
            'id_perencanaan' => $id_perencanaan,

        );

        $this->m_pengusul->insert_data($data, 'datapengadaan');

        redirect('pengusul/ajukanpengadaan1/' . $id_perencanaan);
    }

    public function editdata($id_data)
    {

        $nama_barang = $this->input->post('nama_barang');
        $spesifikasi = $this->input->post('spesifikasi');
        $satuan = $this->input->post('satuan');
        $volume = $this->input->post('volume');
        $harga_satuan = $this->input->post('harga_satuan');
        $total = $volume * $harga_satuan;
        $pdnimpor = $this->input->post('pdnimpor');
        $keterangan = $this->input->post('keterangan');
        $id_perencanaan = $this->input->post('id_perencanaan');





        $data = array(
            'nama_barang' => $nama_barang,
            'spesifikasi' => $spesifikasi,
            'satuan' => $satuan,
            'volume' => $volume,
            'harga_satuan' => $harga_satuan,
            'total' => $total,
            'pdnimpor' => $pdnimpor,
            'keterangan' => $keterangan,
            'id_data' => $id_data,
            'id_perencanaan' => $id_perencanaan,

        );

        $this->m_pengusul->update_data($data, 'datapengadaan');
        redirect('pengusul/ajukanpengadaan1/' . $id_perencanaan);
    }

    public function editdata1($id_perencanaan)
    {
        $kokegiatan = $this->input->post('kokegiatan');
        $kakegiatan = $this->input->post('kakegiatan');
        $detailakun = $this->input->post('detailakun');
        $namapaket = $this->input->post('namapaket');



        $data = array(
            'id_perencanaan' => $id_perencanaan,
            'kokegiatan' => $kokegiatan,
            'kakegiatan' => $kakegiatan,
            'detailakun' => $detailakun,
            'namapaket' => $namapaket,

        );

        $this->m_pengusul->update_data1($data, 'perencanaan');
        redirect('pengusul/ajukanpengadaan1/' . $id_perencanaan);
    }

    public function delete($id_data)
    {
        $where = array('id_data' => $id_data);
        $id_perencanaan = $this->input->post('id_perencanaan');

        $this->m_pengusul->delete($where, 'datapengadaan');
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible fade show" role="alert">
            data berhasil dihapus<button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span></button></div>');
        redirect('pengusul/ajukanpengadaan1/' . $id_perencanaan);
    }

    public function tampilandataborang()
    {

        $this->load->view('pengusul/tampilandataborang');
    }
    public function ajukanborangpengadaan()
    {
        $this->load->view('tamplates/auth_header');
        $this->load->view('pengusul/ajukanborangpengadaan');
        $this->load->view('tamplates/auth_footer');
    }
    public function tambahpengadaan()
    {
        $this->load->view('tamplates/auth_header');
        $this->load->view('pengusul/tambahpengadaan');
        $this->load->view('tamplates/auth_footer');
    }
}