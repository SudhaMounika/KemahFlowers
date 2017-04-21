<?php
include "../dbconnect.php";

unset($_SESSION['au_session_login']);
unset($_SESSION['au_session_login_id']);
unset($_SESSION['au_session_login_username']);
unset($_SESSION['au_session_login_admin']);

unset($_SESSION['au_session_login_user']);






session_destroy();


		

    header("Location:login.php?s_msg=You have signed out");
	
?>