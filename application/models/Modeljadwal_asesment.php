<?php
Class modeljadwal_asesment extends CI_Model{
	public function selectjadwal(){
		$sql = "select * from jadwalasesment";
		return $this->db->query($sql)->result();
	}
	public function ubahjadwal($id,$val){
		$this->db->where("id",$id);
		$this->db->update("jadwalasesment",$val);
	}
	public function hapusjadwal($id){
		$this->db->where("id",$id);
		$this->db->delete("jadwalasesment");

	}
	public function insertjadwal($val){
		$this->db->insert("jadwalasesment",$val);
	}
}