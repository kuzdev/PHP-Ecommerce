<?php
class M_member extends CI_Model
{

    function get_member() //tampil data member
    {
        $result = $this->db->get('member');
        return $result;
    }


}
