<?php 
include "../dbconnect.php";
$title="User View";
$active_menu =basename($_SERVER['SCRIPT_NAME']);
$msg='';
$hidden_id='';

if(!isset($_SESSION['au_session_login']) ){
	header("Location: login.php?e_msg=You must Login to Access");
}else if(!isset($_SESSION['au_session_login_admin']) ){
		header("Location: index.php?e_msg=No Rights to Access");
	}


if(isset($_REQUEST['id']) ){
	$hidden_id=$_REQUEST['id'];
		
	}

$select_user_details=mysql_query("select * from $table_User where id='$hidden_id'") or die(mysql_error());
$select_user_details_count = mysql_num_rows($select_user_details);
if($select_user_details_count == 1){
	
		$user_row = mysql_fetch_array($select_user_details);
		
		
		$username=$user_row['username'];
		$user_email=$user_row['email'];
		$user_phone=$user_row['phone'];
		
		
	
	}else{
		
		
		}



if(isset($_REQUEST['delete_submit']) ){
	
	
	if(!isset($_SESSION['au_session_login']) ){
	$msg= '<div class="alert alert-danger">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>You have no Rights to Delete any Items!</strong>.</div>';
	}else{
	$del_hidden_table=$_REQUEST['del_hidden_table'];
	$del_hidden_id=$_REQUEST['del_hidden_id'];
	
	$delete_query=mysql_query("DELETE FROM $del_hidden_table WHERE id='$del_hidden_id'") or die(mysql_error());
	
	if($delete_query){
		
		$msg= '<div class="alert alert-success">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Deleted Successfully!</strong>.</div>';
		
		}
	}
		
		
	
	}




	if(isset($_REQUEST['denial_submit']) ){
	
	
	if(!isset($_SESSION['au_session_login']) ){
	$msg= '<div class="alert alert-danger">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>You have no Rights to Access any Items!</strong>.</div>';
	}else{
	$status_hidden_table=$_REQUEST['status_hidden_table'];
	$status_hidden_id=$_REQUEST['status_hidden_id'];
	
	$delete_query=mysql_query("update $status_hidden_table set approval=2 WHERE id='$status_hidden_id'") or die(mysql_error());
	
	if($delete_query){
		
		$msg= '<div class="alert alert-success">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Denial Successfully!</strong>.</div>';
		
		}
	}
		
		
	
	}
	
	
	
	
	if(isset($_REQUEST['approval_submit']) ){
	
	
	if(!isset($_SESSION['au_session_login']) ){
	$msg= '<div class="alert alert-danger">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>You have no Rights to Access any Items!</strong>.</div>';
	}else{
	$status_hidden_table=$_REQUEST['status_hidden_table'];
	$status_hidden_id=$_REQUEST['status_hidden_id'];
	
	$delete_query=mysql_query("update $status_hidden_table set approval=1 WHERE id='$status_hidden_id'") or die(mysql_error());
	
	if($delete_query){
		
		$msg= '<div class="alert alert-success">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Appointment Confirmed </strong>.</div>';
		
		}
	}
		
		
	
	}



include "header.php";


					

?>

<div class="main-content">
  <div class="breadcrumbs" id="breadcrumbs">
  
  	<ul class="breadcrumb">
      <li> <i class="icon-home home-icon"></i> <a href="index.php">Home</a> <span class="divider"> <i class="icon-angle-right arrow-icon"></i> </span> </li>
      <li> <a href="user_list.php">Users List</a> <span class="divider"> <i class="icon-angle-right arrow-icon"></i> </span> </li>
      <li class="active">User View</li>
    </ul>
    
    
    <!--.breadcrumb--> 
    
  </div>
  <div class="page-content">
  <?php   if($msg != ''){	echo $msg;}?>
    <div class="page-header position-relative">
      <h1>User  <small> <i class="icon-double-angle-right"></i> Details  </small> </h1>
    </div>
    <!--/.page-header-->
    
    <div class="row-fluid">
    
    
       
        
        
     
      <div class="span6"> 
        <!--PAGE CONTENT BEGINS-->
        
       <table>
       	<tr>
        	<th>Name</th>
            <td><?php echo $username;?></td>
        
        </tr>
        <tr>
        	<th>Email</th>
            <td><?php echo $user_email;?></td>
        
        </tr>
         <tr>
        	<th>Phone</th>
            <td><?php echo $user_phone;?></td>
        
        </tr>
       </table>
       
       </div>
     
      
      
      <!--/.span--> 
    </div>
    <!--/.row-fluid--> 
    
    <hr />
    
    <div class="row-fluid">
    
    <div class="span12 "> 
    <h3> Uploaded Feeds</h3>
    
    <table id="user_list" class="table table-striped table-bordered table-hover">
     <thead>
    	<tr>
        	<th>S.No.</th>
            <th>Date</th>
            <th>Images</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>
          <tbody>
    
   <?php 
   $sql="select * from $table_User_Progress where user_id='$hidden_id' order by id DESC";
    $select_Progress_details=mysql_query($sql) or die(mysql_error());
$select_count = mysql_num_rows($select_Progress_details);

	 $i='1';
		while($Progress_row = mysql_fetch_array($select_Progress_details)){
			
			
		$db_id=$Progress_row['id'];
		$db_selected_date=$Progress_row['selected_date'];		
		$db_images=$Progress_row['images'];
		$db_approval=$Progress_row['approval'];
		if($db_approval == 0){
		
		$status='<a href="#" class="label label-warning arrowed-in" data-toggle="modal" data-target="#waiting'.$db_id.'">Waiting</a>';
		}else if($db_approval == 1){
			$status='<a href="#" class="label label-success"  data-toggle="modal" data-target="#to_denial'.$db_id.'">approved</a>';
			}else if($db_approval == 2){
			$status='<a href="#" class="label label-inverse"  data-toggle="modal" data-target="#to_approval'.$db_id.'">Denied</a>';
			}
		
		?>
		
		<tr><td><?php echo $i; ?></td>
		<td><?php echo $db_selected_date; ?></td>
		<td><?php
		
		
		
		 
$array_val = explode("|",$db_images);

foreach($array_val as $val){
	
	?>
    <a href="assets/uploads/<?php echo $val; ?>" data-toggle="lightbox" data-gallery="multiimages<?php echo $db_id; ?>">
                                    <img src="assets/uploads/<?php echo $val; ?>" class="img-responsive" width="100">
                                </a>  
    <?php
	
	}

		?>
        
                              
                                
                                </td>
		
		<td><?php echo $status; ?>
        
        <!-- Waiting Modal-->
                
                <div id="waiting<?php echo $db_id; ?>" class="modal fade center" role="dialog" style="display: none;">
                  <div class="modal-dialog"> 
                    
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"> <i class=" icon icon-large icon-ban-circle  bigger-150" style="color:#f89406;"></i> Conform approve / deny</h4>
                      </div>
                      <div class="modal-body">
                        <h3> Do you want to approve / deny?</h3>
                        <form action="" method="post">
                        <input type="hidden" name="status_hidden_table" value="<?php echo $table_User_Progress;?>" />
                        <input type="hidden" name="status_hidden_id" value="<?php echo $db_id;?>" />
                        <button type="submit" class="btn btn-success" name="approval_submit" >Approval</button>
                        
                        <button type="submit" class="btn btn-danger" name="denial_submit" >Denial</button>
                        
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </form>
                      </div>
                      <!--div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div--> 
                    </div>
                  </div>
                </div>
                
        <!-- to Denial Modal-->
                
                <div id="to_denial<?php echo $db_id; ?>" class="modal fade center" role="dialog" style="display: none;">
                  <div class="modal-dialog"> 
                    
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"> <i class=" icon icon-large icon-ban-circle  bigger-150" style="color:#333333;"></i> Conform Denial</h4>
                      </div>
                      <div class="modal-body">
                        <h3> Do you want to deny?</h3>
                        <form action="" method="post">
                        <input type="hidden" name="status_hidden_table" value="<?php echo $table_User_Progress;?>" />
                        <input type="hidden" name="status_hidden_id" value="<?php echo $db_id;?>" />
                        <button type="submit" class="btn btn-danger" name="denial_submit" >Denial</button>
                        
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </form>
                      </div>
                      <!--div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div--> 
                    </div>
                  </div>
                </div>
                
                
                
                
                 <!-- to approval Modal-->
                
                <div id="to_approval<?php echo $db_id; ?>" class="modal fade center" role="dialog" style="display: none;">
                  <div class="modal-dialog"> 
                    
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"> <i class=" icon icon-large icon-check  bigger-150" style="color:#82af6f;"></i> Conform Approval</h4>
                      </div>
                      <div class="modal-body">
                        <h3> Do you want to approve?</h3>
                        <form action="" method="post">
                        <input type="hidden" name="status_hidden_table" value="<?php echo $table_User_Progress;?>" />
                        <input type="hidden" name="status_hidden_id" value="<?php echo $db_id;?>" />
                        <button type="submit" class="btn btn-success" name="approval_submit" >Approval</button>
                        
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </form>
                      </div>
                      <!--div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div--> 
                    </div>
                  </div>
                </div>
        
        
        
        
        </td>
		<td class="td-actions">
              <div class="action-buttons"> 
             
              <a class="red" data-toggle="modal" data-target="#delete<?php echo $db_id; ?>"  href="#" ><i class="icon-trash bigger-130"></i> </a> </div>
		
		
		
		 <!-- Delete Modal-->
                
                <div id="delete<?php echo $db_id; ?>" class="modal fade center" role="dialog" style="display: none;">
                  <div class="modal-dialog"> 
                    
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title"> <i class=" icon icon-large icon-ban-circle  bigger-150" style="color:#d15b47;"></i> Conform Delete</h4>
                      </div>
                      <div class="modal-body">
                        <h3> Do you want to delete?</h3>
                        <form action="" method="post">
                        <input type="hidden" name="del_hidden_table" value="<?php echo $table_User_Progress;?>" />
                        <input type="hidden" name="del_hidden_id" value="<?php echo $db_id;?>" />
                        <button type="submit" class="btn btn-danger" name="delete_submit" >Delete</button>
                        
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </form>
                      </div>
                      <!--div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div--> 
                    </div>
                  </div>
                </div>
				</td></tr>
		<?php
		$i++;
		
		
		}
	
	

    ?>
    </tbody>
    </table>
    
    </div>
     <!--/.span--> 
    </div>
    <!--/.row-fluid-->
    
    
  </div>
  <!--/.page-content--> 
  
</div>
<!--/.main-content-->
<?php include"footer.php";?>