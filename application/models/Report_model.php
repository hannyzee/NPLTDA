<?php 
/**
 * 
 */
class Report_model extends CI_Model
{
	
	public function reports($value)
	{
		$sql = "insert into report(rid,report) values (?, ?)";
		$query = $this->db->query($sql, $values);
			 if($query){
	            return "success";
	        }else
	            return "failed";
	}
}
?>