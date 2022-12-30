<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_pengusul extends CI_Model
{
    public function get_data()
    {
        return $this->db->get('datapengadaan');
    }
    /*public function inner()
    {
        $this->db->select('*')
        $this->db->from('perencanaan');
       $this->db->where('id_user'=$_SESSION[id_user])
    }*/
    public function get_data3($id_user)
    {
        return
            $this->db->from('perencanaan')
            ->where('perencanaan.id_user =', $id_user)
            ->get()
            ->result();
    }

    public function get_data4()
    {
        return
            $this->db->from('datapengadaan')
            ->where('datapengadaan.id_user =',  $this->session->userdata('id_user'))
            ->limit(1)
            ->get()
            ->result();
    }


    public function get_data1($id)
    {
        return
            $this->db->from('perencanaan')
            ->where('perencanaan.id_user =', $this->session->userdata('id_user'))
            ->where('perencanaan.id_perencanaan =', $id)
            ->get()
            ->result();
    }
    public function get_data2($id)
    {
        return
            $this->db->from('datapengadaan')
            ->where('datapengadaan.id_perencanaan =', $id)
            ->get()
            ->result();
    }


    public function update_data1($data, $table)
    {
        $this->db->where('id_perencanaan', $data['id_perencanaan']);
        $this->db->update($table, $data);
    }
    public function insert_data($data, $table)
    {
        $this->db->insert($table, $data);
    }


    public function update_data($data, $table)
    {
        $this->db->where('id_data', $data['id_data']);
        $this->db->update($table, $data);
    }
    public function delete($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }
    public function total($id_perencanaan)
    {
        $this->db->select_sum('total');
        $this->db->from('datapengadaan');
        $this->db->where('datapengadaan.id_user =', $this->session->userdata('id_user'));
        $this->db->where('perencanaan.id_perencanaan =', $id_perencanaan);

        return $this->db->get()->row()->total;
    }
    public function dis($id_perencanaan)
    {
        $this->db->distinct('id_perencanaan');
        $this->db->get('datapengadaan');
    }
}