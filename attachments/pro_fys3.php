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
?>
<head>
<style type="text/css">
	body{
		background-color: black;
		//background-image: url(images/background/img1.jpg);
		//background-repeat: repeat;
		//background-size: 600px 600px;
	}
	.image{
		position: relative;
		left: 50%;
		transform: translate(-50%,0);
	}
	.desc{
		color: white; margin-left:0px; //font:cursive; font-weight:700; font-size:25px;
		font-family: 'Lato', sans-serif;
		padding-left: 30px;
	}
	.value{
		color: white;
		font-family: 'Open Sans', sans-serif;
		padding-left: 30px;
	}
	#button{
		background-color: 	rgba(123,104,238, 0.9); /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-left: 30px;
	}
</style>
<link href="https://fonts.googleapis.com/css?family=Lato:700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans|Permanent+Marker" rel="stylesheet">
</head>
<?php
$sql=mysql_select_db('agro',$conn);

	$sql="select crop,price,address,image from invest where ;";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	echo "<body >";
	echo '<img src="images\\' . $row['IMAGE'] . '" height="450px" width="880px" class="image">' ;
	echo "<p class='desc'>Location:</p>";
	echo "<p class='value'>";
	echo $row['LOCATION'] ;
	echo "</p>";
	echo "<p class='desc'>Rent:</p>"; 
	echo "<p class='value'>";
	echo (string)$row['RENT'];
	echo "</p>";
	echo "<p class='desc'>Address:</p>"; 
	echo "<p class='value'>";
	echo $row['ADDRESS'];
	echo "</p>";
	echo "<p class='desc'>Room-Id:</p>";
	echo "<p class='value'>";
	echo $row['ROOM_ID'] ;
	echo "</p>";
	echo "<p class='desc'>Landlord's Email:</p>";
	echo "</p>";
	echo "<p class='value'>";
	echo $row['L_EMAIL'] ;
	echo "</p>";
	$_SESSION['roomid'] = $_GET['room'];
	echo '<br> <br><a href="pro_fys4.php"><button type=submit id="button" name="ryp">Rent this Place</button>';

?>