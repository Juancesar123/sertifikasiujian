<?php
class Jadwal_asesment extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Modeljadwal_asesment');
	}
	public function index(){
		$this->load->view("jadwalasesment.php");
	}
	public function selectjadwal(){
		$data = $this->Modeljadwal_asesment->selectjadwal();
		echo json_encode($data);
	}
	public function insertjadwal(){
		$data = (array)json_decode(file_get_contents('php://input'));
		$val = array(
			'nama' => $data['nama'],
			'tanggal' => $data['tanggal'],
			'tanggal_akhir' => $data['tanggalakhir'],
			);
		$this->Modeljadwal_asesment->insertjadwal($val);
	}
	public function hapusjadwal(){
		$data = (array)json_decode(file_get_contents('php://input'));
		for($i = 0;$i < count($data['id']);$i++){
			$id = $data['id']->hapusjadwalasesment[$i];
			$this->Modeljadwal_asesment->hapusjadwal($id);
		}
	}
	public function ubahjadwal(){
		$data = (array)json_decode(file_get_contents('php://input'));
		$val = array(
			'nama' => $data['nama'],
			'tanggal' => $data['tanggal'],
			'tanggal_akhir' => $data['tanggalakhir'],
			);
		$id = $data['id'];
		$this->Modeljadwal_asesment->ubahjadwal($id,$val);
	}
}