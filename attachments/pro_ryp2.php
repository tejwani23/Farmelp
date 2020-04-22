<?php
//session_start();
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysql_connect($servername, $username, $password);

if(!$conn)
{
die("failed".mysql_error());
}

//echo "success <br>";



$sql=mysql_select_db('agro',$conn);

if(!$conn)
{
die("failed".mysql_error());
}

//echo "success <br>";

$sql = "create table invest(crop varchar(20),price int,address varchar(100),image varchar(100),hinditext varchar(100);";
mysql_query($sql,$conn);

// if(!$c)
// {
// 	die("failed".mysql_error());
// }

//echo "Successfully inserted  into a table<br><br>";



$crop=$_POST["crop"];
$price=$_POST["price"];
$address=$_POST["address"];
echo"<p> $crop $price $address </p>";
//$primary=$_SESSION['email'];
$image=$_POST['image'];
$hinditext=$_POST['hinditext'];
//echo"<p> $primary </p>";
echo"<p> $image </p>";
$sql="insert into invest(crop,price,address,image,hinditext)"."values('$crop','$price','$address','$image','$hinditext')";

$c=mysql_query($sql,$conn);

if(!$c)
{
	die("failed".mysql_error());
}

//echo "Successfully inserted  into a table<br><br>";

echo "<a href=\"../index.html\"><button>BACK TO HOME</button></a><br><h3>THANKYOU FOR YOUR RESPONSE. WE HAVE RECORDED IT</H3>";

mysql_close($conn);

?>
