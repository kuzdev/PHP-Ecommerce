<?php
class M_Stok extends CI_Model
{
    // function cari() 
    // {
        
        // $this->db->select('*');

        // $this->db->from('produk');
        // $this->db->join('stok', 'produk.id_produk=stok.id_produk');
      
        // return $this->db->get();
        // $this->db->like('nama_produk' $katakunci);

        // return $this->db->get();
    // }
    function cari() 
    {
        
  
        $result = $this->db->select('produk.nama_produk, stok. * ')-> 
            join('produk', 'produk.id_produk = stok.id_produk','right')->
            get('stok');
        return $result;
    }

}

?>
