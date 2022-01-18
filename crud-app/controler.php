<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller {
	public function index()
	{
        $this->load->view("template/head");
        $this->load->view('ciapp');
		$this->load->view('template/footer');
	}
    public function dinsert()
	{
		$this->load->view("template/head");
        $this->load->view('template/insert');
		$this->load->view('template/footer');
	}
    public function dview()
	{
		$this->load->view("template/head");
        $this->load->view("template/view");
		$this->load->view('template/footer');
	}
    public function dupdate()
	{
		$this->load->view("template/head");
        $this->load->view("template/update");
		$this->load->view('template/footer');
	}
    public function ddelete()
	{
		$this->load->view("template/head");
        $this->load->view("template/delete");
		$this->load->view('template/footer');
	}
}
