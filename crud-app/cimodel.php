<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cimodel extends CI_Model {
	public function ciinsert($data)
	{
        $this->db->insert('user',$data);

	}
    public function ciview($data=null)
	{
		if($data==null)
		{
        $query=$this->db->get('user');
        $res=$query->result_array($query);
        return $res;
		}
		else{
			$this->db->where('uid',$data);
			$query=$this->db->get('user');
        	$res=$query->result_array($query);
        	return $res;
		}
		

	}
    public function ciupdate()
	{
		$this->db->where('uid',$did);
		$this->db->delete('user',$data);

	}
    public function cidelete($did)
	{
		$this->db->where('uid',$did);
		$this->db->delete('user');
                            
		

	}
}
?>
