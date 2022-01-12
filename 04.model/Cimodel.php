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
