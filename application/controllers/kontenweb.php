<?php
defined('BASEPATH') OR exit ('No direct script access allowed');

class kontenweb extends CI_Controller{
	
	public function __construct(){
		parent::__construct();
		$this->load->model('modeldata');
	}

	public function index(){
		$this->load->view('bagian/kepala');
		$this->load->view('utama');
		$this->load->view('bagian/bawah');
	}

	public function addData(){
		$this->load->model('modeldata');
		$this->modeldata->addData();
		redirect('kontenweb/dataMahasiswa');
	}

	public function dataMahasiswa(){
		$data['mahasiswa']=$this->modeldata->getdata();
		$this->load->view('bagian/kepala.php');
		$this->load->view('dataMahasiswa',$data);
	}

	public function editData(){
		$this->modeldata->editData();
		redirect('kontenweb/dataMahasiswa');
	}

	public function deleteData($id){
		$this->modeldata->deleteData($id);
		redirect('kontenweb/dataMahasiswa');
	}
}