<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_dashboard extends MX_Controller {


			  function __construct() {
			  parent::__construct();
			  if(!$this->session->userdata('user_key') || $this->session->userdata('user_type') != "admin" ){
					  redirect(base_url('Admin'), 'refresh');
		
	       }
			  }
/******************************************* ******************************************************************/
				public function index()
				{
				$data['view_data']['bredcarm_head']='Dashboard';
				$data['view_data']['page']='Dashboard';
				$data['view_data']['sub_page']='';
				$data['view_page']='admin_dashboard';
				$data['start_date']=date('Y-m-01');
				$data['end_data']=date('Y-m-d');

				$data['salesman_master'] = $this->Master_model->salesman_master('*',array('status'=>'active'));
				$data['Shops_master'] = $this->Master_model->Shops_master('*',array('shop_status'=>'active'));
				$data['categories_master'] = $this->Master_model->categories_master('*',array('category_status'=>'active'));
				$data['billing_data'] = $this->Master_model->billing_data('count(*) as total','');

				if($this->input->post('start_date')){
					$data['start_date']=$this->input->post('start_date');
				}
				if($this->input->post('end_data')){
					$data['end_data']=$this->input->post('end_data');
				}

				$this->load->view('comman_data/view_template',$data);
				}

/******************************************* ******************************************************************/
				public function Add_Salesman()
				{
				$data['view_data']['bredcarm_head']='Add New Salesman';
				$data['view_data']['page']='add_Salesman';
				$data['view_data']['sub_page']='';
				$data['view_page']='add_Salesman';
				$data['datatable']= true;

				if($this->input->get('id')){
					$data['salesman_master_info'] = $this->Master_model->salesman_master('*',array('id'=>$this->input->get('id')));
				}
				$this->load->view('comman_data/view_template',$data);
				}
/******************************************* ******************************************************************/
				public function add_new_Salesman(){
						if($_POST){
				

							if($this->input->post('id')){
								$this->Common_model->update_data('salesman',array('id'=>$this->input->post('id')),$_POST);
								echo  json_encode(array('status'=>true,"mass"=>"salesman has been Updated","url"=>base_url('Admin/Admin_dashboard/salesman_list'),"mass_id"=>'#massage'));
							}else{
		
								$users_id = 	$this->Common_model->insert_data('salesman',$_POST);
								echo  json_encode(array('status'=>true,"mass"=>"salesman has been added","url"=>base_url('Admin/Admin_dashboard/salesman_list'),"mass_id"=>'#massage'));
							}
		

						}

						

				}

/******************************************* ******************************************************************/

				public function Salesman_list()
				{
				$data['view_data']['bredcarm_head']='Salesman List';
				$data['view_data']['page']='salesman_list';
				$data['view_data']['sub_page']='salesman_list';
				$data['salesman_master'] = $this->Master_model->salesman_master('*','');
				//echo "<pre>"; print_r($data['jila_data']); die;
				$data['view_page']='salesman_list';
				$data['datatable']= true; 
				$this->load->view('comman_data/view_template',$data);
				}


				/******************************************* ******************************************************************/

				public function Category()
				{
				$data['view_data']['bredcarm_head']='Add Category';
				$data['view_data']['page']='category';
				$data['view_data']['sub_page']='';
				$data['view_page']='category';
				$data['datatable']= true;

				if($this->input->get('id')){
					$data['category_info'] = $this->Master_model->categories_master('*',array('id'=>$this->input->get('id')));
				}

				$data['categories_master'] = $this->Master_model->categories_master('*','');
				$this->load->view('comman_data/view_template',$data);
				}

/******************************************* ******************************************************************/

					public function add_new_Category(){
						extract($_POST); 

						if($this->input->post('id')){


						$check_user =  $this->Common_model->select_manuvl_value('*','categories',array('category_code'=>$category_code,'id !='=>$this->input->post('id')));

						if($check_user){
							echo  json_encode(array('status'=>false,"mass"=>"Categories Code alredy Available.","url"=>'',"mass_id"=>'#massage'));
							die;
						}

					$users_id = 	$this->Common_model->update_data('categories',array('id'=>$this->input->post('id')),array(
						'category_code'=>$category_code,
						'category_name'=>strtoupper($category_name),
				));

						echo  json_encode(array('status'=>true,"mass"=>"Categories has been Updated.","url"=>'reload',"mass_id"=>'#massage'));

						}else{

						$check_user =  $this->Common_model->select_manuvl_value('*','categories',array('category_code'=>$category_code));

						if($check_user){
							echo  json_encode(array('status'=>false,"mass"=>"Categories Code alredy Available.","url"=>base_url('Admin/Admin_dashboard/Category'),"mass_id"=>'#massage'));
							die;
						}

					$users_id = 	$this->Common_model->insert_data('categories',array(
							'category_code'=>$category_code,
							'category_name'=>strtoupper($category_name),
							'category_status'=>'active',
						));

						echo  json_encode(array('status'=>true,"mass"=>"Categories has been added","url"=>'reload',"mass_id"=>'#massage'));

					}
						}
					
/******************************************* ******************************************************************/

				/******************************************* ******************************************************************/

				public function Shops()
				{
				$data['view_data']['bredcarm_head']='Add Shops';
				$data['view_data']['page']='shops';
				$data['view_data']['sub_page']='';
				$data['view_page']='shops';
				$data['datatable']= true;
				$data['Shops_master'] = $this->Master_model->Shops_master('*','');

				if($this->input->get('id')){
					$data['Shops_master_info'] = $this->Master_model->Shops_master('*',array('id'=>$this->input->get('id')));
				}

				$this->load->view('comman_data/view_template',$data);
				}

/******************************************* ******************************************************************/

					public function add_new_Shops(){
						extract($_POST); 

						// $check_user =  $this->Common_model->select_manuvl_value('*','categories',array('category_code'=>$category_code));

						// if($check_user){
						// 	echo  json_encode(array('status'=>false,"mass"=>"Categories Code alredy Available.","url"=>'',"mass_id"=>'#massage'));
						// 	die;
						// }

					if($this->input->post('id')){
						$this->Common_model->update_data('shops',array('id'=>$this->input->post('id')),$_POST);
						echo  json_encode(array('status'=>true,"mass"=>"Shop has been Updated","url"=>base_url('Admin/Admin_dashboard/Shops'),"mass_id"=>'#massage'));
					}else{

						$users_id = 	$this->Common_model->insert_data('shops',$_POST);
						echo  json_encode(array('status'=>true,"mass"=>"Shop has been added","url"=>'reload',"mass_id"=>'#massage'));
					}


					
						}
					
/******************************************* ******************************************************************/
				public function logout()
				{  
					$this->session->unset_userdata('user_key');
					$this->session->unset_userdata('user_type');
					redirect(base_url(), 'refresh');
				}

/******************************************* ******************************************************************/
}

?>