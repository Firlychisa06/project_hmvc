<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_contoh extends CI_Model {

	public function simpan($arrayName)
	{
		$this->db->insert('users',$arrayName);

	}
	public function getdata()
	{
		$this->db->select('*');
		$this->db->from('users');
		return $this->db->get()->result();
	}
	public function getdata_user($id_user)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('id_user', $id_user);
		return $this->db->get()->row_array();
		// $query = "SELECT * FROM users WHERE id_user = ?";
		// $sql = $this->db->query($query, $id_user);
		// $result = $query->row();
		// return $result;
	}
	public function simpan_update($arrayName, $id_user)
	{
		$this->db->where('id_user',$id_user);
		$this->db->update('users',$arrayName);	
	}

}
