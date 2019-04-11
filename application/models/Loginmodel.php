<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Loginmodel extends CI_Model {
	// declare private variable
	private $_id_pelanggan;
  private $_nama_pelanggan;
  private $_email_pelanggan;
	private $_password_pelanggan;
	private $_telepon;
	
	public function setUserID($id_pelanggan) {
		$this->_id_pelanggan = $id_pelanggan;
	}  
	public function setEmail($email_pelanggan) {
		$this->_email_pelanggan = $email_pelanggan;
	}
	public function setPassword($password_pelanggan) {
		$this->_password_pelanggan = $password_pelanggan;
	}       
   
	public function getUserInfo() {
	  $this->db->select(array('p.id_pelanggan', 'p.nama_pelanggan', 'p.email_pelanggan'));
	  $this->db->from('pelanggan as p');
	  $this->db->where('p.id_pelanggan', $this->_id_pelanggan);
	  $query = $this->db->get();
	  return $query->row_array();
	} 
	function login() {
	  $this->db->select('id_pelanggan, nama_pelanggan, email_pelanggan');
	  $this->db->from('pelanggan');
	  $this->db->where('email_pelanggan', $this->_email_pelanggan);
	  $this->db->where('password_pelanggan', $this->_password_pelanggan);
	  $this->db->limit(1);
	  $query = $this->db->get();
	  if($query->num_rows() == 1) {
		return $query->result();
	  } else {
		return false;
	  }
	}    
  }
