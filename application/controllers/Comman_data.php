<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comman_data extends CI_Controller {

	function __construct() {
		parent::__construct();
		if(!$this->session->userdata('user_key') ){
				redirect(base_url('Admin'), 'refresh');
	 }
		}

/******************************************* ******************************************************************/

	function active_inactive_user(){ 
		   $status_user = $this->input->post('status_user');
		   $text = $this->input->post('text');
		   $table = $this->input->post('table');
		   $update_by_feild = $this->input->post('update_by_feild');
		   $update_feild = $this->input->post('update_feild');
		   $responce_text = $this->input->post('responce_text');
		    
		   $user_id = $this->input->post('user_id');
		   if($status_user == 'delete_permanet'){
			   $this->Common_model->delete_data($table,array($update_by_feild=>$user_id));
		   }else{
			   $this->Common_model->update_data($table,array($update_by_feild=>$user_id),array($update_feild=>$status_user));
		   }
		    
            echo json_encode(array("status"=>true,"mass"=>$responce_text));
	   }

}
?>