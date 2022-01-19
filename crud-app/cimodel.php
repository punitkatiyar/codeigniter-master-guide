<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cimodel extends CI_Model {
	public function ciinsert($data)
	{
        $this->db->insert('user',$data);

	}
    public function ciview()
	{
        $query=$this->db->get('user');
        $res=$query->result_array($query);
        return $res;

	}
    public function ciupdate()
	{

	}
    public function cidelete()
	{

	}
}
?>
