<?php
session_start();
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysql_connect($servername, $username, $password);

if(!$conn)
{
die("failed".mysql_error());
}

echo "success <br>";


$sql=mysql_select_db('agro',$conn);

if(!$conn)
{
die("failed".mysql_error());
}

echo "success <br>";
$query = 'UPDATE jiit_student SET HOUSE_ID = ' . (string)$_SESSION['roomid'] . ' WHERE EMAIL = \'' . (string) $_SESSION['email'] . '\';';
$result=mysql_query($query,$conn);
$query = 'UPDATE rooms SET RENTED_TO = \'' . (string)$_SESSION['email'] . '\' WHERE ROOM_ID = ' . (string)$_SESSION['roomid'] . ';';
$result=mysql_query($query,$conn);
?>