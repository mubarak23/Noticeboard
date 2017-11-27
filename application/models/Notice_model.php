<?php

 Class Notice_model extends CI_model{
	 
	 //load the Noticeboard listing 
	 public function list_notice(){
		 $this->db->select('*', 'status');
		 $this->db->from('noticeboard');
		 $this->db->join('status', 'noticeboard.status_id = status.status_id');
		 
		 $query = $this->db->get();
		 return $query->result_array();
		 
		 }
	 
	 
	 
	 //registering user data to the DB
	 
	   public function post_notice($data){
		   
		   $insert = $this->db->insert('noticeboard', $data);
		   
		   if($insert){
			   return true;
			   }else{
				   return false;
				   
				   }
		   
		 
		   
		   }
		   
		   
		   
		 //pulling the details of the notice post
		 public function notice_details($id){
			 $this->db->select('*');
			 $this->db->from('noticeboard');
			 $this->db->where('notice_id', $id);
			 
			 $query = $this->db->get();
			 return $query->row();
			 
			 
			 }  
		   
 }
 
 
 
 ?>
 