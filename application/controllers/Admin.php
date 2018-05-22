<?php 
	class Admin extends CI_Controller{
		public function index(){
			$data['content']='admin/dashboard';
			$this->load->view('admin/index',$data);
		}
	}
 ?>