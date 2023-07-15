<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model extends CI_Model {
    function logged_id()
    {
        return $this->session->userdata('id_user');
    }
	
      function is_role()
    {
        return $this->session->userdata('level');
    }
    function check_login($table, $field1, $field2)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->where($field1);
        $this->db->where($field2);
        $query = $this->db->get();
        if ($query->num_rows() == 0) {
            return FALSE;
        } else {
            return $query->result();
        }
    }

	public function tampil($table)
	{
		return $this->db->get($table);
	}
	public function cek_login($table,$where){
		return $this->db->get_where($table,$where);
	}
	public function hapus($where,$table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
	public function update($where,$update,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$update);
	}
	function input($data, $table)
	{
		$this->db->insert($table, $data);
	}
	function edit($where,$table){		
		return $this->db->get_where($table,$where);
	}
    function kurangstok($where,$table,$data){
		return $this->db->insert($table,$data);
		return $this->db->insert('buku','stok -1',FALSE);
	}
	function joinbuku(){
		return $this->db->query('select * from buku join dist on buku.id_dist=dist.id_dist;');
	}
	function joinpinjam(){
		return $this->db->query('select * from pinjam join buku on pinjam.id_buku=buku.id_buku join user on pinjam.id_user=user.id_user;');
	}
	function joinpinjamadd(){
		return $this->db->query('select * from pinjam rightjoin buku on pinjam.id_buku=buku.id_buku rightjoin user on pinjam.id_user=user.id_user;');
	}
}
?>