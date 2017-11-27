<?php
// codes created by : Mubbarak Aminu 
// date : 12 Augest 2017

 Class Discussion_model extends CI_model{
	 
	 
	 public function record_count(){
		 	return $this->db->count_all('discussions');
		 }
	
	 public function list_dis(){
		 	$this->db->select('*', 'users');
			$this->db->from('discussions');
			$this->db->join('users', 'discussions.user_id = users.user_id');
			$this->db->order_by('ds_title', 'ASC');
			
			$query = $this->db->get();
			
			return $query->result_array();
			
		 }


		 public function list_NB(){
		 	$this->db->select('*', 'users');
			$this->db->from('noticeboard');
			$this->db->join('users', 'noticeboard.user_id = users.user_id');
			$this->db->order_by('notice_title', 'ASC');
			$this->db->limit('4');
			
			$query = $this->db->get();
			
			return $query->result_array();
			
		 }


	 
	   public function create($data){
		   
		   $insert = $this->db->insert('discussions', $data);
		   
		   if($insert){
			   return true;
			   }else{
				   return false;
				   
				   }
		   
		 
		   
		   }
	 
	 
	   
		 public function dis_details($id){
		 	   $this->db->select('*', 'users');
			   $this->db->from('discussions');
			   $this->db->join('users', 'discussions.user_id = users.user_id');


			 // $this->db->select('*', 'users');
			 // $this->db->from('discussions');
			 // $this->db->join('users', 'discussions.user_id = users_user_id');
			  $this->db->where('ds_id', $id);

			
			 $query = $this->db->get();
			 return $query->row();
			
			
			// if row is return user $name->table field name
			
			// if array is return user $name[table field name] as the view output
			 
			 
			 }
			 
			public function ds_reply($data){
				 $reply = $this->db->insert('replies', $data);
				 if($reply){
					 return true;
					 }else{
						 return false;
						 }
				 } 


				 
		 public function list_replies($id){
					 $this->db->select('*', 'users');
					 $this->db->where('ds_id', $id);
					$this->db->join('Users', 'replies.user_id = users.user_id');
					 $this->db->from('replies');
					 
					 $query = $this->db->get();
					 return $query->result_array();
					 
					 } 
					 
    
	public function category($category){
			$this->db->select('*', 'users');
			$this->db->where('ds_category', $category);
			$this->db->from('Discussions');
			$this->db->join('Users', 'Discussions.user_id = users.user_id');
			
			$query = $this->db->get();
			
			return $query->result_array();
			
		
		
		}					 
	 
	 
	
	 
	 
	 }

?>