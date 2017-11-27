<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Discussions extends CI_Controller {

	
	public function index(){
			
		
		
		$data['title'] = "FCSIT NB Forum";
		$data['list_dis'] = $this->Discussion_model->list_dis();
		$data['list_NB'] = $this->Discussion_model->list_NB();

			/*var_dump($data['list_dis']);
				die();*/

		$data['main_content'] = "forum/home";
		
		$this->load->view("forum/layout/main", $data);
		
		
	}




	public function dis_details(){
		$id = $this->uri->segment('3');

		/*echo $id;
		die();*/
		
		$data['title'] = 'Discussion destails';
		$data['details'] = $this->Discussion_model->dis_details($id);
		$data['list_NB'] = $this->Discussion_model->list_NB();
		$data['replies'] = $this->Discussion_model->list_replies($id);	



		/*echo var_dump($data['ds_detail']);
		die();*/

		$data['main_content'] = 'forum/details';
		
		
		
		//$data['details'] = $this->Discussion_model->details($id);
		
		//$data['replys'] = $this->Discussion_model->get_reply($id);
		
		
	    //var_dump($data);
		//die();
		
		
		
		$this->load->view('forum/layout/main', $data);
		
		
		
		
		
		}
	
	
	public function create(){
		
		if(!$this->session->userdata('logged_in')){
				redirect('user/login');
			}
		
		 
		 
		 if(isset($_POST['create'])){
			 
			 $this->form_validation->set_rules('title', 'Title', 'trim|required|min_length[5]');
			 $this->form_validation->set_rules('category', 'Category', 'required');
			 $this->form_validation->set_rules('body', 'Body', 'trim|required|min_length[5]');
			 
			/* echo $this->session->userdata('user_id');
			 die();*/

			 
			 if($this->form_validation->run() == true){
		 
				 
				 $data = array(
				 		'user_id' => $this->session->userdata('user_id'),
				 		'ds_title'  => $this->input->post('title'),
						'ds_category'  => $this->input->post('category'),
						'ds_body'     => $this->input->post('body')
						
						
				 	);
/*
					echo var_dump($data);
					die();*/
					
					
					
					$create = $this->Discussion_model->create($data);
					
					if($create){
						redirect('discussions');
						}
						
				 
				 }else{
					/* echo "Not Here 02";
					 die();*/
					 
				 $data['title'] = 'create  a Discussion';
				 $data['main_content'] = 'forum/create';
				 $data['list_NB'] = $this->Discussion_model->list_NB();
				 
				 $this->load->view('forum/layout/main', $data);
					 
					 
					 }
			 
			 
			 }else{
				 
				 $data['title'] = 'create  a Discussion';
				 $data['main_content'] = 'forum/create';
				 $data['list_NB'] = $this->Discussion_model->list_NB();
				 $this->load->view('forum/layout/main', $data);
				 
				 }
		
		
		}
	
	public function comment(){
		
		if(!$this->session->userdata('logged_in')){
				redirect('user/login');
			}

		
		if(isset($_POST['reply'])){
	  
	  //setting validation rules
	  $this->form_validation->set_rules('comment', 'Comment', 'trim|min_length[3]|Required');
	
		if($this->form_validation->run() == true){
			
			$data = array(
					 'ds_id'   => $this->input->post('ds_id'),
					 'ds_title'	=> $this->input->post('ds_title'),
					 'comment' => $this->input->post('comment'),
					 'user_id' => $this->input->post('user_id')
					 
				
						);

			/*echo var_dump($data);
			die();*/

				

						
				$reply = $this->Discussion_model->ds_reply($data);
				
				if($reply){
					
					redirect('discussions');
					
					}		
			}else{
				redirect('discussions');
				
				}
	
	
			}
		
		}
	


	
}
