<?php
class M_Checkout extends CI_Model
{

    function checkout() //tampil data member
    {
        $result = $this->db->get('produk');
        return $result;
    }


}
