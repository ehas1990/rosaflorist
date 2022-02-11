<?php
	if(isset($_POST['submit'])){
		$name=$_POST['your-name'];
		$email=$_POST['your-email'];
		$contact=$_POST['your-contact'];
	
		$msg=$_POST['your-message'];

		$to='info@dairytechsolutions.com'; // Receiver Email ID, Replace with your email ID
		$subject='Rosa Flower Shop';
		$message="Name :".$name."\n"."Phone :".$contact."\n".$msg ."/n".$email;
		$headers="From: ".$email;

		if(mail($to, $subject, $message, $headers)){
			echo "<h1>Sent Successfully! Thank you"." ".$name.", We will contact you shortly!</h1>";
		}
		else{
			echo "Something went wrong!";
		}
	}
?>