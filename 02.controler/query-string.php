public function crud()
	{
		if(isset($_GET['t']))
		{
			if($_GET['t']=='insert')
			{
				$data['arr']="Insert record";
				$this->load->view('crud/dbcrud',$data);
				
			}
			else
			{
				$data['arr']="View record";
				$this->load->view('crud/dbcrud',$data);
			}
		}
		else
		{
			$data['arr']="CRUD App";
			$this->load->view('crud/dbcrud',$data);

		}
	}
