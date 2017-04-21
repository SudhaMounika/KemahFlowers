<?php 
include "../dbconnect.php";
$title="Add New User";
$active_menu =basename($_SERVER['SCRIPT_NAME']);
$msg='';


if(!isset($_SESSION['au_session_login']) ){
	header("Location: login.php?e_msg=You must Login to Access");
}else if(!isset($_SESSION['au_session_login_admin']) ){
		header("Location: index.php?e_msg=No Rights to Access");
	}



//add Submit
if(isset($_REQUEST['add_submit'])){
	$username=$_REQUEST['username'];
	$password=$_REQUEST['password'];
	$email=$_REQUEST['email'];
	$phone=$_REQUEST['phone'];
	
	
	//get last id
	$count=0;
	$new_id='';
	$select_last_uid=mysql_query("select * from $table_User ORDER BY id DESC limit 1") or die(mysql_error());
	$count=mysql_num_rows($select_last_uid);
	
	if($count !=0){
	$row = mysql_fetch_array($select_last_uid);	
	$last_id=$row['id'];
	$new_id=$last_id + 1;
	}else{
		$new_id=1;
		}
		
		
	
	
	$insert=mysql_query("insert into $table_User(username,password,email,phone) values ('$username','$password','$email','$phone')") or die(mysql_error());
	
	if($insert){
		
	$provider_folder_path="assets/uploads/".$new_id."_".$username;
	mkdir($provider_folder_path);
	
	
	
		header("Location: login.php?s_msg=Registration successfully");
		}else{
			header("Location: login.php?e_msg=Error, Try again for Registration");
			}
	
}
include "header.php";
?>


<div class="main-content">
  <div class="breadcrumbs" id="breadcrumbs">
    <ul class="breadcrumb">
      <li> <i class="icon-home home-icon"></i> <a href="#">Home</a> <span class="divider"> <i class="icon-angle-right arrow-icon"></i> </span> </li>
      <li class="active">New User</li>
    </ul>
    <!--.breadcrumb--> 
    
  </div>
  <div class="page-content">
   <?php   if($msg != ''){	echo $msg;}?>
   
   
   
   

     <div class="page-header position-relative">
      <h1> New <small> <i class="icon-double-angle-right"></i> User </small> </h1>
    </div>
    <div class="row-fluid">
      <div class="span12"> 
        <!--PAGE CONTENT BEGINS-->
        <form class="form-horizontal" method="post" action="">
        
       
        
        
        <div class="control-group">
            <label for="customer_name" class="control-label">Username</label>
            <div class="controls">
              <input type="text"  name="username" id="username" class="input-xxlarge"  value="" required>
            </div>
          </div>
          <div class="control-group">
            <label for="customer_name" class="control-label">Password</label>
            <div class="controls">
              <input type="password" name="password"  class="input-xxlarge"  value="" required >
            </div>
          </div>
          <div class="control-group">
            <label for="customer_name" class="control-label">Email</label>
            <div class="controls">
              <input type="email" name="email" id="email"  class="input-xxlarge"  value="" >
            </div>
          </div>
          
          
          
          <div class="form-actions">
            <button type="submit" class="btn btn-info" name="add_submit"> <i class="icon-ok bigger-110"></i>Add Now </button>
            &nbsp; &nbsp; &nbsp;
            <button type="reset" class="btn"> <i class="icon-undo bigger-110"></i> Reset </button>
          </div>
          <div class="hr"></div>
        </form>
      
      </div>
     
    </div>
     
   
    
    
    
    
    
  </div>
  <!--/.page-content-->
  
  <?php include"footer.php";?>