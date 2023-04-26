<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Blog extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Dbblog');
    }
    public function index($p="")
    {
        switch($p){
            case 'insert':
                echo "<h1>This is insert page</h1>";
                break;
            case 'view':
                echo "<h1>This is View page</h1>";
                break;
            case 'update':
                echo "<h1>This is update page</h1>";
                break;
            case 'delete':
                echo "<h1>This is delete page</h1>";
                break;
            default :
                $d=$this->Dbblog->index();
                $this->load->view('blogApp/head',$d);
                $this->load->view('blogApp/banner');
                $this->load->view('blog_home');
                $this->load->view('blogApp/footer');       
        }
        // load the view
        // passing the data to view
        // load the model
        // load the method
        
        //$d=$this->Dbblog->index();
        //$this->load->view('blogApp/head',$d);
        //$this->load->view('blogApp/banner');
        //$this->load->view('blog_home');
        //$this->load->view('blogApp/footer');
    }
    public function post()
    {
       
        $d=$this->Dbblog->index("post");
       
        $this->load->view('blogApp/head',$d);
        $this->load->view('blog_home');
        $this->load->view('blogApp/footer');
    }
    public function page()
    {
       
        $d=$this->Dbblog->index('page');
        
        $this->load->view('blogApp/head',$d);
        $this->load->view('blog_home');
        $this->load->view('blogApp/footer');
    }

    public function calculater()
    {
        //print_r($_POST);
        //echo @$_POST['num1'];
        //$num1=$_POST['num1'];
        //extrcat($_POST);
        if(isset($_POST['add']))
        {
            $d['num1']=$this->input->post('num1');
            $d['num2']=$this->input->post('num2');
            $d['res']=$d['num1']+$d['num2'];
            $this->load->view('calc',$d);
        }
        else{
            $this->load->view('calc');

        }
        
        //echo "<h1>calculater</h1>";
    }

    public function insert()
    {
        if(isset($_POST['reg']))
        {
             $d['name']=$this->input->post('name');
             $d['email']=$this->input->post('email');
             $d['password']=$this->input->post('password');
             $this->Dbblog->insert($d);
        }
            $d=$this->Dbblog->index();
            $this->load->view('blogApp/head',$d);
            $this->load->view('user_insert');
            $this->load->view('blogApp/footer'); 

    }
    public function uview()
    {
        $d=$this->Dbblog->index();
        $data['arr']=$this->Dbblog->view();
        $this->load->view('blogApp/head',$d);
        $this->load->view('user_view',$data);
        $this->load->view('blogApp/footer');
    }
    public function uupdate()
    {
        if(isset($_POST['update']))
        {
             $d['id']=$this->input->post('id');
             $d['name']=$this->input->post('name');
             $d['email']=$this->input->post('email');
             $d['password']=$this->input->post('password');
             $this->Dbblog->uupdate($d);
        }
        
        if(@$_GET['action']=='edit')
        {
            $uuid=$_GET['id'];

            $d=$this->Dbblog->index();
            $data['arr']=$this->Dbblog->view($uuid);
            $this->load->view('blogApp/head',$d);
            $this->load->view('edit',$data);
            $this->load->view('blogApp/footer');
        }
        else{
            $d=$this->Dbblog->index();
        $data['arr']=$this->Dbblog->view();
        $this->load->view('blogApp/head',$d);
        $this->load->view('user_update',$data);
        $this->load->view('blogApp/footer');
        }



    }
    public function delete()
    {
         $d=$this->Dbblog->index();
         $data['arr']=$this->Dbblog->view();
        $this->load->view('blogApp/head',$d);
        $this->load->view('user_delete',$data);
        $this->load->view('blogApp/footer');

    }






}

?>