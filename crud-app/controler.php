<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('Cimodel');

    }
	public function index()
	{
        $this->load->view("template/head");
        $this->load->view('ciapp');
		$this->load->view('template/footer');
	}
    public function dinsert()
	{
		if(isset($_POST['insert']))
		{
			//$uid=$_POST['uid'];
			//extract($_POST);
			$data['uname']=$this->input->post('uname');
			$data['uemail']=$this->input->post('uemail');
			$data['upass']=$this->input->post('upass');
			$data['ucity']=$this->input->post('ucity');
			$data['ucourse']=$this->input->post('ucourse');
			$this->Cimodel->ciinsert($data);
		}
		$this->load->view("template/head");
        $this->load->view('template/insert');
		$this->load->view('template/footer');
	}
    public function dview()
	{
		$data['arr']=$this->Cimodel->ciview();
		$this->load->view("template/head");
        $this->load->view("template/view",$data);
		$this->load->view('template/footer');
	}
    public function dupdate()
	{
		if(isset($_POST['godata']))
		{
			$data['uname']=$this->input->post('uname');
			$data['uemail']=$this->input->post('uemail');
			$data['upass']=$this->input->post('upass');
			$data['ucity']=$this->input->post('ucity');
			$data['ucourse']=$this->input->post('ucourse');
			$this->Cimodel->ciupdate($data);
		}
		$this->load->view("template/head");
		if(@$_GET['action']=='update')
		{
			$uuid=$_GET['uuid'];

			$data['arr']=$this->Cimodel->ciview($uuid);
			$this->load->view('template/edit',$data);
		}
		else
		{
			$data['arr']=$this->Cimodel->ciview();
        	$this->load->view("template/update",$data);
		}
		$this->load->view('template/footer');
		
	}
    public function ddelete()
	{
		if(@$_GET['action']=='delete')
		{
			$did=$_GET['did'];
			$this->Cimodel->cidelete($did);

			
		}
		$data['arr']=$this->Cimodel->ciview();
		$this->load->view("template/head");
        $this->load->view("template/delete",$data);
		$this->load->view('template/footer');
	}
}
