public function insertdata($data)
        {
                print_r($data);
                $this->db->insert('user',$data);
                echo "Record insert";
                                
        }
        public function getdata()
        {
                //$query=$this->get('user');
                $query=$this->db->get('user');
                $res=$query->result_array();
                return $res;
        }
        
