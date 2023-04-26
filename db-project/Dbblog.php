<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dbblog extends CI_Model{
    public function index($opp=NULL)
    {
        if($opp==NULL){
            return $data=array("title"=>"Blog Project","msg"=>"This is sample message data");
        }
        else if($opp=='page'){
            return $data=array("title"=>"Blog Page","msg"=>"This is sample message data");
        }
        else if($opp=='post'){
            return $data=array("title"=>"Blog Post","msg"=>"This is sample message data");
        }
    }
    public function insert($data)
    {
        $this->db->insert("demo",$data); 
    }
    public function view($data=NULL)
    {
        if($data==NULL)
        {
            $query=$this->db->get("demo");
            $res=$query->result_array($query);
            return $res;
        }
        else
        {
            $this->db->where('id',$data);
            $query=$this->db->get("demo");
            $res=$query->result_array($query);
            return $res;

        }
    }
    public function uupdate($data)
    {
        $this->db->where('id',$data['id']);
         $this->db->update('demo',$data);
    }

    public function udelete($data)
    {
        $this->db->where('id',$data);
         $this->db->delete('demo');
    }




}
?>