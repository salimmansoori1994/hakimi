<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Card extends MX_Controller {


			  function __construct() {
			  parent::__construct();
			  if(!$this->session->userdata('user_key') && $this->session->userdata('user_type') != "admin" ){
					  redirect(base_url('Admin'), 'refresh');
		
	       }
			  }

 
 


				public function index()
				{
			
				}

				public function new_card()
				{				
				
				
				 // if(!empty($_FILES['video_data']['name'])){ 
            // $config['upload_path'] =APPPATH.'../assets/semtech_videos/'; 
            // $config['allowed_types'] = '*';
            // $config['file_name'] = 'video_data_'.$video_type.time();
            // $config['overwrite'] = false;
             // $this->load->library('upload', $config);
            // $this->upload->initialize($config);
            // if(!($this->upload->do_upload("video_data"))){
    // echo 		$data['error']['video_data'] = $this->upload->display_errors();
	// die;
            // }else{
            // $team1_image_img = $this->upload->data(); 
               // $video_data =$team1_image_img['file_name'];
               // $_POST['video_data']=$video_data;
            // }
            // }
				
					$data['view_data']['bredcarm_head']='Dashboard/Create Card';
					$data['view_data']['page']='New_card';
					$data['view_data']['sub_page']='';
					$data['view_data']['datatable']='datatable';
					$data['view_page']='Admin/new_card';
					$this->load->view('comman_data/view_template',$data);
				}




				
				public function add_new(){
				$id = 	$this->Common_model->insert_data('course',$_POST);
				
				echo  json_encode(array('status'=>true,"mass"=>"The course has been added.","url"=>'reload',"mass_id"=>'#massage'));
				}




}

?>