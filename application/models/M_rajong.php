<?php
class M_rajong extends CI_Model
{

    function get_rajong() //tampil data member
    {
        $result = $this->db->get('rajong');
        return $result;
    }

    function rajong()
    {
        $this->db->select('*');
        $this->db->from('rajong');
        $this->db->where('id',1);
        return $this->db->get()->row();
    }

}
