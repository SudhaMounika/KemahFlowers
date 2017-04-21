<?php 
include "../dbconnect.php";
$title="Users List";
$active_menu =basename($_SERVER['SCRIPT_NAME']);
$msg='';
$action='';

if(!isset($_SESSION['au_session_login']) ){
	header("Location: login.php?e_msg=You must Login to Access");
}else if(!isset($_SESSION['au_session_login_admin']) ){
		header("Location: index.php?e_msg=No Rights to Access");
	}


include "header.php";

if(isset($_REQUEST['action']) ){
	$action=$_REQUEST['action'];
		
	}else{
		
		
		}

if($action == 'delete'){
	
	
	if(!isset($_SESSION['au_session_login']) ){
	$msg= '<div class="alert alert-danger">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>You have no Rights to Delete any Items!</strong>.</div>';
	}else{
	$hidden_table=$_REQUEST['hidden_table'];
	$hidden_id=$_REQUEST['hidden_id'];
	
	$delete_query=mysql_query("DELETE FROM $hidden_table WHERE id='$hidden_id'") or die(mysql_error());
	
	if($delete_query){
		
		$msg= '<div class="alert alert-success">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Deleted Successfully!</strong>.</div>';
		
		}
	}
		
		
	
	}
					

?>

<div class="main-content">
  <div class="breadcrumbs" id="breadcrumbs">
    <ul class="breadcrumb">
      <li> <i class="icon-home home-icon"></i> <a href="#">Home</a> <span class="divider"> <i class="icon-angle-right arrow-icon"></i> </span> </li>
      <li class="active">Users List</li>
    </ul>
    <!--.breadcrumb--> 
    
  </div>
  <div class="page-content">
  <?php   if($msg != ''){	echo $msg;}?>
    <div class="page-header position-relative">
      <h1>User's  <small> <i class="icon-double-angle-right"></i> overview  </small> </h1>
    </div>
    <!--/.page-header-->
    
    <div class="row-fluid">
      <div class="span12"> 
        <!--PAGE CONTENT BEGINS-->
        
        
        
       
       <table id="admin_list" class="table table-striped table-bordered table-hover">
          <thead>
            <tr>
              <th class="center"> S. No. </th>
              <th>User Name</th>
              <th>Password</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Created Date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
          
		  $select_userlist=mysql_query("select * from $table_User where user_level = 0 order by id desc ") or die(mysql_error());
		  
		  $i='1';
		  while($row = mysql_fetch_array($select_userlist)){
			  
			  $user_id=$row['id'];
			  $username=$row['username'];
			  $password=$row['password'];
			  $email=$row['email'];
			  $phone=$row['phone'];
			  $created_date=$row['created_date'];
			 
			
			
			
			
			
            
			  ?>
            <tr>
              <td class="center"><?php echo $i; ?></td>
              <td><a data-toggle="modal" data-target="#view<?php echo $user_id; ?>"  href="#"><?php echo $username; ?></a></td>
              <td><?php echo $password ?></td>
              <td><?php echo $email ?></td>
              <td><?php echo $phone ?></td>
              <td><?php echo $created_date ?></td>
              <td class="td-actions">
              <div class="action-buttons"> 
              <a data-toggle="modal" data-target="#view<?php echo $user_id; ?>"  href="#" class="blue">
																	<i class="icon-search bigger-130"></i>
																</a> 
              <a class="green" data-toggle="modal" data-target="#edit<?php echo $user_id; ?>"  href="#"> <i class="icon-pencil bigger-130"></i> </a> 
              <a class="red" data-toggle="modal" data-target="#delete<?php echo $user_id; ?>"  href="#" ><i class="icon-trash bigger-130"></i> </a> </div>
                
                <!-- view Modal-->
                
                <div id="view<?php echo $user_id; ?>" class="modal fade center" role="dialog" style="display: none;">
                  <div class="modal-dialog"> 
                    
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"> <i class=" icon icon-large icon-search  bigger-150" style="color:#629fd1;"></i> Conform View</h4>
                      </div>
                      <div class="modal-body">
                        <h3> Are you want to View?</h3>
                       
                        <a href="user_view.php?id=<?php echo $user_id;?>"><button type="button" class="btn btn-primary" >View</button></a>
                        
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                       
                      </div>
                      <!--div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div--> 
                    </div>
                  </div>
                </div>
                
                <!-- Edit Modal-->
                
                <div id="edit<?php echo $user_id; ?>" class="modal fade center" role="dialog" style="display: none;">
                  <div class="modal-dialog"> 
                    
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"> <i class=" icon icon-large icon-pencil  bigger-150" style="color:#87b87f;"></i> Conform Edit</h4>
                      </div>
                      <div class="modal-body">
                        <h3> Are you want to Edit?</h3>
                        
                        <a href="user_edit.php?id=<?php echo $user_id;?>"><button type="button" class="btn btn-success" >Edit</button></a>
                        
                        
                        
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        
                      </div>
                      <!--div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div--> 
                    </div>
                  </div>
                </div>
                
                
                
                
                <!-- Delete Modal-->
                
                <div id="delete<?php echo $user_id; ?>" class="modal fade center" role="dialog" style="display: none;">
                  <div class="modal-dialog"> 
                    
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"> <i class=" icon icon-large icon-ban-circle  bigger-150" style="color:#d15b47;"></i> Conform Delete</h4>
                      </div>
                      <div class="modal-body">
                        <h3> Are you want to delete?</h3>
                        <form action="" method="post">
                        <input type="hidden" name="hidden_table" value="<?php echo $table_User;?>" />
                        <input type="hidden" name="hidden_id" value="<?php echo $user_id;?>" />
                        <input type="hidden" name="action" value="delete" />
                        <button type="submit" class="btn btn-danger" >Delete</button>
                        
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </form>
                      </div>
                      <!--div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div--> 
                    </div>
                  </div>
                </div></td>
            </tr>
            <?php
			  $i++;
			  }
		  
		  ?>
          </tbody>
        </table>
       
       
        
        
        
        
        <!--PAGE CONTENT ENDS--> 
      </div>
      <!--/.span--> 
    </div>
    <!--/.row-fluid--> 
  </div>
  <!--/.page-content--> 
  
</div>
<!--/.main-content-->
<?php include"footer.php";?>