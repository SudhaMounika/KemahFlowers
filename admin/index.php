<?php 
include "../dbconnect.php";
$title="Dashboard";
$active_menu =basename($_SERVER['SCRIPT_NAME']);
$msg='';


if(!isset($_SESSION['au_session_login']) ){
	header("Location: login.php?e_msg=You must Login to Access");
	}
		
$session_id=$_SESSION['au_session_login_id'];
$session_username=$_SESSION['au_session_login_username'];





if(isset($_REQUEST['add_submit']) ){
	
	$user_id=$session_id;
	$file_path='assets/uploads/';
	$created_date=date('d-m-Y');
	
	
	$date=$_REQUEST['date'];
	
		
		
	
	$insert_count=0;
	$images='';
	foreach($_FILES['documents']['tmp_name'] as $key => $tmp_name){
		
		$random_digit=rand(0000,9999);
			
		
		$file_name = $created_date.'_'.$random_digit.'_'.$_FILES['documents']['name'][$key];
		$file_size =$_FILES['documents']['size'][$key];
		$file_tmp =$_FILES['documents']['tmp_name'][$key];
		$file_type=$_FILES['documents']['type'][$key];	
		
		$file_ext_temp=explode(".", $_FILES["documents"]["name"][$key]);	
		$file_ext=end($file_ext_temp);
		
		if(move_uploaded_file($file_tmp,$file_path.$file_name)){	
			
			if($images != '')		
				$images=$images.'|'.$file_name;
			else
				$images=$file_name;
				
			
		}
	}
	
	
	$insert=mysql_query("insert into $table_User_Progress(user_id,selected_date,images) values ('$user_id','$date','$images')") or die(mysql_error());	
	
	
			if($insert) {
		
		$msg= '<div class="alert alert-success">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Added Successfully!</strong></div>';
		
		}else{
			$msg= '<div class="alert alert-danger">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Error!</strong> </div>';
			
			}
	
	
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
	$den_hidden_table=$_REQUEST['den_hidden_table'];
	$den_hidden_id=$_REQUEST['den_hidden_id'];
	
	$delete_query=mysql_query("update $den_hidden_table set approval=0 WHERE id='$den_hidden_id'") or die(mysql_error());
	
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
	$app_hidden_table=$_REQUEST['app_hidden_table'];
	$app_hidden_id=$_REQUEST['app_hidden_id'];
	
	$delete_query=mysql_query("update $app_hidden_table set approval=1 WHERE id='$app_hidden_id'") or die(mysql_error());
	
	if($delete_query){
		
		$msg= '<div class="alert alert-success">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Approval Successfully!</strong>.</div>';
		
		}
	}
		
		
	
	}

include "header.php";

		

?>

<div class="main-content">
  <div class="breadcrumbs" id="breadcrumbs">
    <ul class="breadcrumb">
      <li> <i class="icon-home home-icon"></i> <a href="#">Home</a> <span class="divider"> <i class="icon-angle-right arrow-icon"></i> </span> </li>
      <li class="active">Dashboard</li>
    </ul>
    <!--.breadcrumb--> 
    
  </div>
  <div class="page-content">
    <div class="page-header position-relative">
      <h1> Dashboard <small> <i class="icon-double-angle-right"></i> overview </small> </h1>
    </div>
    <!--/.page-header-->
    
    <div class="row-fluid">
      <div class="span12"> 
        <!--PAGE CONTENT BEGINS-->
        
        <?php   if($msg != ''){	echo $msg;}?>
        <div class="space-12"></div>
        <div class=" infobox-container">
        
        
        
        
         <?php if(isset($_SESSION['au_session_login_admin']) ){?>
          <div class="infobox infobox-green  ">
            <div class="infobox-icon"> <i class="icon-user"></i> </div>
            <div class="infobox-data"> <span class="infobox-data-number"><?php echo $tot_admin;?></span>
              <div class="infobox-content">Admin</div>
            </div>
          </div>
          <div class="infobox infobox-green  ">
            <div class="infobox-icon"> <i class="icon-user"></i> </div>
            <div class="infobox-data"> <span class="infobox-data-number"><?php echo $tot_user;?></span>
              <div class="infobox-content">Users</div>
            </div>
          </div>
          <div class="infobox infobox-green  ">
            <div class="infobox-icon"> <i class="icon-user"></i> </div>
            <div class="infobox-data"> <span class="infobox-data-number"><?php echo $tot_progress;?></span>
              <div class="infobox-content">User Progress</div>
            </div>
          </div>
		  
		  
          
		  
          <?php }?> 
          
          
          
		  
		
        </div>
        
        
         <?php if(isset($_SESSION['au_session_login_user']) ){ 
		 
		 
	
		
	 
		 
		 $select_user_details=mysql_query("select * from $table_User where id='$session_id'") or die(mysql_error());
$select_user_details_count = mysql_num_rows($select_user_details);
if($select_user_details_count == 1){
	
		$user_row = mysql_fetch_array($select_user_details);
		
		
		$username=$user_row['username'];
		$user_email=$user_row['email'];
		$user_phone=$user_row['phone'];
	
	}else{
		
		
		}
		 
		 ?>
      
      <div class="row-fluid">
    
    <div class="span6"> 
       
       <form class="form-horizontal" method="post" action="index.php" enctype="multipart/form-data">
        
        <div class="control-group">
            <label for="date" class="control-label">Date</label>
            <div class="controls">
              <input type="text"  name="date" class="date_picker_materials"  value="" required>
            </div>
          </div>
          
          
          <div class="control-group">
            <label for="documents" class="control-label">Images</label>
            <div class="controls">
              <input name="documents[]" type="file" multiple required/>
            </div>
          </div>
          
          
          
          <div class="form-actions">
            <button type="submit" class="btn btn-info" name="add_submit"> <i class="icon-ok bigger-110"></i>Add Now </button>
            &nbsp; &nbsp; &nbsp;
            <button type="reset" class="btn"> <i class="icon-undo bigger-110"></i> Reset </button>
          </div>
        
      
              
             
        </form>
       
        
        
        
        
        <!--PAGE CONTENT ENDS--> 
      </div>
      
       <!--/.span--> 
       
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
   $sql="select * from $table_User_Progress where user_id='$session_id' order by id DESC";
    $select_Progress_details=mysql_query($sql) or die(mysql_error());
$select_count = mysql_num_rows($select_Progress_details);

	 $i='1';
		while($Progress_row = mysql_fetch_array($select_Progress_details)){
			
			
		$db_id=$Progress_row['id'];
		$db_selected_date=$Progress_row['selected_date'];		
		$db_images=$Progress_row['images'];
		$db_approval=$Progress_row['approval'];
		
		if($db_approval == 0){
		
		$status='<span class="label label-warning arrowed-in">Waiting</span>';
		}else if($db_approval == 1){
			$status='<span class="label label-success">approved</span>';
			}else if($db_approval == 2){
			$status='<span class="label label-inverse">Denied</span>';
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
                        <h3> Are you want to delete?</h3>
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
			  
			<?php  } ?>
		
		<div class="space-20"></div>
		
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