<?php 
if (isset($_POST['reg']))
	{
	  $name = $_POST['rname'];
	  $mail = $_POST['remail'];
	  $address = $_POST['raddress'];
	  $phone = $_POST['rphone'];
	  $course = $_POST['course'];
	 
	{
	$query="INSERT INTO reg (name, email, address,phone,course) VALUES ('$name', '$mail', '$address', '$phone', '$course')";

			  
		if ($db->query($query) === TRUE) 
			{	
		echo "<script>alert('Registration Successful');window.location.href='index.html';</script>";
			}
	}
	
	else 
			{
			echo "<script>alert('Already Registered');window.location.href='index.html';</script>";
			  
			}
	  }
	  
?>