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

	}
	public function insertjadwal(){

	}
	public function hapusjadwal(){

	}
	public function ubahjadwal(){

	}
}