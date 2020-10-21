<?php
class M_laporan extends CI_Model
{

    function get_laporan() //tampil data member
    {
        $result = $this->db->get('produk');
        return $result;
    }


}
