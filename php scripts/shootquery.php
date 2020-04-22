<?php

$username="root";
$password="";


$conn = new mysqli("localhost",$username,$password);

if($conn->connect_error){
	echo $conn->connect_error;
}


$sql = "Create database agro";
$conn->query($sql);

$sql = "Use agro";
$conn->query($sql);

$sql = "create table queries(fname varchar(20), email varchar(20), subject varchar(20), question varchar(100),answer varchar(1000))";
$conn->query($sql);

// -----------------------------------------------------------------------------------------------------
if (isset($_POST['fname'])){
	$fname = $_POST["fname"];
}
else echo "Can't leave Name empty";


if (isset($_POST['email']))
{
	$email = $_POST["email"];
}
else echo "Can't leave email empty";


if (isset($_POST['subject']))
{
	$subject = $_POST["subject"];
}
else echo "Can't leave pass empty";

if (isset($_POST['question']))
{
	$question = $_POST["question"];
}
else echo "Can't leave pass empty";




if($fname == '' || $email == '' || $question == ''){
	echo "<script type='text/javascript'>alert(\"You cannot leave any input field empty\");</script>";
} 

else{
	$sql="Insert into queries(fname,email,subject,question) values('$fname', '$email', '$subject','$question');";
	$conn->query($sql);
	}

echo "<a href=\"../index.html\"><button>BACK TO HOME</button></a><br><h3>THANKYOU FOR YOUR RESPONSE. WE HAVE RECORDED IT</H3>"


?>