<?php
class Modelanggotaasesi extends CI_Model{
	public function selectall(){
		$sql = "select * from lsp504_assesi";
		return $this->db->query($sql)->result();
	}
	public function ubahdataanggotaassesi($val,$id){
		$this->db->where('id',$id);
		$this->db->update("lsp504_assesi",$val);
	}
	public function hapusdataanggotaassesi($id){
		$this->db->where("id",$id);
		$this->db->delete("lsp504_assesi");

	}
	public function insertdataanggotaassesi($val){
		$this->db->insert("lsp504_assesi",$val);

	}
}