<?php
class M_login extends CI_Model{
    function cekpengguna($username,$password){
        $hasil=$this->db->query("SELECT * FROM adminn WHERE username ='$username' AND pass_admin = md5('$password') LIMIT 1");
        return $hasil;
    }

      function cekmember($username,$password){
        $hasil=$this->db->query("SELECT * FROM member WHERE username_member ='$username' AND password_member=md5('$password') LIMIT 1 ");
        return $hasil;
    }

}
