<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FirstController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$data['show']=$this->Mymodel->select('tbl_first');
		$this->load->view('Showdata',$data);
	}
	public function showinsert()
	{
		$this->load->view('Insertdata');
	}
	public function insertdata()
	{
		$data['name']=$this->input->post('namedata');
		$data['address']=$this->input->post('addressdata');
		$this->Mymodel->insert('tbl_first',$data);
		header('location:'.base_url().'index.php/FirstController');
	}

	public function updatedata()
	{
		$id=$this->input->post('id');
		$where= array('no'=>$id);
		$data['name']=$this->input->post('name');
		$data['address']=$this->input->post('address');
		$this->Mymodel->update('tbl_first',$data,$where);
		header('location:'.base_url().'index.php/FirstController');
	}

	public function deletedata()
	{
		$id=$this->uri->segment(3);
		$delete=array('no'=>$id);
		$this->Mymodel->delete('tbl_first',$delete);
		header('location:'.base_url().'index.php/FirstController');
	}
}