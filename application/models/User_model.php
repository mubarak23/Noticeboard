<?php
// codes created by : Mubbarak Aminu 
// date : 12 Augest 2017

	Class User_model extends CI_model{
		
		
		public function record_count(){
					return $this->db->count_all('users');
			}
		
		public function register($data){
			$insert = $this->db->insert('users', $data);
			
			if($insert){
				return true;
				}else{
					return false;
					}
			}
			
			
			public function login($reg_no, $password){
				$this->db->select('*');
				$this->db->from('users');
				$this->db->where('reg_no', $reg_no);
				$this->db->where('password', $password);
				$this->db->limit('1');
				
				$query = $this->db->get();
				
				if($query->num_rows() == 1){
					return $query->row()->user_id;
					}else{
						return false;
						}
				
				}
				
				public function user_data($id){
					$this->db->select('*');
					$this->db->from('discussions');
					$this->db->where('user_id', $id);
					
					$query = $this->db->get();
					
					return $query->result_array();
					}
				
			
					
					//getting the username of a perticular id
					public function profile($id){
						$this->db->select('*');
						$this->db->from('users');
						$this->db->where('user_id', $id);
						
						$query = $this->db->get();
						return $query->row();
						}
						
						
				public function user_update($id, $data){
					$this->db->where('user_id', $id);
					$this->db->update('users', $data);
					}		
						
		
		
		}







?>