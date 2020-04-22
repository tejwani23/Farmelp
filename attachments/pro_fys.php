<!DOCTYPE html>
<html>
<head>
	<title>FIND YOUR STAY</title>
</head>
<style >
	body{
	margin: 0;
	padding: 0;
	background-image: url(img1/i4.jpg);
	background-size: cover;
	~webkit-background-size: cover;
	font-family: Tahoma ,sans-serif;
}
.form-area{
	position: absolute;
	top: 50%;
	left :50%;
	transform: translate(-50%,-50%);
	width: 500px;
	height: 450px;
	box-sizing: border-box;
	background :rgba(0,0,0,0.5);
	padding: 40px;
}

h3{
	margin: 0;
	padding: 0 0 20px;
	font-weight: bold;
	color: #ffffff; 
	font-size: 20px;
}

.form-area p{
	margin: 0;
	padding: 0;
	font-weight: bold;
	color: #ffffff;
}

.form-area input,select{
	margin-bottom: 10px;
	width: 100%;

}

.form-area input[type="text"],
.form-area input[type="password"],
.form-area input[type="email"],
.form-area input[type="number"]

{
	border: none;
	border-bottom: 1px solid #ffffff;
	background-color: transparent;
	outline: none;
	height: 40px;
	color: #ffffff;
	display: 16px;
}

/*.form-area select{
	background-color: transparent;
	color: #ffffff;

}*/
/*.form-area option{
	text-align: center;
}*/


.form-area select{
		margin-top: 20px;
		padding: 10px 0;
		border-radius: 20px;
		text-align: center;
}

.form-area button[type="submit"]{
	width: 100%;
	border: none;
	height: 40px;
	outline: none;
	color: #ffffff;
	font-size: 15px;
	background-color: tomato;
	cursor: pointer;
	border-radius: 20px;
}

form-area input[type="submit"]:hover{
	background-color: cyan;
	color: #ffffff;
}




</style>
<body>
<div class="form-area">
	<h3>FIND YOUR LAND</h3>
	<p>Got a great business plan? Go ahead!<br>Got a great proposal? Go ahead!<br></p>
	<form  method="POST" action="pro_fys2.php">

		   <p>CROP:</p>
    <select name="crop" required>
    <option value="wheat">wheat</option>
    <option value="bajra">bajra</option>
    <option value="rice">rice</option>
    </select>
		<br><br><br>
		<p>BUDGET:</p>
		<input type="number" name="budget" required="">
		<br><br>

		<button type="submit">FIND</button>
	</form>
</div>	
	<!-- <h1>FIND YOUR STAY</h1>
	<form  method="POST" action="pro_fys2.php">

		LOCALITY:
		    <input type="radio" name="location" value="Sector 62">Sector 62
		    <input type="radio" name="location" value="Indirapuram">Indirapuram
		    <input type="radio" name="location" value="Sector 63">Sector 63
		
		
		<br><br>
		BUDGET:<input type="number" name="budget">
		<br><br>

		<button type="submit">FIND</button>
	</form> -->
</body>
</html>