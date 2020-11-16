<?php
class M_Keranjang extends CI_Model
{

    function get_keranjang() //tampil data member
    {
        $result = $this->db->get('produk');
        return $result;
    }


}
