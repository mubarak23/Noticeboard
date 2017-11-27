<?php

 Class Admin_model extends CI_model{
	 
	 //load the dashboard details
	 
	 public function index_notice(){
		 	 $this->db->select('noticeboard.*', 'status*');
		 	$this->db->from('noticeboard');
		 	$this->db->join('status', 'noticeboard.status_id = status.status_id');
		 	$this->db->limit('5');
		 
		 $query = $this->db->get();
		 return $query->result_array();
		 //return array if two or more table are join
		 }
	 
	 
	 //registering user data to the DB
	 
	   public function register_user($data){
		   
		   $insert = $this->db->insert('users', $data);
		   
		   if($insert){
			   return true;
			   }else{
				   return false;
				   
				   }
		   
		 
		   
		   }


		     public function register_admin($data){
		   
		   $insert = $this->db->insert('admin', $data);
		   
		   if($insert){
			   return true;
			   }else{
				   return false;
				   
				   }
		   
		 
		   
		   }
		   
		   
		   
		  //login Model method 
		  public function login($username, $password){
				$this->db->select('*');
				$this->db->from('admin');
				$this->db->where('admin_username', $username);
				$this->db->where('admin_password', $password);
				$this->db->limit('1');
				
				$query = $this->db->get();
				
				if($query->num_rows() == 1){
					return $query->row()->admin_id;
					}else{
						return false;
						}
				
				} 
				
				//admin post noitce
				  public function post_notice($data){
		   
		   $insert = $this->db->insert('noticeboard', $data);
		   
		   if($insert){
			   return true;
			   }else{
				   return false;
				   
				   }
		   
		 
		   
		   }
				
	  public function notice_edit($id){
			 $this->db->select('*');
			 $this->db->where('notice_id', $id);
			 $this->db->from('noticeboard');
			 
			
			 $query = $this->db->get();
			 return $query->row();
			
			
			// if row is return user $name->table field name
			
			// if array is return user $name[table field name] as the view output
			 
			 
			 }			
			 
			//update the details
			public function update_notice($data){
				$update = $this->db->update('noticeboard', $data);
				
				   if($update){
			   return true;
			   }else{
				   return false;
				   
				   }
				
				} 
			 
	public function notice_delete($id){
		$this->db->where('notice_id', $id);
		$this->db->delete('noticeboard');
		
		}	 



	 public function summary_dis(){
		 	$this->db->select('*', 'users');
			$this->db->from('discussions');
			$this->db->join('users', 'discussions.user_id = users.user_id');
			$this->db->order_by('ds_title', 'ASC');
			$this->db->limit(5);
			
			$query = $this->db->get();
			
			return $query->result_array();
			
		 }


	 public function all_dis(){
		 	$this->db->select('*', 'users');
			$this->db->from('discussions');
			$this->db->join('users', 'discussions.user_id = users.user_id');
			$this->db->order_by('ds_title', 'ASC');
			
			$query = $this->db->get();
			
			return $query->result_array();
			
		 }


	public function all_users(){
			$this->db->select('*');
			$this->db->from('users');

			
			$query = $this->db->get();
			
			return $query->result_array();

		}	 


public function summary_users(){
			$this->db->select('*');
			$this->db->from('users');
			$this->db->limit('5');

			
			$query = $this->db->get();
			
			return $query->result_array();

		}	 



	
	public function all_notice(){
			$this->db->select('*');
			$this->db->from('noticeboard');

			
			$query = $this->db->get();
			
			return $query->result_array();

		}	 


	public function all_reply(){

		$this->db->select('*');
		$this->db->from('replies');

		$query = $this->db->get();
			
		return $query->result_array();



	}	
	


	 
	 
	 
	 }