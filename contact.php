<?php 
$con=mysqli_connect("localhost","root","","myhmsdb");
if(isset($_POST['btnSubmit']))
{
	$name = $_POST['txtName'];
	$email = $_POST['txtEmail'];
	$contact = $_POST['txtPhone'];
	$message = $_POST['txtMsg'];
	$doctor = $_POST['txtDName'];

	$query="insert into contact(name,email,contact,doctor,message) values('$name','$email','$contact','$doctor','$message');";
	$result = mysqli_query($con,$query);
	
	if($result)
    {
    	echo '<script type="text/javascript">'; 
		echo 'alert("Feedback sent successfully!");'; 
		echo 'window.location.href = "contact.html";';
		echo '</script>';
    }
}