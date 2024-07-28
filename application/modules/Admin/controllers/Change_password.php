<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Change_password extends MX_Controller {


    function __construct() {
        parent::__construct();
        if(!$this->session->userdata('user_key') || $this->session->userdata('user_type') != "admin" ){
                redirect(base_url('Admin'), 'refresh');
  
     }
        }

    function index(){
       // echo 'dd'; die;
        $data['view_data']['bredcarm_head']='Change password ';
				$data['view_data']['page']='change_password';
				$data['view_data']['sub_page']='change_password';
				$data['view_page']='Admin/change_password';
				$this->load->view('comman_data/view_template',$data);

    }

    function change_password_set(){
        $old_password = $this->input->post("old_password");
        $new_password = $this->input->post("new_password");
        $confirm_password = $this->input->post("confirm_password");

    $user_info=$this->Common_model->select_manuvl_value("password,username","users",array("users_id"=>$this->session->userdata('user_key'))); 
    
    if($this->encryption->decrypt($user_info[0]->password) == $old_password)
    {

        if($new_password == $confirm_password){
         //   echo $this->session->userdata('user_key'); die;
            $this->Common_model->update_data("users",array("users_id"=>$this->session->userdata('user_key')),array("password"=>$this->encryption->encrypt($new_password)));
            $status = true;
            $mass= "You Password has been changed successfully";
        }else{
            $status = false;
            $mass= "You  Passwords is not matching .Please Confirm it and try again.";
        }

       

    }else{
        $status = false;
        $mass= "You Old Password is not matching .Please Confirm it and try again.";
    }

   echo  json_encode(array('status'=>$status,"mass"=>$mass,"url"=>'reload',"mass_id"=>'#massage'));

    }




  

}
