<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {
    public function index()
	{
        $this->load->view('head');
		$this->load->view('blog');
        $this->load->view('footer');
	}
    public function about()
    {
        $this->load->view('head');
        $this->load->view('about');
        $this->load->view('footer');
    }
    public function register()
    {
        // echo 'This is about page';
        $this->load->view('register');
    }
    public function login()
    {
        // echo 'This is about page';
        $this->load->view('login');
        echo '<pre>';
        print_r($_POST);
        echo '</pre>';
    }
    public function demo($data="tab")
    {
        if($data=='html')
        {
            echo "This is $data";
            

        }
        else if($data=='css')
        {
            echo "This is $data";
        }
        else
        {
            echo "No Record Found";
        }
        
        // $this->load->view('login');
    }
    public function help()
    {
        $this->load->helper('demo');
        demo("Ducat");
       
        
    }
    public function lib()
    {
        $this->load->library('ducat');
        $this->ducat->test2();
        $this->ducat->test3();
        $this->ducat->test1();                   
    }
    
    



}
?>
