public function index()
	{
		$this->load->model('Cimodel');
		$data['arr']=$this->Cimodel->index();
		//$data['key']=array(10,20,30,40);
		//echo "<pre>";
		//print_r($data);
		//echo "</pre>";
		//echo "<h1>".$data['key'][0]."</h1>";
		//extract($data);
		//print_r($key);
		//echo $data['arr'][0];
		$this->load->view('blog/blog',$data);
	}
