<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

 function details($select_values,$table,$where=""){

			$ci=& get_instance();

			$ci->load->database();

			if($select_values!="")	{	$ci->db->select($select_values);}		

			if($where!="")	{				$ci->db->where($where,TRUE);}



			$query=$ci->db->get($table); //echo $str = $ci->db->last_query(); die;

			if($query->num_rows()){

			return $query->result();

			}else{

			return false; 

			}
    }


    if(! function_exists('generate_wild_where'))
{
    function generate_wild_where($name,$id)
    {
        return " ".$name." ='".$id."' OR ".$name." like '".$id.",%' OR ".$name." like '%,".$id."' OR ".$name." like '%,".$id.",%'";
    }
}

 function cate_name($id)
{
	$details = details('category_name','categories',array('id'=>$id));
	if($details){
		return $details[0]->category_name;
	}else{
		return 'N/a';
	}
}

 function check_hki_verification(Type $var = null)
{
	$ci=& get_instance();

	$ci->load->database();


	$restric_hki =$ci->Common_model->select_manuvl_value('*','restric_hki',array('id'=>1));
	$return = false;
	if($restric_hki){
		if($restric_hki[0]->type == 'temp'){
			  if($restric_hki[0]->next_date >= date('Y-m-d')){
				$return = true;
			  }
		}else if($restric_hki[0]->type == 'per'){
			$return = true;
		}
	}

	return $return;

}

    
?>