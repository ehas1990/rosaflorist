<?php
   error_reporting(E_ERROR | E_PARSE);
	if(isset($_POST['submit'])){
		$name=$_POST['name'];
		$email=$_POST['email'];
		$phone=$_POST['phone'];
	
		$message=$_POST['message'];
        $to = 'ehasalpha@gmail.com';
// 		$to='info@rosafloristdecors.com'; // Receiver Email ID, Replace with your email ID
     	$subject='Rosafloristdecors';
		$message="Name :".$name."\n\n"."Phone :".$phone."\n\n".$message;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
        
?>
