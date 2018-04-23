<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CurdController extends CI_Controller {

	public function index()
	{
		$data['show']=$this->Mymodel->select('tbl_first');
		$data['side']='tampil/side';
		$data['content']='tampil/index';
		$this->load->view('tampil/main',$data);
	}

	public function add()
	{
		$data['side']='tampil/side';
		$data['content']='tampil/add';
		$this->load->view('tampil/main',$data);
	}

	public function addfunction()
	{
		$data['name']=$this->input->post('name');
		$data['address']=$this->input->post('address');
		$this->Mymodel->insert('tbl_first',$data);
		header('location:'.base_url().'index.php/CurdController');

	}
        public function edit($no)
	{ 
            $data['side']='tampil/side';
            $data['content']='tampil/edit';
            $data['show'] = $this->Mymodel->selectDataById('tbl_first', $no); 
            $this->load->view('tampil/main',$data);  
	}
        
        public function updatedata()
	{         
		$id=$this->input->post('no');
		$where= array('no'=>$id);
		$data['name']=$this->input->post('name');
		$data['address']=$this->input->post('address');
		$this->Mymodel->update('tbl_first',$data,$where);
		header('location:'.base_url().'index.php/CurdController');
	}
        public function deletedata()
	{
		$id=$this->uri->segment(3);
		$delete=array('no'=>$id);
		$this->Mymodel->delete('tbl_first',$delete);
		header('location:'.base_url().'index.php/CurdController');
	}
}