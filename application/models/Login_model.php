<?php 
 if ( ! defined('BASEPATH')) exit('Noinsert_data direct script access allowed');
 
class Login_model extends CI_Model {
/******************************************* ******************************************************************/
	public function login_valid($tb_name,$where){
		
		$password_encoded = $where['password'];
		unset($where['password']);
	//print_r($where);
		$this->db->where($where);
		$qurey=$this->db->get($tb_name); //echo  $this->db->last_query(); die;
		
		if($qurey->num_rows() ){
			$password_fetched = $qurey->row()->password;
		// echo	$this->encrypt->decode($password_fetched);
		// die;
			if($password_encoded==$this->encryption->decrypt($password_fetched))
			{
			//	echo $qurey->row()->user_type; die;
				$this->session->set_userdata('user_key',$qurey->row()->users_id);
				$this->session->set_userdata('user_type',$qurey->row()->user_type);
			
			return $qurey->row()->users_id;
			}
			else{
				return false;
			}
		}else{
			return false;
		}
	}
/******************************************* ******************************************************************/	
	
	public function customers_login_valid($tb_name,$where){
		
		$password_encoded = $where['password'];
		unset($where['password']);
	//print_r($where);
		$this->db->where($where);
		$qurey=$this->db->get($tb_name);// echo  $this->db->last_query(); die;
		
		if($qurey->num_rows() ){
			$password_fetched = $qurey->row()->customer_password;
		//echo	$this->encrypt->decode($password_fetched);
		//die;
			if($password_encoded==$this->encrypt->decode($password_fetched))
			{
			return $qurey->row()->customers_id;
			}
			else{
				return false;
			}
		}else{
			return false;
		}
	}
	
/******************************************* ******************************************************************/	
	
}
?>