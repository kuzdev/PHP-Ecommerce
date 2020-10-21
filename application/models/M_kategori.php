<?php
class M_kategori extends CI_Model
{

    function get_kategori() //tampil data kategori
    {
        $result = $this->db->get('kategori');
        return $result;
    }

    function input_data($data, $table) // Tambah data kategori
    {
        $this->db->insert($table, $data);
    }

    function delete_data($where, $table) //Hapus data kategori
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    function update_data($where, $data, $table) // Update data kategori
    { 
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    
    function update_data2($where, $data, $table) // Update data kategori
    { 
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
