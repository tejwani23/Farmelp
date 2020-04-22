<?php
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

$crop=$_POST["crop"];
$budget=$_POST["budget"];
?>
<head>
<link href="https://fonts.googleapis.com/css?family=Lato:700" rel="stylesheet">
<style type="text/css">
	h1{
		text-align: center;
		font-family: 'Lato', sans-serif;
		font-size: 250%;
		color: white;
	}
	.room{
		border: solid 2px white;
		width: 880px;
		background-color: rgba(0,0,0,0.8);
		position: relative;
		left: 50%;
		transform: translate(-50%,0);
	}
	.desc{
		color: white;
		text-align: center;
		font-family: 'Lato', sans-serif;
		font-size: 200%;
		margin: 0;
	}
</style>
</head>
<?php
echo "<body style='background-image:url(images/background/img3.jpg);'>
<h1 >SHOWING RESULTS OF:</h1>
     <p class='desc'> CROP=$crop <br>
          BUDGET=$budget </p><br>";

$sql="select crop,price,address,image from invest WHERE crop='$crop' AND price<$budget";
$result=mysql_query($sql);

while($row=mysql_fetch_array($result))
{
	//echo "<span><img src='$row['IMAGE']'></span>";
	//echo $row['LOCATION']." ".$row['RENT']." ".$row['ADDRESS']."<br>";
	echo "<div class='room'>";
	echo '<a href="pro_fys3.php" ><img src="images/' . $row['image'] . '" alt="image not found" class="image" 
	 height="450px" width="880px"><br><br><br></a>';
	 echo "<p class='desc'>";
	echo "PRICE: " . (string)$row['price'];
	echo "</p>";
	echo "</div>";
	echo "<br>";
}
mysql_close($conn);

?>
