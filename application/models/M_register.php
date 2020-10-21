<?php
class M_register extends CI_Model{
 
    function input_data($data, $table) // Tambah data member
    {
        $this->db->insert($table, $data);
    }

}
