<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SalesmenReport extends MX_Controller {


			  function __construct() {
			  parent::__construct();
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


                }else{
                    // $data['from_date']=    $where['create_date >='] =   date('Y-m-d',strtotime('-1 month'));
                    $data['from_date']=    $where['create_date >='] =  date('Y-m-d'); 
                    $data['to_date'] =  $where['create_date <='] =  date('Y-m-d'); 
                 
                }


                
                $data['billing_data'] = $this->Master_model->billing_data('billings.*,shops.shop_name,salesman.name,salesman.id as salesmanid',$where);

                $data['salesman_master'] = $this->Master_model->salesman_master('*','');

                $data['datatable']= true; 
                $data['view_data']['page']='Recipts';
                $this->load->view('SalesmenReport/SalesmenReport',$data);
              }

}
?>