public function register()
    {
        if(isset($_POST['preg']))
        {
        $data['uname']=$this->input->post('uname');
        $data['uemail']=$this->input->post('uemail');
        $data['upass']=$this->input->post('upass');
        $this->Blogdb->insertdata($data);
        }
        $user['data']=$this->Blogdb->getdata();

        $this->load->view('head');
        $this->load->view('boot/register',$user);
        $this->load->view('footer');
    }
    public function login()
    {
        if(isset($_POST['ulog']))
        {
        $data['uemail']=$this->input->post('uemail');
        $data['upass']=$this->input->post('upass');
        }
        $this->load->view('head');
        $this->load->view('login');
        $this->load->view('footer');
        
    }
