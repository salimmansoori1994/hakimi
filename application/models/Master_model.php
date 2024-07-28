<?php
 if ( ! defined('BASEPATH')) exit('Noinsert_data direct script access allowed');
 
class Master_model extends CI_Model {


 /******************************************* ******************************************************************/   
	public function salesman_master($select,$where,$limit="",$order=""){
        if($select!="")	{	$this->db->select($select);}
        if($where!="")	{	$this->db->where($where);}

        if($limit!="")	{	$this->db->limit($limit);}

        if($order!="")	{	$this->db->order_by($order,'desc');	}

    $qurey=$this->db->get('salesman'); // echo $str = $this->db->last_query(); die;
    if($qurey->num_rows()){
        return $qurey->result();
    }else{
        return false;
    }
    
}
 /******************************************* ******************************************************************/   
	public function categories_master($select,$where,$limit="",$order=""){
        if($select!="")	{	$this->db->select($select);}
        if($where!="")	{	$this->db->where($where);}

        if($limit!="")	{	$this->db->limit($limit);}

        if($order!="")	{	$this->db->order_by($order,'desc');	}

    $qurey=$this->db->get('categories'); // echo $str = $this->db->last_query(); die;
    if($qurey->num_rows()){
        return $qurey->result();
    }else{
        return false;
    }
    
}
 /******************************************* ******************************************************************/   
	public function Shops_master($select,$where,$limit="",$order=""){
        if($select!="")	{	$this->db->select($select);}
        if($where!="")	{	$this->db->where($where);}

        if($limit!="")	{	$this->db->limit($limit);}

        if($order!="")	{	$this->db->order_by($order,'desc');	}

    $qurey=$this->db->get('shops'); // echo $str = $this->db->last_query(); die;
    if($qurey->num_rows()){
        return $qurey->result();
    }else{
        return false;
    }
    
}
 /******************************************* ******************************************************************/   
	public function billing_data($select,$where,$limit=""){
        $this->db->join('salesman','salesman.id=billings.salesmen_id');
        $this->db->join('shops','shops.id=billings.shop_id');
        if($select!="")	{	$this->db->select($select);}
        if($where!="")	{	$this->db->where($where);}

        if($limit!="")	{	$this->db->limit($limit);}

      	$this->db->order_by('billings.id','desc');	

    $qurey=$this->db->get('billings'); // echo $str = $this->db->last_query(); die;
    if($qurey->num_rows()){
        return $qurey->result();
    }else{
        return false;
    }
    
}
 /******************************************* ******************************************************************/   
	public function billing_details($select,$where,$limit="",$order=""){
     //   $this->db->join('categories','categories.id=billings_details.category_id','left');
        if($select!="")	{	$this->db->select($select);}
        if($where!="")	{	$this->db->where($where);}

        if($limit!="")	{	$this->db->limit($limit);}

        if($order!="")	{	$this->db->order_by($order,'desc');	}

    $qurey=$this->db->get('billings_details'); // echo $str = $this->db->last_query(); die;
    if($qurey->num_rows()){
        return $qurey->result();
    }else{
        return false;
    }
    
}



}
?>