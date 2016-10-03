<?php
class Datauser extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Ion_auth_model');
		$this->load->model('Modeldatauser');
	}
	public function index(){
		$this->load->view("datauser");
	}
	public function ambildatauser(){
		$data = $this->Modeldatauser->selectall();
		echo json_encode($data);
	}
	public function insertdatauser(){
		$data = (array)json_decode(file_get_contents('php://input'));
		$password = $data['password'];
		$username = $data['firstname'];
		$email = $data['email'];
		$additional_data = array(
								'first_name' => $data['firstname'],
								'last_name' => $data['lastname'],
								);
		$group = array('1'); // Sets user to admin.
		$this->ion_auth->register($username,$password, $email, $additional_data, $group);

	}
	public function ubahdatauser(){

	}
	public function hapusdatauser(){
		$data = (array)json_decode(file_get_contents('php://input'));
		for($i = 0;$i < count($data['id']);$i++){
			$id = $data['id']->hapusdatauser[$i];
			$this->ion_auth->delete_user($id);
		}

	}
}