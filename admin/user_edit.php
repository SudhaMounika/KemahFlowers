<?php 
include "../dbconnect.php";
$title="Edit User";
$active_menu =basename($_SERVER['SCRIPT_NAME']);
$msg='';


if(!isset($_SESSION['au_session_login']) ){
	header("Location: login.php?e_msg=You must Login to Access");
}else if(!isset($_SESSION['au_session_login_admin']) ){
		header("Location: index.php?e_msg=No Rights to Access");
	}



//add Submit
if(isset($_REQUEST['edit_submit'])){
	
	$id=$_REQUEST['id'];
	$username=$_REQUEST['username'];
	$password=$_REQUEST['password'];
	$email=$_REQUEST['email'];
	$phone=$_REQUEST['phone'];
	
	$insert_boat=mysql_query("update $table_User set username='$username',password='$password',email='$email', phone='$phone' where id='$id'") or die(mysql_error());
	
	if($insert_boat){
		header("Location: user_list.php?s_msg=Updated");
		}else{
			
			}
	
}



	
	
include "header.php";
?>


<div class="main-content">
  <div class="breadcrumbs" id="breadcrumbs">
    <ul class="breadcrumb">
      <li> <i class="icon-home home-icon"></i> <a href="#">Home</a> <span class="divider"> <i class="icon-angle-right arrow-icon"></i> </span> </li>
      <li><a href="user_list.php">User List</a> <span class="divider"> <i class="icon-angle-right arrow-icon"></i> </span> </li>
      <li class="active">Add New User</li>
    </ul>
    <!--.breadcrumb--> 
    
  </div>
  <div class="page-content">
   <?php   if($msg != ''){	echo $msg;}
   if(isset($_REQUEST['id'])){
	
	$id=$_REQUEST['id'];
	
	$select_query=mysql_query("select * from $table_User where id='$id'");
	
	$select_query_count=mysql_num_rows($select_query);
	
	if($select_query_count != 0){
	
	$select_query_row = mysql_fetch_array($select_query);
	
	$username_db=$select_query_row['username'];	
	$password_db=$select_query_row['password'];
	$email_db=$select_query_row['email'];
	$phone_db=$select_query_row['phone'];
   
   ?>
   
   
   
   

     <div class="page-header position-relative">
      <h1> User Information <small> <i class="icon-double-angle-right"></i> Edit </small> </h1>
    </div>
    <div class="row-fluid">
      <div class="span12"> 
        <!--PAGE CONTENT BEGINS-->
        <form class="form-horizontal" method="post" action="">
        
        
        <input type="hidden" name="user_id" value="<?php echo $id;?>" >
        
        
        
        <div class="control-group">
            <label for="username" class="control-label">Username</label>
            <div class="controls">
              <input type="text"  name="username" class="input-xxlarge"  required value="<?php echo $username_db;?>" readonly="readonly">
            </div>
          </div>
          <div class="control-group">
            <label for="password" class="control-label">Password</label>
            <div class="controls">
              <input type="password" name="password"  class="input-xxlarge"  required  value="<?php echo $password_db;?>" >
            </div>
          </div>
          <div class="control-group">
            <label for="email" class="control-label">Email</label>
            <div class="controls">
              <input type="email" name="email"  class="input-xxlarge"  value="<?php echo $email_db;?>" >
            </div>
          </div>
          <div class="control-group">
            <label for="phone" class="control-label">Phone</label>
            <div class="controls">
              <input type="text" name="phone"  class="input-xxlarge"  value="<?php echo $phone_db;?>" >
            </div>
          </div>
          
          
          
          <div class="form-actions">
            <button type="submit" class="btn btn-info" name="edit_submit"> <i class="icon-ok bigger-110"></i>Update Now </button>
            &nbsp; &nbsp; &nbsp;
            <a href="user_list.php">
            <button type="button" class="btn"> <i class="icon-undo bigger-110"></i> Back </button>
            </a>
          </div>
          <div class="hr"></div>
        </form>
      
      </div>
     
    </div>
     
   
    
    
    
    
    
  </div>
  <!--/.page-content-->
  
  <?php 
  
	}
	
	
	}
  
  include"footer.php";?>