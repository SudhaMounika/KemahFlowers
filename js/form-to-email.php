<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}
$name = $_POST['firstName'];
$visitor_email = $_POST['email'];
$message = $_POST['message'];


$email_subject = "New Form submission";
$email_body = "You have received a new message from the user $name.\n".
    "Here is the message:\n $message".
    
$to = "jenifer.3690@gmail.com";//<== update the email address
//$headers = "From: $email_from \r\n";
//$headers .= "Reply-To: $visitor_email \r\n";
//Send the email!
mail($to,$email_subject,$email_body);


//done. redirect to thank-you page.
$prompt = "Thanks for Contacting us.We will get back to you shortly";
echo "<script type='text/javascript'>
alert('$prompt'); 
location.href='http://kemahflowersandcompany.com';
 </script>";


   
?> 