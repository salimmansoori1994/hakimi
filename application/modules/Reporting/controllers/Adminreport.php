<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminreport extends MX_Controller {


			  function __construct() {
			  parent::__construct();
              if(!$this->session->userdata('user_key') || $this->session->userdata('user_type') != "admin" ){
                redirect(base_url('Admin'), 'refresh');
  
     }
			  }


        public function index()
        {

          $where = array();
      

          $data['billing_id'] ='';
          $data['salesmen_id'] ='';
          if($this->input->post()){
         
              if($this->input->post('from_date') == $this->input->post('to_date')){
                  $data['from_date']=  $data['to_date'] =    $where['create_date'] =  $this->input->post('from_date');
              }else{
                      // echo "<pre>"; print_r($_POST); die;
                  $data['from_date']=    $where['create_date >='] =   $this->input->post('from_date');
                  $data['to_date'] =  $where['create_date <='] =  $this->input->post('to_date'); 
              }

              if($this->input->post('billing_id')){
                  $data['billing_id']=    $where['billings.id'] =  $this->input->post('billing_id');
              }
              if($this->input->post('salesmen_id')){
                  $data['salesmen_id']=    $where['billings.salesmen_id'] =  $this->input->post('salesmen_id');
              }
              if($this->input->post('salesmen_id')){
                $data['salesmen_id']=    $where['billings.salesmen_id'] =  $this->input->post('salesmen_id');
            }
              if($this->input->post('shop_id')){
                $data['shop_id']=    $where['billings.shop_id'] =  $this->input->post('shop_id');
            }


          }else{
              $data['from_date']=    $where['create_date >='] =   date('Y-m-d',strtotime('-1 month'));
              $data['to_date'] =  $where['create_date <='] =  date('Y-m-d'); 
           
          }


          $data['billing_data'] = $this->Master_model->billing_data('billings.*,shops.shop_name,salesman.name,salesman.id as salesmanid',$where);

          $data['salesman_master'] = $this->Master_model->salesman_master('*','');
          $data['Shops_master'] = $this->Master_model->Shops_master('*','');

          $data['view_data']['bredcarm_head']='Report';
          $data['view_data']['page']='report';
          $data['view_data']['sub_page']='salesman_list';
          $data['view_page']='SalesmenReport/Adminreport';
				$data['datatable']= true; 
				$this->load->view('comman_data/view_template',$data);
        }

}
?>