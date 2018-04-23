<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SecondController extends CI_Controller {

	public function index()
	{
		$data['show']=$this->Mymodel->select('tbl_first');
		$data['side']='tampil/side';
		$data['content']='tampil/tampiladmin';
		$this->load->view('tampil/main',$data);
	}

	public function add()
	{
		$data['side']='tampil/side';
		$data['content']='tampil/add_v';
		$this->load->view('tampil/main',$data);
	}

	public function addfunction()
	{
		$data['name']=$this->input->post('idname');
		$data['address']=$this->input->post('idaddress');
		$this->Mymodel->insert('tbl_first',$data);
		header('location:'.base_url().'index.php/SecondController');

	}
}