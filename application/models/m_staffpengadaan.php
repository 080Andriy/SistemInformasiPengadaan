<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_staffpengadaan extends CI_Model
{
    public function get_data()
    {
        return
        $this->db->from('perencanaan')
        ->get()
        ->result();
    }
    public function get_data1()
    {
        return
        $this->db->from('datapengadaan')
        ->get()
        ->result();
    }

    public function get_data2($id)
    {
        return
            $this->db->from('perencanaan')
            ->where('perencanaan.id_perencanaan =', $id)
            ->limit(1)
            ->get()
            ->result();
    }
    public function get_data3($id)
    {
        return
            $this->db->from('datapengadaan')
            ->where('datapengadaan.id_perencanaan =', $id)
            ->get()
            ->result();
    }

    public function update_data($data, $table)
    {
        $this->db->where('id_data', $data['id_data']);
        $this->db->update($table, $data);
    }
    public function updatefile($data, $table)
    {
        $this->db->where('id_data', $data['id_data']);
        $this->db->update($table, $data);
    }
   
    function insert($data)
    {
         $this->db->insert('datapengadaan', $data);
    }
}