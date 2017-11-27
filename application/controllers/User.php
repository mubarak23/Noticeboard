<?php
// codes created by : Mubbarak Aminu 
// date : 23 November 2017


defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {

	
	
	public function register(){
		
		//loading the file uplad config setting
	/*	$config['upload_path'] = APPPATH . 'upload';
		$config['allowed_types'] = 'jpeg|jpg|gif|png';
		$config['max_size'] = '1024';
		
		//loading the puload library
		$this->load->library('upload');
		$this->upload->initialize($config);*/
		
		
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
				$data['main_content'] = 'forum/register';
				$data['list_NB'] = $this->Discussion_model->list_NB();
				
				$this->load->view('forum/layout/main', $data);
				
					
					
					
					}
		
		
		}else{
			
			$data['title'] = ' LetTalk Registration';
		    $data['main_content'] = "forum/register";
		    $data['list_NB'] = $this->Discussion_model->list_NB();
		
		
		   $this->load->view('forum/layout/main', $data);
			
			
			}
		
	}
	
	
	
	
	public function login(){
		
		//checking if a user click on the login button
		if(isset($_POST['login'])){


			
			$this->form_validation->set_rules('reg_no', 'Registration Number', 'required|min_length[2]|trim');
			$this->form_validation->set_rules('password', 'Password', 'required');
			
			/*echo "Everything is working fine";
			die();*/
						
			if($this->form_validation->run() == true){
				
				$reg_no = $this->input->post('reg_no');
				$password = $this->input->post('password');

				/*echo $reg_no;
				echo '<br/>';
				echo $password;
				echo '<br/>';
				die();*/
				
				
				
				
				$user_id = $this->User_model->login($reg_no, $password);

				/*echo $user_id;

				die();*/
				
				if($user_id){
					$data = array(
						'user_id' => $user_id,
						'logged_in' => true,
						'username' => $username
							);
							
					// setting the globsl session data		
					$this->session->set_userdata($data);
					
					//welcome message for every logged in user
					$this->session->set_flashdata('Logged_in', 'You  are Logged in');
					
					/*echo "Everything is working fine at this point";
					die();*/	
					
					redirect(Discussions);	
					
					}else{


					//welcome message for every logged in user
					$this->session->set_flashdata('Failed', 'Wrong Username And Password');

						$dta['title'] = "Wrong login details";
						$data['main_content'] = 'forum/login';
						$data['list_NB'] = $this->Discussion_model->list_NB();

						$this->load->view('forum/layout/main', $data);

					}
					
				
				
				}
			
			
			
			}else{
				
			$data['title'] = "Login Page here";
			$data['main_content'] = 'forum/login';
			$data['list_NB'] = $this->Discussion_model->list_NB();
			
			$this->load->view('forum/layout/main', $data);

			
				
				}
		
		
		}
		
		
		public function logout(){
			// unsetting all user data
			$this->session->unset_userdata('$user_id');
			$this->session->unset_userdata('username');
			$this->session->unset_userdata('logged_in');
			
			//set a success message for logout
			$this->session->flashdata('Success', 'Youe are Logout');
			redirect('discussion');
			
			
			}
			
			public function profile(){
				
			$id = $this->uri->segment(3);
				
			$data['title'] = "Login Page here";
			$data['main_content'] = 'forum/user_profile';
			
			//rendering the user details
			$data['profile'] = $this->User_model->profile($id);
			$data['user_details'] = $this->User_model->user_data($id); 

			/*echo var_dump($data['profile']);
			die;*/
			
			$this->load->view('forum/layout/main', $data);


				}
	
	public function edit_profile(){
		if(!$this->session->userdata('logged_in')){
				redirect('user/login');
				}
		$id = $this->uri->segment(3);
		
		
		if(isset($_POST['edit'])){
			
		$this->form_validation->set_rules('name', 'Name', 'required|trim');
		$this->form_validation->set_rules('email', 'Email', 'Required|trim');
		$this->form_validation->set_rules('username', 'Username', 'Required|trim');
		$this->form_validation->set_rules('aboutme', 'About Me', 'Required|trim|min_length[5]');
		
			//running the validation
			if($this->form_validation->run() == false){
				echo "Erro has Occurs";
				
				
				}else{
					
					$data = array(
					'full_name' => $this->input->post('full_name'),
					'email'		=> $this->input->post('email'),
					'user_name' => $this->input->post('username'),
					'about_me'  => $this->input->post('aboutme')
 					
							);
							print_r($data);
							die();
						$user_update = $this->User_model->user_update($id, $data);
						
						if($user_update){
							echo "Good BOY";
							Die();
							}	
				
					
					}
			

			}else{
				
		$data['Title'] = "This is the edit form";
		$data['main_content'] = 'edit_profile';
		
		
		//loading the profile page
		$data['edit_profile'] = $this->User_model->profile($id);
		
		$this->load->view('layout/main', $data);
				
				}
		
		
		
		}



	
	
}
