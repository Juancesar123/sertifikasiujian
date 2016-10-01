<?php
class Anggotaasesi extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Modelanggotaasesi');
	}
	public function index(){
		$this->load->view("anggotaasesi");
	}
	public function insertasesi(){
		$data = (array)json_decode(file_get_contents('php://input'));
		$val= array(
			'nama'=> $data['nama'],
			'tempat_lahir'=> $data['tempat'],
			'tgl_lahir'=> $data['tanggal'],
			'jenis_kelamin' => $data['jenis'],
			'kewarganegaraan' => $data['kewarganegaraan'],
			'alamat' => $data['alamat'],
			'telp' => $data['telpon'],
			'email' => $data['email'],
			'pendidikan_terakhir' => $data['pendidikan'],
			'alamat' => $data['alamat'],
			'jurusan' => $data['jurusan'],
			'tahun_lulus' => $data['tahunlulus']
			);
		$this->Modelanggotaasesi->insertdataanggotaassesi($val);
	}
	public function selectasesi(){
		$data = $this->Modelanggotaasesi->selectall();
		echo json_encode($data);
	}
	public function hapusasesi(){
		$data = (array)json_decode(file_get_contents('php://input'));
		for($i = 0;$i < count($data['id']);$i++){
			$id = $data['id']->hapusanggotaasesi[$i];
			$this->Modelanggotaasesi->hapusdataanggotaassesi($id);
		}
	}
	public function ubahasesi(){
		$data = (array)json_decode(file_get_contents('php://input'));
		$val= array(
			'nama'=> $data['nama'],
			'tempat_lahir'=> $data['tempat'],
			'tgl_lahir'=> $data['tanggal'],
			'jenis_kelamin' => $data['jenis'],
			'kewarganegaraan' => $data['kewarganegaraan'],
			'alamat' => $data['alamat'],
			'telp' => $data['telpon'],
			'email' => $data['email'],
			'pendidikan_terakhir' => $data['pendidikan'],
			'alamat' => $data['alamat'],
			'jurusan' => $data['jurusan'],
			'tahun_lulus' => $data['tahunlulus']
			);
		$id = $data['id'];
		$this->Modelanggotaasesi->ubahdataanggotaassesi($val,$id);
	}
}