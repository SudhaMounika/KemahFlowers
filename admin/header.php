<?php

	if(isset($_REQUEST['s_msg'])){
		$msg= '<div class="alert alert-success">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Success!</strong> '.$_REQUEST['s_msg'].'.</div>';
		}
		
		if(isset($_REQUEST['e_msg'])){
		$msg= '<div class="alert alert-danger">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Error!</strong> '.$_REQUEST['e_msg'].'.</div>';
		}
		if(isset($_REQUEST['i_msg'])){
		$msg= '<div class="alert alert-info">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Warning!</strong> '.$_REQUEST['i_msg'].'.</div>';
		}
		
		
	    $tot_admin='0';
		$tot_user='0';
		$tot_progress='0';
		
		$tot_admin_Select=mysql_query("select *  from $table_User where user_level=1");
		$tot_admin = mysql_num_rows($tot_admin_Select);
		
		$tot_user_Select=mysql_query("select *  from $table_User where user_level=0");
		$tot_user = mysql_num_rows($tot_user_Select);
		
		$tot_progress_Select=mysql_query("select *  from $table_User_Progress");
		$tot_progress = mysql_num_rows($tot_progress_Select);
		
		
		
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title><?php echo $title; ?></title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!--basic styles-->

		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />



		<link rel="stylesheet" href="assets/css/jquery-ui-1.10.3.custom.min.css" />
		<link rel="stylesheet" href="assets/css/chosen.css" />
		<link rel="stylesheet" href="assets/css/datepicker.css" />
		<link rel="stylesheet" href="assets/css/bootstrap-timepicker.css" />
		<link rel="stylesheet" href="assets/css/daterangepicker.css" />
		<link rel="stylesheet" href="assets/css/colorpicker.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!--page specific plugin styles-->

		<!--fonts-->

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />
		<!--ace styles-->

		<link rel="stylesheet" href="assets/css/ace.min.css" />
		<link rel="stylesheet" href="assets/css/ace-responsive.min.css" />
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />

		<!--[if lte IE 8]>
        <link rel="stylesheet" href="assets/css/dataTables.bootstrap.css" />
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
        
		<![endif]-->

		<!--inline styles related to this page-->
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    
    <!--table with export
    <link rel="stylesheet" href="assets/css/dataTables.bootstrap.css" />-->
    
    
    
    
    
    <!--page specific plugin styles-->

		<link rel="stylesheet" href="assets/css/fullcalendar.css" />
        
        
        
   
    </head>

	<body>
		<div class="navbar">
			<div class="navbar-inner">
				<div class="container-fluid">
					<a href="" target="_blank" class="brand">
						<small>
							<i class="icon-leaf"></i>
							Admin User
						</small>
					</a><!--/.brand-->


					<ul class="nav ace-nav pull-right">
						
                       <li>
                       <a href="../home.php"><h3 style="margin-top: 2px ! important;"><i class="icon-arrow-left" style="font-size: 25px; margin-right: 10px; color: palevioletred;"></i>Back To Home</h3></a>
                       </li>

						<li class="light-blue">
							<a data-toggle="dropdown" href="#" class="dropdown-toggle">
								<img class="nav-user-photo" src="assets/avatars/user.jpg" alt="Admin" />
								<span class="user-info">
									<small>Welcome,</small>
									<?php echo $_SESSION['au_session_login_username']; ?>
								</span>

								
                                
							</a>

							
						</li>
					</ul><!--/.ace-nav-->
				</div><!--/.container-fluid-->
			</div><!--/.navbar-inner-->
		</div>

		<div class="main-container container-fluid">
			<a class="menu-toggler" id="menu-toggler" href="#">
				<span class="menu-text"></span>
			</a>

			<div class="sidebar" id="sidebar">
				<div class="sidebar-shortcuts" id="sidebar-shortcuts">
					<div class="sidebar-shortcuts-mini" id="sidebar-shortcuts-mini">
						<span class="btn btn-success"></span>

						<span class="btn btn-info"></span>

						<span class="btn btn-warning"></span>

						<span class="btn btn-danger"></span>
					</div>
				</div><!--#sidebar-shortcuts-->

				<ul class="nav nav-list">
				
				
					<li class="<?php if($active_menu == 'index.php'){ echo 'active'; }?>">
						<a href="index.php">
							<i class="icon-dashboard"></i>
							<span class="menu-text"> Dashboard </span>
						</a>
					</li>
					
					<?php if(isset($_SESSION['au_session_login_admin']) ){?>
					 <li class="<?php if($active_menu == 'user_list.php' || $active_menu == 'user_add.php' || $active_menu == 'user_edit.php' || $active_menu == 'user_view.php'){ echo 'active'; }?>">
						<a href="user_list.php">
							<i class="icon-user"></i>
							<span class="menu-text"> User List</span>
						</a>
					</li>
					
					
					
                  
                   
                    <?php } ?>
                    
                    
                    
                    
                    <li>
									<a href="logout.php">
										<i class="icon-off"></i>
                                        <span class="menu-text"> Logout </span>
										
									</a>
								</li>
                    
                    
                    
					
                    
                   

				</ul><!--/.nav-list-->
                <div class="sidebar-collapse" id="sidebar-collapse">
					<i class="icon-double-angle-left"></i>
				</div>
			</div>