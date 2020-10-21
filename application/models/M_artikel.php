<?php
class M_artikel extends CI_Model
{

    function get_artikel() //tampil data artikel
    {
        $result = $this->db->get('artikel');
        return $result;
    }
    
    public function  artikel_detail($id){
        return $this->db->get_where('artikel', ['id_artikel' => $id]);
    }
    
    function get_artikel_page() //tampil random artikel page
    {
        $this->db->order_by('id_artikel', 'RANDOM');
        $result = $this->db->get('artikel',6,0);
        return $result;
    }

    function input_data($data, $table) // Tambah data artikel
    {
        $this->db->insert($table, $data);
    }

    function delete_data($where, $table) //Hapus data artikel
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    function update_data($where, $data, $table) // Update data artikel
    { 
        $this->db->where($where);
        $this->db->update($table, $data);
    }
    
    function update_data2($where, $data, $table) // Update data artikel
    { 
        $this->db->where($where);
        $this->db->update($table, $data);
    }
}
