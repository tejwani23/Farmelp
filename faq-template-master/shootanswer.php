<?php

$username="root";
$password="";


$conn = new mysqli("localhost",$username,$password);

if($conn->connect_error){
	echo $conn->connect_error;
}


$sql = "Create database agro";
if($conn->query($sql)===true){
	echo "Database created successfully<br>";
}
else
	echo $conn->error;

$sql = "Use agro";
if($conn->query($sql)===true){
	echo "Using agro database<br>";
}
else
	echo $conn->error;

    $answer=$_POST['answer'];
    $question=$_POST['question'];


echo $answer."  ".$question;


	$sql="update queries set answer='$answer' where question='$question'";
	if($conn->query($sql)===TRUE)
	{
		echo "Updated in main records<br>";
	}
	else {
		echo $conn->error."<br>";
	}



?>