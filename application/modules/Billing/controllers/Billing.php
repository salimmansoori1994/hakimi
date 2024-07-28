<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Billing extends MX_Controller {


			  function __construct() {
			  parent::__construct();
			  }


              public function index()
				{

                    $this->data_truncate();

                        $data['view_data']['page']='Billing';
                        $data['sallers'] = $this->Master_model->salesman_master('*',array('status'=>'active'));
                        $this->load->view('Billing_board_user',$data);
                }
              

                function data_truncate(){

                    $old_data =$this->Common_model->select_manuvl_value('id','billings',array('create_date <'=>date('Y-m-d',strtotime('-2 days'))));
    
                    if($old_data){
                            foreach ($old_data as $key => $value) {
                                $this->Common_model->delete_data('billings',array('id'=>$value->id));
                                $this->Common_model->delete_data('billings_details',array('billing_id'=>$value->id));
                            }
                    }

            

                    if(!check_hki_verification()){
                      //  redirect(base_url('Billing/restric_hki'), 'refresh');
                    }

                    }

                public function restric_hki(){

                    if(check_hki_verification()){
                        redirect(base_url('Billing'), 'refresh');
                    }
                
                    if($this->input->post()){
                        $res_code = $this->input->post('res_code');

                        $explid = explode('-',$res_code);

                        $sh_code = $explid[0];
                        $sh_set = $explid[1];
                        $type = '';
                        $result = false;

                        if($sh_code != PROJECTNAMEVER){
                            $result = false;
                            goto even; 
                        }

                        if( $sh_set == 'per' ){
                            $next_date='';
                            $this->Common_model->update_data('restric_hki',array('id'=>1),array('next_date'=>$next_date,'type'=>$sh_set));

                            $result = true;
                            goto even; 

                        }else if (is_numeric($sh_set)){
                            $next_date = date('Y-m-d',strtotime("+".$sh_set." months",time()));
                            $type = 'temp';
                            $this->Common_model->update_data('restric_hki',array('id'=>1),array('next_date'=>$next_date,'type'=>$type));

                            $result = true;
                            goto even; 

                        }else{
                            goto even; 
                            $result = false;
                        }


                        even:
                      if($result){
                        echo  json_encode(array('status'=>true,"mass"=>" Congretaltion Your Billing is Start. ","url"=>base_url('Billing'),"mass_id"=>'#massage')); 
                      }else{
                        echo  json_encode(array('status'=>false,"mass"=>" Verification code is not metch. ","url"=>'',"mass_id"=>'#massage')); 
                      }
                      
                    }else{
                        $data['view_data']['page']='Billing';
                        $this->load->view('restric_hki',$data);
                    }

                  
                }
                    

                public function new_billing()
				{
                    if($this->uri->segment(3)){
                        // $saller_id  = base64_decode($this->uri->segment(3)); 
                          $saller_id  = $this->uri->segment(3); 
                        $data['sallers_info'] = $this->Master_model->salesman_master('*',array('status'=>'active','id'=>$saller_id));
                        $data['Shops_master'] = $this->Master_model->Shops_master('*',array('shop_status'=>'active'));
                        // echo "<pre>"; print_r( $data['sallers_info']); die;
                        $data['categories_master'] = $this->Master_model->categories_master('*',array('category_status'=>'active'));
                        $data['view_data']['page']='Billing';
                         $this->load->view('new_billing',$data);
                    }
                  
                }

                public function add_billing_data()
                {
                 //   echo "<pre>"; print_r($_POST); die;
                    if($this->input->post()){
                        $data = array(
                            'salesmen_id'=>$this->input->post('salesmen_id'),
                            'shop_id'=>$this->input->post('shop_name'),
                            'customer_number'=>$this->input->post('customer_number'),
                            'pay_by_cash'=>$this->input->post('pay_by_cash') ? $this->input->post('pay_by_cash'):0 ,
                            'pay_by_online'=>$this->input->post('pay_by_online')? $this->input->post('pay_by_online'):0 ,
                            'total_quntity'=>$this->input->post('total_quntity')? $this->input->post('total_quntity'):0 ,
                            'total_amount'=>$this->input->post('total_amount')? $this->input->post('total_amount'):0 ,
                            'total_item'=>$this->input->post('total_item')? $this->input->post('total_item'):0 ,
                            'discount'=>$this->input->post('discount')? $this->input->post('discount'):0 ,
                            'create_date'=>date('Y-m-d'),
                            'create_time'=>date('H:i:s'),
                        );

                   $id =      $this->Common_model->insert_data('billings',$data);
                            if($id){
                                $i = 0 ;
                                foreach ($_POST['category_id'] as $key => $value) {
                                   $data2= array(
                                    'billing_id'=>$id,
                                    'category_name'=>cate_name($_POST['category_id'][$i]),
                                    'price'=>$_POST['price'][$i],
                                    'quantity'=>$_POST['quantity'][$i],
                                    'amount'=>$_POST['amount'][$i],
                                   );

                                   $this->Common_model->insert_data('billings_details',$data2);
                                   $i++;
                                }

                                echo  json_encode(array('status'=>true,"mass"=>"
                                 Bill has been Create <br> Billing number is <b><u>".sprintf("%04d",$id)." </u></b>
                               </a>","url"=>'',"mass_id"=>'#massage','id'=>base64_encode($id)));             
                            }
                    }
                }


                public function print_billing()
                {
                    if($this->uri->segment(3)){
                        $bill_id  = base64_decode($this->uri->segment(3));
                        $data['billing_data'] = $this->Master_model->billing_data('*,billings.id as billing_id',array('billings.id'=>$bill_id));
                      //  echo "<pre>"; print_r($data['billing_data']); die;

                      $data['billing_details'] = $this->Master_model->billing_details('*',array('billings_details.billing_id'=>$bill_id));

                      $this->Common_model->update_data('billings',array('id'=>$bill_id),
                    array('priting_type'=>'Copy')
                    );

                        $data['view_data']['page']='print_billing';
                        $this->load->view('print_billing',$data);
                    }
                }

            }
?>