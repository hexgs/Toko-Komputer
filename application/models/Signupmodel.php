<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signupmodel extends CI_Model {
  // declare private variable
  private $_id_pelanggan;
  private $_nama_pelanggan;
  private $_email_pelanggan;
	private $_password_pelanggan;
	private $_telepon;
  // private $_status;
  
  public function setUserID($id_pelanggan) {
    $this->_id_pelanggan = $id_pelanggan;
  }
  public function setNama($nama_pelanggan) {
    $this->_nama_pelanggan = $nama_pelanggan;
  }
  public function setEmail($email_pelanggan) {
    $this->_email_pelanggan = $email_pelanggan;
  }
  public function setPassword($password_pelanggan) {
    $this->_password_pelanggan = $password_pelanggan;
	}
	public function setTelepon($telepon) {
    $this->_telepon = $telepon;
  }
  // public function setStatus($status) {
  //   $this->_status = $status;
  // } 
    
    public function createUser() {
        $data = array(
            'nama_pelanggan' => $this->_nama_pelanggan,
            'email_pelanggan' => $this->_email_pelanggan,
						'password_pelanggan' => $this->_password_pelanggan,
						'telepon' => $this->_telepon,
            // 'status' => $this->_status,
        );
        $this->db->insert('pelanggan', $data);
        return $this->db->insert_id();
    }
}
?>
