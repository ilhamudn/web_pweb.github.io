<?php

class modeldata extends CI_Model{
	
	public function addData(){
		$data=[
			'nama' =>$_POST['nama'], 
			'jkelamin' =>$_POST['jkelamin'], 
			'tgl_lahir' =>$_POST['tgl_lahir'], 
			'kotalahir' =>$_POST['kotalahir'], 
			'alamat' =>$_POST['Alamat']
		];

		$this->db->insert('mahasiswa',$data);
	}

	public function getData(){
		return $this->db->get('mahasiswa')->result_array();
	}

	public function editData(){
		$this->db->set('nama' , $_POST['nama']);
		$this->db->set('jkelamin' , $_POST['jkelamin']);
		$this->db->set('tgl_lahir' , $_POST['tgl_lahir']);
		$this->db->set('kotalahir' , $_POST['kotalahir']);
		$this->db->set('Alamat' , $_POST['Alamat']);
		$this->db->where('id_mhs', $_POST['id_mhs']);
		$this->db->update('mahasiswa');
	}

	public function deleteData($id){
		$this->db->delete('mahasiswa',['id_mhs'=>$id]);
	}
}