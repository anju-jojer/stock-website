<?php
class DataAccess
{

	private $conkey;
	
		public function __construct()//initial settings of object
		{
			//require('database.php');	
			
           $this->conkey=mysqli_connect("remotemysql.com","Faa1yBZ3Xl","WlHp9IsgkJ","Faa1yBZ3Xl");
			 if(mysqli_errno($this->conkey))
			 {
				 die("database error");
		     }	 
  

	    }
	    public function real_escape_string($string) {
    // todo: make sure your connection is active etc.
           return $this->conkey->real_escape_string($string);
         }
	    
	    public function getall($table)
	    { 
			$data=array();
			$q="select * from $table";
			//echo $q;
			$res=mysqli_query($this->conkey,$q);
			  if(mysqli_num_rows($res))
			  {
				  while($data[]=mysqli_fetch_assoc($res))
				  {
					 
			      }	
			     // print_r($data);
			       return $data;
			  }
			  else
			  {
				  return false;
		      }	  	  
	    }	
	    
	    public function get($fields,$table,$condition)
	    {
			$data=array();
			$q="select ".implode(",",$fields)." from $table where $condition";
			//echo $q;
			$res=mysqli_query($this->conkey,$q);
			if(mysqli_num_rows($res))
			{
				while($data[]=mysqli_fetch_assoc($res))
				{	
			    }
			    return $data;	
			    
				
			}
			else
			{
				return false;
			}
	    }	
	    
	        public function getd($fields,$table,$condition)
	    {
			$data=array();
			$q="select ".implode(",",$fields)." from $table where $condition";
			echo $q;
			$res=mysqli_query($this->conkey,$q);
			if(mysqli_num_rows($res))
			{
				while($data[]=mysqli_fetch_assoc($res))
				{	
			    }
			    return $data;	
			    
				
			}
			else
			{
				return false;
			}
	    }	
	    public function getHtmlRows($fields,$table,$condition)
	    {
			$data=$this->get($fields,$table,$condition);
			$tableStr="";
			if($data)
			{
			
				foreach($data as $row)
				{
					$tableStr.="<tr>";
					if(is_array($row))
					{
						foreach($row as $val)
						{
							$tableStr.="<td>".$val."</td>";
					    }	
				    }
				    $tableStr.="</tr>";	
			    }
			    return $tableStr;	
		    }
		    else
		    {
				return "";
			}	
		}
	    
	    public function getAllHtmlRows($table)
	    {
			$data=$this->getall($table);
			$tableStr="";
			 if($data)
			 {
				 foreach($data as $row)
				 {
					 $tableStr.="<tr>";
					  if(is_array($row))
					  {
						  foreach($row as $val)
						  {
							  $tableStr.="<td>".$val."</td>";
					      }	  
				      }
				      $tableStr.="</tr>";
				      	  
			     }
			     return $tableStr;	 
		     }	
		     
		     else
		     {
				 return "";
			 } 
	    }
	    
	    public function insertFull($values,$table)
	    {
			$q="insert into $table values('".implode("','",$values)."')";
			//echo $q;
			if(mysqli_query($this->conkey,$q))
			{
				return true;
		    }	
		    else
		    {
				return false;
			}
		}
		
		public function insertPartial($values,$table)
		{
			$q="insert into $table(";
			foreach($values as $ind=>$val)
			{
				$q.="$ind,";
			}
			$q=$this->_chopQuery($q); 
			$q.=") values ('".implode("','",$values)."')";
			if(mysqli_query($this->conkey,$q))
			{
				return true;
		    }	
		    else
		    {
				return false;
			}
	    }
	    
	    public function getOptions($valuefield,$labelfield,$table,$condition)
	    {
			$optStr="";
			$q="select $valuefield,$labelfield from $table where $condition";
			$res=mysqli_query($this->conkey,$q);
			if(mysqli_num_rows($res))
			{
				while($row=mysqli_fetch_array($res))
				{
				  	
					$optStr.="<option value='".$row[0]."'>".$row[1]."</option>";
				}
				return $optStr;
			}
			else
			{
			  return "";
		    }
		}
		public function getCheckboxGroup($name,$valuefield,$labelfield,$table,$condition)
		{
			$checkboxStr="";
			$q="select $valuefield,$labelfield from $table where $condition";
			$res=mysqli_query($this->conkey,$q);
			if(mysqli_num_rows($res))
			{
				while($row=mysqli_fetch_array($res))
				{
					$checkboxStr.="<label><input type='checkbox' name='$name"."[]'"."value='".$row[0]."'/>".$row[1]."</label><br/>";
				}
				return $checkboxStr;
			}
			else
			{
				return "";
			}
		}
		
		public function update($fields,$table,$condition)
		{
			$q="update $table set ";
			foreach($fields as $field=>$newField)
			{
				$q.="$field='$newField',";

			}
			$q=$this->_chopQuery($q);
			$q.=" where $condition";
		//echo $q;
			if(mysqli_query($this->conkey,$q))
			{
				return true;
			}
			else
			{
				return false;
			}
		}
		public function fileUpload($FILES,$size,$typeArr,$path)
		{
			if($FILES['size'] < $size*1000)//converting to bytes from kb
			{
				if(in_array($FILES['type'],$typeArr))
				{
					$ext=strrchr($FILES['name'],".");//takes extension after last dot
					do
					{
						$hashName=md5(rand(0,99999));
						$orgName=$hashName.$ext;
						if(!file_exists("$path/".$orgName))
						{
							if(move_uploaded_file($FILES['tmp_name'],"$path/".$orgName))
							{
								return $orgName;
								
							}
							else
							{
								
								return false;
								
							}
						}
					}while(1);
				}
				else
				{
					
					return false;
				}
			}
			else
			{
				
				return false;
			}
		}
		public function fileUploadMultiple($FILES,$ind,$size,$typeArr,$path)
		{
			if($FILES['size'][$ind] < $size*1000)//converting to bytes from kb
			{
				if(in_array($FILES['type'][$ind],$typeArr))
				{
					$ext=strrchr($FILES['name'][$ind],".");//takes extension after last dot
					do
					{
						$hashName=md5(rand(0,99999));
						$orgName=$hashName.$ext;
						if(!file_exists("$path/".$orgName))
						{
							if(move_uploaded_file($FILES['tmp_name'][$ind],"$path/".$orgName))
							{
								return $orgName;
								
							}
							else
							{
								
								return false;
								
							}
						}
					}while(1);
				}
				else
				{
					
					return false;
				}
			}
			else
			{
				
				return false;
			}
		}
		public function exists($field,$value,$table,$condition)
		{
			$q="select $field from $table where $field='$value' && $condition";
			$res=mysqli_query($this->conkey,$q);
			if(mysqli_num_rows($res))
			{
				return true;
			}
			else
			{
				return false;
			}
			
		}

		public function delete($table,$condition)
		{
			$q="delete from $table where $condition";
			/*echo $q;*/
			//echo $q;
			$res=mysqli_query($this->conkey,$q);
				
					if(mysqli_query($this->conkey,$q))
						{
							return true;
						}
						else
						{
							return false;
						}
				
		}  
		public function getScalar($field,$table,$condition)
		{
			$q="select $field from $table where $condition";
			//echo $q;
			$res=mysqli_query($this->conkey,$q);
				if(mysqli_num_rows($res))
				{
					if($scalar=mysqli_fetch_array($res))
					{
						return $scalar[0];

					}
					else
					{
						return false;
					}
				}
				else
				{
					return false;
				}
				
		} 
	    private function _chopQuery($qr)//single underscore for private function
	    {
			$l=strlen($qr);
			return substr($qr,0,$l-1);
		}			
		public function compare($field1,$field2)
		{
			if($field1==$field2)
			{

				return true;
			}
			else{

				return false;
				}

		}


		 public function getallthree($field,$table)/* to find the last three element in decending order last inserted three elements*/
	    { 
			$data=array();
			$q="select * from (select * from $table ORDER BY $field ASC LIMIT 3)sub ORDER BY $field ASC ";
			
			//echo $q;
			$res=mysqli_query($this->conkey,$q);
			  if(mysqli_num_rows($res))
			  {
				  while($data[]=mysqli_fetch_assoc($res))
				  {
					 
			      }	
			     // print_r($data);
			       return $data;
			  }
			  else
			  {
				  return false;
		      }	  	  
	    }	

        public function getmaxid($field,$table)
	    { 
			$data=array();
			
			$q="select  Max($field) as max from $table";
			
			//echo $q;
			$res=mysqli_query($this->conkey,$q);
			  if(mysqli_num_rows($res))
			  {
				  while($data[]=mysqli_fetch_assoc($res))
				  {
					 
			      }	
			     // print_r($data);
			       return $data;
			  }
			  else
			  {
				  return false;
		      }	  	  
	    }	
	    public function getdistictfield($field,$table)
	    { 
			$data=array();
			
			$q="select DISTINCT ($field) from $table";
			
			//echo $q;
			$res=mysqli_query($this->conkey,$q);
			  if(mysqli_num_rows($res))
			  {
				  while($data[]=mysqli_fetch_assoc($res))
				  {
					 
			      }	
			     // print_r($data);
			       return $data;
			  }
			  else
			  {
				  return false;
		      }	  	  
	    }










}
?>
