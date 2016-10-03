<?php
class Modeldatauser extends CI_Model{
	public function selectall(){
		$sql = "select * from users";
		return $this->db->query($sql)->result();
	}
	public function insertdatauser(){

	}
	public function ubahdatauser(){

	}
	public function hapusdatauser(){

	}
}