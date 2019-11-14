<?php
/**
 * 
 */
class Timecard_model extends CI_Model
{
	
	  public function time_card($values)
	        {
	        	$sql = "insert into timecard(tcid,ecode,date_issued,date_worked,pcode,bill_hours,supervisor,createdby) values (?, ?, ?, ?, ?, ?, ?, ?)";
	        	$query = $this->db->query($sql, $values);
				 if($query){
		            return "success";
		        }else
		            return "failed";
		    }

		    //codee for submitting the timecard expenses

		    public function expenses($values)
		    {
		    	$sql = "insert into TimeCardExpense(teid,tcid,expense_date,
		    	expense_amount,pcode,ecode,createdby) values(?, ?, ?, ?, ?, ?, ?)";
		    	$query = $this->db->query($sql, $values);
				 if($query){
		            return "success";
		        }else
		            return "failed";

		    }

		    public function expense_logs()
			    {
			    	$query =  $this->db->query("select * from TimeCardExpense");
		       		return $query->result();
		       }
	}
?>