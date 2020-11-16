<?php
class M_produk extends CI_Model{

    function get_produk() //tampil barang ke halaman
    {
        // $result= $this->db->get('produk');
        // return $result;
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->join('kategori', 'kategori.id_kategori = produk.id_kategori');
        return $this->db->get();
    }


    function get_kategori() //tampil kategori ke halaman
    {
        $this->db->select('*');
        return $this->db->get('kategori');
    }

    function get_detil_produk($id_produk) //tampil detil produk page
    {
        $this->db->from('produk');
        $this->db->join('stok', 'stok.id_produk=produk.id_produk');
        $detil = $this->db->where('produk.id_produk', $id_produk)->get();
        if ($detil->num_rows()>0){
            return $detil->result();
        }else {
            return false;
        }
        
        // $this->db->order_by('id_produk');
        // $result = $this->db->get('produk',6,0);
        // return $result;
    }

    function get_produk_page() //tampil random produk page
    {
        $this->db->order_by('id_produk', 'DESC');
        $result = $this->db->get('produk',6,0);
        return $result;
    }

    function input_data($data, $table) // Tambah data produk
    {
        $this->db->insert($table, $data);
    }

    function delete_data($where, $table) //Hapus data produk
    {
        $this->db->where($where);
        $this->db->delete($table);
    }


    function update_data($where, $data, $table) // Update data produk
    { 
        $this->db->where($where);
        $this->db->update($table, $data);
    }

}