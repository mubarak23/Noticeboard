<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
	public function index(){
		if(!$this->session->userdata('logged_in')){
			redirect('admin/login');
			}
		
		$data['Title'] = 'Welcome to the Admin Control Panel of Notice';
		$data['notices'] = $this->Admin_model->index_notice();

		$data['discussion'] = $this->Admin_model->summary_dis();

		$data['Users'] = $this->Admin_model->Summary_users();
		
		
		$data['main_content'] = 'admin/Dashboard';
		
		$this->load->view('admin/layout/main',  $data);
	}
	
	
	//method for creating notice
	public function post_notice(){
		
			if(!$this->session->userdata('logged_in')){
			redirect('admin/login');
			}
		
			
			if(isset($_POST['post'])){
				
				//valiadting post data 
				$this->form_validation->set_rules('notice_title', 'Notice Title', 'Required|trim|min_length[3]');
				$this->form_validation->set_rules('notice_from', 'Notice From', 'Required|min_lenght[3]|trim');
				$this->form_validation->set_rules('notice_to', 'Notice To ', 'Required|minLenght[3]|trim');
				$this->form_validation->set_rules('status', 'Select Status', 'Required');
				$this->form_validation->set_rules('notice_details', 'Notice Details', 'Required|min_length[3]|trim');
				
				//running the validation 
				if($this->form_validation->run() == false){
					
					$data = array(
							'user_id'       => $this->input->post('user_id'),
							'status_id'     => $this->input->post('status'),
							'notice_title'  => $this->input->post('notice_title'),
							'notice_from'   => $this->input->post('notice_from'),
							'notice_to'		=> $this->input->post('notice_to'),
							'notice_details' => $this->input->post('notice_details')
							
							);
							
							
						//running the model method that save the data into the DB
						
						$post_notice = $this->Admin_model->post_notice($data);
						
						if($post_notice){
							redirect('admin/index');
							}	
							
					}else{
						/*
						$data['title'] = 'Post A Notice';
					$data['main_content'] = 'admin/post_notice';*/
					
					echo "Something is Wrong Some where";
					die();
					
					//rendering view file
					$this->load->view('admin/layout/main', $data);
					
						
						
						}
				
				
				
				}else{
					$data['title'] = 'Post A Notice';
					$data['main_content'] = 'admin/post_notice';
					
					//rendering view file
					$this->load->view('admin/layout/main', $data);
					
					}
		
		
		}
	
	
	public function add_admin(){
			if(!$this->session->userdata('logged_in')){
			redirect('admin/login');
			}
		
	if(isset($_POST['register'])){
		
			/*echo "GOOD HERE";
				die();*/


		//validtating user input from the registration page
			$this->form_validation->set_rules('admin_username', 'Admin username','trim|required|min_length[3]');
			
			$this->form_validation->set_rules('admin_email', 'Admin Email','trim|required|valid_email');
			
			$this->form_validation->set_rules('admin_password', 'Admin Password','trim|required|min_length[5]|max_length[50]');
			
			$this->form_validation->set_rules('password2', ' Confirm Password','trim|required|matches[password]');
			
			 if($this->form_validation->run() == false){
			 		
				
				
				
					$data = array(
					    'admin_username'  => $this->input->post('admin_username'),
						'admin_password'  => $this->input->post('admin_password'),
						'admin_email' => $this->input->post('admin_email'),
						'admin_prev'	=> '1'
						
							 
							 );
							
							 
							 
						$register_user = $this->Admin_model->register_admin($data);
						
						if($register_user){
							
							redirect('admin');
							}
								
				
				
				}else{

					
					 
					$data['title'] = 'User registration';
					$data['main_content'] = 'admin/add_admin';
					
					$this->load->view('admin/layout/main', $data);
					
					
					
					}
		
		
		}else{
			
			$data['title'] = 'User registration';
					$data['main_content'] = 'admin/add_admin';
					
					$this->load->view('admin/layout/main', $data);
			
			}
		
	}	
		
		public function login(){
		
		//checking if a user click on the login button
		if(isset($_POST['login'])){
			
			$this->form_validation->set_rules('username', 'Username', 'required|min_length[2]|trim');
			$this->form_validation->set_rules('password', 'Password', 'required');
			
			
						
			if($this->form_validation->run() == false){
				
				
			$data['title'] = "Login Page here";
			
			$this->load->view('Admin/login');
				
				
				}else{
					
				
					$username = $this->input->post('username');
				$password = $this->input->post('password');
				
			
				
				$admin_id = $this->Admin_model->login($username, $password);
				
				if($admin_id){
					$data = array(
						'admin_id' => $admin_id,
						'logged_in' => true,
						'username' => $username
							);
							
					// setting the globsl session data		
					$this->session->set_userdata($data);
					
					
					
					//welcome message for every logged in user
					$this->session->set_flashdata('Logged_in', 'You  are Logged in');
					
				
					redirect('admin/index');	
					
					}else{

					$this->session->set_flashdata('Failed', 'You  are Logged in');


				
					$data['title'] = "Login Page here";
			
					$this->load->view('Admin/login');



					}
					
					
					}
			
			
			
			}else{
				
			$data['title'] = "Login Page here";
			
			$this->load->view('Admin/login');

			
				
				}
		
		
		}
				
		 
		
		
		//logout method
		public function logout(){
			// unsetting all user data
			$this->session->unset_userdata('$user_id');
			$this->session->unset_userdata('username');
			$this->session->unset_userdata('logged_in');
			
			//set a success message for logout
			$this->session->flashdata('Success', 'Youe are Logout');
			redirect('admin/login');
			
			
			}
			
			
		//admin notice edit function
		public function notice_edit(){
			if(!$this->session->userdata('logged_in')){
			redirect('admin/login');
			}
			$id = $this->uri->segment(3);
			
			if(isset($_POST['edit_notice'])){
				
				$id = $this->uri->segment('3');
				
				//valiadting post data 
				$this->form_validation->set_rules('notice_title', 'Notice Title', 'Required|trim|min_length[3]');
				$this->form_validation->set_rules('notice_from', 'Notice From', 'Required|min_lenght[3]|trim');
				$this->form_validation->set_rules('notice_to', 'Notice To ', 'Required|minLenght[3]|trim');
				$this->form_validation->set_rules('status', 'Select Status', 'Required');
				$this->form_validation->set_rules('notice_details', 'Notice Details', 'Required|min_length[3]|trim');
				
				
				
				//running the validation 
				if($this->form_validation->run() == false){
					
					$data = array(
							'user_id'       => $this->input->post('user_id'),
							'status_id'     => $this->input->post('status'),
							'notice_title'  => $this->input->post('notice_title'),
							'notice_from'   => $this->input->post('notice_from'),
							'notice_to'		=> $this->input->post('notice_to'),
							'notice_details' => $this->input->post('notice_details')
							
							);
							
							
						//running the model method that save the data into the DB
						
						$edit_notice = $this->Admin_model->update_notice($data);
						
						if($edit_notice){
							redirect('admin/index');
							}	
							
					}else{
						
						$data['title'] = 'Post A Notice';
					$data['main_content'] = 'admin/post_notice';
					
					// echo "Something is Wrong Some where";
					// die();
					
					//rendering view file
					$this->load->view('admin/layout/main', $data);
					
						
						
						}
				
				
				
				
				/*echo $id;
				echo "<br/>";
				echo "There is something wrong with the url routing";
				die();*/
			
				
				}else{
					$id = $this->uri->segment(3);
					
					$data['Title'] = 'Edit Page of noticebaord in the admin Backend';
					$data['main_content'] = 'admin/notice_edit'; 
					
					//pulling edit data from the database
					$data['notice_edit'] = $this->Admin_model->notice_edit($id);
					
					//loading the view file
					$this->load->view('admin/layout/main', $data);
				 }
			/*$id = $this->uri->segment('3');
			echo $id;
			die();
			*/
			}
			
		//admin delete function
		public function notice_delete(){
			if(!$this->session->userdata('logged_in')){
			redirect('admin/login');
			}
	
			$id = $this->uri->segment('3');
			$data['title'] = "Delete Notice Method";
			
			$this->Admin_model->notice_delete($id);
			redirect('admin');
			
			}		
	
	
	

		public function all_dis(){

			$data['title'] = 'view All Discussion';

			$data['all_dis'] = $this->Admin_model->all_dis();

			$data['main_content'] = 'Admin/all_dis';

			$this->load->view('admin/layout/main', $data);

		}



		public function add_user(){
		
		
		if(isset($_POST['register'])){
		
		//validtating user input from the registration page
			$this->form_validation->set_rules('first_name', 'name','trim|required|min_length[3]');

			$this->form_validation->set_rules('last_name', 'Last name', 'trim|trim|min_length[3]');
			
			$this->form_validation->set_rules('email', ' Email','trim|required|valid_email');
			
			$this->form_validation->set_rules('username', 'Username','trim|required|min_length[3]|max_length[20]');
			
			$this->form_validation->set_rules('reg_no', 'Registration Number','trim|required|min_length[3]|max_length[20]');
			
			$this->form_validation->set_rules('password', 'Password','trim|required|min_length[5]|max_length[50]');
			
			$this->form_validation->set_rules('password2', ' Confirm Password','trim|required|matches[password]');
			
			
			 if($this->form_validation->run() == true){
				 
				 
				/* 	if(! $this->upload->do_upload('avatar')){
						$error = $this->upload->display_errors();
						
						$this->load->view('register', $error);
						
						}else{
							
				$upload = $this->input->post('avatar');			
				$data = array('upload_data' => $this->upload->data());
				
							}*/
		
				
					$data = array(
					    'first_name'  => $this->input->post('first_name'),
					    'last_name'		=> $this->input->post('last_name'),
						'email' => $this->input->post('email'),
						'username' => $this->input->post('username'),
						'reg_no'	=> $this->input->post('reg_no'),	
						'password'  => $this->input->post('password')
						/*'user_img'	 => $this->upload->data('file_name')	
							 */
							 );
							/* var_dump($data);
							 die();*/
							/* wrong logic statement but it work anyway, 
							 coming back on a late day
							 */
							 
						$register = $this->User_model->register($data);
						
						if($register){
							
							redirect('Discussions');
							}
								
				
				
				}else{
					 
					$data['title'] = 'Create An Account';
					$data['main_content'] = 'admin/add_user';
					//$data['list_NB'] = $this->Discussion_model->list_NB();
				
				$this->load->view('admin/layout/main', $data);
				
					
					
					
					}
		
		
		}else{
			
			$data['title'] = ' noticebaord forum Registration';
		    $data['main_content'] = "admin/add_user";
		   // $data['list_NB'] = $this->Discussion_model->list_NB();
		
		
		   $this->load->view('admin/layout/main', $data);
			
			
			}
		
	}
	


		public function all_users(){

			$data['title'] = 'view All Discussion';

			$data['all_users'] = $this->Admin_model->all_users();

			$data['main_content'] = 'Admin/all_users';

			$this->load->view('admin/layout/main', $data);

		}



		public function all_notice(){

			$data['title'] = 'view All Discussion';

			$data['all_notices'] = $this->Admin_model->all_notice();

			$data['main_content'] = 'Admin/all_notice';

			$this->load->view('admin/layout/main', $data);

		}


		public function all_reply(){

				$data['title'] = 'this is all reply on the NB FORUM';

				$data['all_reply'] = $this->Admin_model->all_reply();

				$data['main_content']	= 'Admin/all_reply';

				$this->load->view('admin/layout/main', $data);
		}



	
	
		
		
}
