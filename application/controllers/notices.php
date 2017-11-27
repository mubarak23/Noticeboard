<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Notices extends CI_Controller {

	
	public function index(){
		
		$data['Title'] =  'Welcome Fcsit Online Notice Board';
		$data['notices'] = $this->Notice_model->list_notice();
		
		
		
		$data['main_content'] = 'notices/notices';
		
		
		
		
		
		//loading the view file of the  default front page
		
		$this->load->view('notices/layout/main', $data);
		
		
		
		
		
	}
	
	public function notice_details(){
		$id = $this->uri->segment('3');
		
		$data['title'] = 'NoticeBoard Main Details';
		
		$data['main_content'] = 'notices/notice_details';
		
		$data['details'] = $this->Notice_model->notice_details($id);
		
		
		$this->load->view('notices/layout/main', $data);
		
		
		}
}
