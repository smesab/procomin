<?php 

if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	
	$mailTo = "gerencia@procomin.co";
	$mailheader = "From:".$email;

	$formcontent="From:".$name.".\n".$message;

	$subject = "Contact Form";

	mail($mailTo, $subject, $formcontent, $mailheader);
	echo "Thank You!";
}
?>