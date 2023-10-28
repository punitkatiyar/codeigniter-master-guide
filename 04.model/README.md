# Define A Model

```
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cimodel extends CI_Model {
	public function index()
	{
        $data=array(101,202,303,404);
        //echo "This is CI Model";
        return $data;
    }
}
?>
```

## Call The Model

```
public function __construct()
    {
        parent::__construct();
        $this->load->model('Cimodel');

    }

{
	$data['arr']=$this->Cimodel->ciview();
}
```
