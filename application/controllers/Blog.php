<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Blog extends CI_Controller {
	public function index()
	{
		$data['tab']="This is home Page";
		$this->load->view('bloghome',$data);
	}
	public function tab1()
	{
		$data['tab']="This is tab 1";
		$this->load->view('bloghome',$data);
	}
	public function tab2()
	{
		$data['tab']="This is tab 2";
		$this->load->view('bloghome',$data);
	}
	public function tab3()
	{
		$data['tab']="This is tab 3";
		$this->load->view('bloghome',$data);
	}
	public function tab4()
	{
		$data['tab']="This is tab 4";
		$this->load->view('bloghome',$data);
	}

}
?>