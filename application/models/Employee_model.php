<?php 
/**
 * 
 */
class Employee_model extends CI_Model
{
	 public function newcontract($values)
	        {
	        	$sql = "insert into employe(ecode,ename,lname,sex,email,phone,role,jdate,salary,address) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
	        	$query = $this->db->query($sql, $values);
				 if($query){
		            return "success";
		        }else
		            return "failed";
		    }

		    //display contract staff table

		    public function contract_staff($value='')
		    {
		    	$query =  $this->db->query("select * from employe");
	       		return $query->result();
		    }
}
?>