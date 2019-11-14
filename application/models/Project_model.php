<?php
/**
 * 
 */
class Project_model extends CI_Model
{
	
	public function new_project($values)
	{
		$sql = "insert into project(pcode,ccode,pname,pdicrip,ebill,sdate,edate,createdby) values(?, ?, ?, ?, ?, ?, ?, ?)";
		$query = $this->db->query($sql, $values);
		 if($query){
            return "success";
        }else
            return "failed";
        }

        //inserting client form
        public function new_client($values)
        {
        	$sql = "insert into client(ccode,company_name,email,address,contact_person,phone,cnum,createdby) values (?, ?, ?, ?, ?, ?, ?, ?)";
        	$query = $this->db->query($sql, $values);
			 if($query){
	            return "success";
	        }else
	            return "failed";
	        }

	     //inserting supervisor
	        public function new_supervisor($values)
	        {
	        	$sql = "insert into employe(ecode,ename,lname,sex,email,phone,address) values (?, ?, ?, ?, ?, ?, ?)";
	        	$query = $this->db->query($sql, $values);
				 if($query){
		            return "success";
		        }else
		            return "failed";
		        }
		           //displayin project log
	       public function project_log()
	       {
	       		$query =  $this->db->query("select * from project");
	       		return $query->result();
	       }

	       public function assign_super($pcode)
	       {
	       		$query = $this->db->query("select * from project WHERE pcode = ?", [$pcode]);
				return $query->row();
	       }
	       
	  }
	     
 
?>