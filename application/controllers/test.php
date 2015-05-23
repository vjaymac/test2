<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model("Test_model");
	}

	public function index()
	{
		$data = array();
		if($this->input->post('fname')!=""){
			$this->Test_model->insert_entry($this->input->post('fname'),$this->input->post('lname'));
		}
		//$data['data'] = $this->Test_model->get_all();
		$this->load->view('form',$data);
	}
	
	public function view()
	{
		$data = array();
		$data['data'] = $this->Test_model->get_all();
		$this->load->view('view',$data);
	}
	
	public function delete()
	{
		$data = array();
		if($this->input->post('del_btn')!=""){
			$this->Test_model->delete_entry($this->input->post('id'));
			redirect('/test/view/', 'refresh');
		}
		
		if($this->input->post('upd_btn')!=""){
			$data['data'] = $this->Test_model->get_from_id($this->input->post('id'));
			$this->load->view('upd_form',$data);
		}
		
	}
	
	public function update()
	{
		$data = array();
		
		if($this->input->post('save_btn')!=""){
			$data['data'] = $this->Test_model->update_entry($this->input->post('fname'),$this->input->post('lname'),$this->input->post('id'));
			redirect('/test/view/', 'refresh');
		}
		
	}
	
	
}