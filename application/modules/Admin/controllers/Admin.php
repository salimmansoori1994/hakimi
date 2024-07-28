<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends MX_Controller {



					function __construct() {
					parent::__construct();
					if($this->session->userdata('user_key')){
					if($this->session->userdata('user_type') == "admin"){
					redirect(base_url('Admin/Admin_dashboard'), 'refresh');
					}
				
					}  
					}
					
					
					public function Loginform(){   

					

						$username=$this->input->post('username');
						$password=$this->input->post('password_set');
						$login_id = $this->Login_model->login_valid('users', array('username' => $username,'password' =>$password));
						if($login_id){
						if($this->session->userdata('user_type') == "admin"){
						echo "admin";
						}
						}else{
						echo "error";
						}
			
						}

				public function index()
				{
				//	echo  $this->encryption->encrypt('12345') ; 
				$this->load->view('login');
				}

			

}