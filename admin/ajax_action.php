<?php 
include "../dbconnect.php";
if(isset($_REQUEST['action'])){
	$action=$_REQUEST['action'];
	
	if($action == 'get_email_check'){
		
		//get_email_check
		
		
		$email=$_REQUEST['email'];
		
		$check_email=mysql_query("SELECT * from $table_User where email='$email'") or die(mysql_error());
	
		$check_email_rows =0;
	$check_email_rows = mysql_num_rows($check_email);
	
	
		
			if($check_email_rows == 0){
				$value='';
				}else{
					$value='This Email Already Used Please Use another Email';
					}
					  
		echo $value;
		
		
		
		
		}else if($action == 'get_username_check'){
		
		//get_email_check
		
		
		$username=$_REQUEST['username'];
		
		$check_username=mysql_query("SELECT * from $table_User where username='$username'") or die(mysql_error());
	
		$check_username_rows =0;
	$check_username_rows = mysql_num_rows($check_username);
	
	
		
			if($check_username_rows == 0){
				$value='';
				}else{
					$value='This Username Already Used Please Use another Username';
					}
					  
		echo $value;
		
		
		
		
		}
		
		
		
		
	
	}
 ?>