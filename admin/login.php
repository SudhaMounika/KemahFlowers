<?php
include "../dbconnect.php";
$msg='';
if(isset($_SESSION['au_session_login'])){
	header("Location: index.php?i_msg=Already Loged in");
}

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
		
		
//Login form Submit
if(isset($_REQUEST['login_submit'])){
	
	$log_username=mysql_real_escape_string($_REQUEST['log_username']);
	$log_password=mysql_real_escape_string($_REQUEST['log_password']);
	
	
	$log_query=mysql_query("select * from $table_User where username= '$log_username' and password = '$log_password' ") or die(mysql_error());
	
	$log_rows = mysql_num_rows($log_query);
	
	if($log_rows == 1){
		
		$log_row = mysql_fetch_array($log_query);
		
		$login_id=$log_row['id'];
		$username=$log_row['username'];
		$user_level=$log_row['user_level'];
		$user_email=$log_row['email'];
		
		$_SESSION['au_session_login'] = '1'; 							// SESSION : Login
		$_SESSION['au_session_login_id'] = $login_id;					// SESSION : Login User Id
		$_SESSION['au_session_login_username'] = $username;	// SESSION : Login user first name
		
		$_SESSION['au_session_login_email'] = $user_email;	// SESSION : Login user first name
		
		if($user_level == 1){
			$_SESSION['au_session_login_admin'] = '1';   				// SESSION : Login admin
			}else{
				$_SESSION['au_session_login_user'] = '1';
				
				}
		
		header("Location: index.php?s_msg=You have now logged ");
		
	}else{
		
		$msg= '<div class="alert alert-danger">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Error!</strong> Pleace Check Your Information</div>';
		
		}
	
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
	
	$msg= '<div class="alert alert-success">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Registration successfully!</strong> </div>';
		}else{
			
			$msg= '<div class="alert alert-danger">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<strong>Error!</strong> Pleace Try again for Registration</div>';
		
			}
	
}



?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Login Here</title>

		<meta name="description" content="overview &amp; stats" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!--basic styles-->

		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="assets/css/bootstrap-responsive.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />

		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->

		<!--page specific plugin styles-->

		<!--fonts-->

		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Open+Sans:400,300" />
    <link href="../css/viewbox.css" rel="stylesheet">	
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
    
    </head>


	<body class="login-layout">
    <div class="space-24"></div>
		<div class="main-container">
			<div class="main-content">
				<div class="row">
					<div class="col-sm-10 col-sm-offset-1">
						<div class="login-container">
							

							<div class="space-6"></div>
<div class="row-fluid">
							<div class="position-relative">
								<div id="login-box" class="login-box visible widget-box no-border">
									<div class="widget-body">
										<div class="widget-main">
										<h1>
									<span class="red">Admin/User</span>
									<span class="red" id="id-text2">Login</span>
								</h1>
                                <?php   if($msg != ''){	echo $msg;}?>
											<h4 class="header blue lighter bigger">
												<i class="ace-icon fa fa-coffee green"></i>
												Please Enter Your Information
											</h4>

											<div class="space-6"></div>

											<form action="login.php" method="post">
												<fieldset>
													<label class="block clearfix">
                                                    
														<span class="block input-icon input-icon-right">
															<input type="text" class="span12" name="log_username" placeholder="Username" required/>
															<i class="ace-icon icon-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="span12" name="log_password" placeholder="Password" required/>
															<i class="ace-icon icon-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
														

														<button type="submit" name="login_submit" class="width-35 pull-right btn btn-sm btn-primary">
															<i class="ace-icon fa fa-key"></i>
															<span class="bigger-110">Login</span>
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>

										</div><!-- /.widget-main -->
                                        
                                        <div class="toolbar clearfix">
												<div class="">
													<a href="../home.php"><i class="icon-arrow-left" style="color: rgb(204, 255, 119);"></i> <span style="color: rgb(204, 255, 119);">Back To Home</span> </a>
												</div>

												<div>
													<a href="#" onclick="show_box('signup-box'); return false;" class="user-signup-link">
														I want to register
														<i class="icon-arrow-right"></i>
													</a>
												</div>
											</div>

										
									</div><!-- /.widget-body -->
								</div><!-- /.login-box -->
                                
                                <div id="signup-box" class="signup-box widget-box no-border">
										<div class="widget-body">
											<div class="widget-main">
												<h4 class="header green lighter bigger">
													<i class="icon-group blue"></i>
													New User Registration
												</h4>

												<div class="space-6"></div>
												<p> Enter your details to begin: </p>

												<form />
													<fieldset>
														

														<label>
															<span class="block input-icon input-icon-right">
																<input type="text" class="span12" name="username" placeholder="Username" required/>
																<i class="icon-user"></i>
															</span>
														</label>

														<label>
															<span class="block input-icon input-icon-right">
																<input type="password" class="span12" name="password" id="password1" placeholder="Password" required/>
																<i class="icon-lock"></i>
															</span>
														</label>

														<label>
															<span class="block input-icon input-icon-right">
																<input type="password" class="span12" id="password2" placeholder="Repeat password" required/>
																<i class="icon-retweet"></i>
															</span>
														</label>
                                                        
                                                        <label>
															<span class="block input-icon input-icon-right">
																<input type="email" class="span12" name="email" placeholder="Email" required/>
																<i class="icon-envelope"></i>
															</span>
														</label>
                                                        
                                                        <label>
															<span class="block input-icon input-icon-right">
																<input type="text" class="span12" name="phone" placeholder="Phone" required/>
																<i class="icon-phone"></i>
															</span>
														</label>

														

														<div class="space-12"></div>

														<div class="clearfix">
															<button type="reset" class="width-30 pull-left btn btn-small">
																<i class="icon-refresh"></i>
																Reset
															</button>

															<button type="submit" class="width-65 pull-right btn btn-small btn-success" name="add_submit">
																Register
																<i class="icon-arrow-right icon-on-right"></i>
															</button>
														</div>
													</fieldset>
												</form>
											</div>

											<div class="toolbar center">
												<a href="#" onclick="show_box('login-box'); return false;" class="back-to-login-link">
													<i class="icon-arrow-left"></i>
													Back to login
												</a>
											</div>
										</div><!--/widget-body-->
									</div><!--/signup-box-->

							</div><!-- /.position-relative -->
                            </div>

							
						</div>
					</div><!-- /.col -->
				</div><!-- /.row -->
			</div><!-- /.main-content -->
		</div><!-- /.main-container -->

		<!-- basic scripts -->

		<!--[if !IE]> -->
		<script type="text/javascript">
			window.jQuery || document.write("<script src='assets/js/jquery.js'>"+"<"+"/script>");
		</script>

		<!-- <![endif]-->

		<!--[if IE]>
<script type="text/javascript">
 window.jQuery || document.write("<script src='assets/js/jquery1x.js'>"+"<"+"/script>");
</script>
<![endif]-->
		<script type="text/javascript">
			if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.js'>"+"<"+"/script>");
		</script>
        
        <script src="assets/js/bootstrap.min.js"></script>

		<!--page specific plugin scripts-->

		<!--ace scripts-->

		<script src="assets/js/ace-elements.min.js"></script>
		<script src="assets/js/ace.min.js"></script>

		<!--inline scripts related to this page-->

		<script type="text/javascript">
			function show_box(id) {
			 $('.widget-box.visible').removeClass('visible');
			 $('#'+id).addClass('visible');
			}
		</script>

		<!-- inline scripts related to this page -->
		<script type="text/javascript">
			jQuery(function($) {
			 $(document).on('click', '.toolbar a[data-target]', function(e) {
				e.preventDefault();
				var target = $(this).data('target');
				$('.widget-box.visible').removeClass('visible');//hide others
				$(target).addClass('visible');//show target
			 });
			});
			
			
			
		</script>
        
        
         <script type="text/javascript">
		 
		 $("#password2").keyup(function(e) {
			 
			 
			 
			 var password = document.getElementById("password1").value;
        var confirmPassword = document.getElementById("password2").value;
        if (password != confirmPassword) {
            document.getElementById("password2").setCustomValidity("Passwords Don't Match");
            
        }else{
			 document.getElementById("password2").setCustomValidity('');
			}
    
   

		 });

    function Validate() {
        
        return true;
    }
</script>



	</body>
</html>
