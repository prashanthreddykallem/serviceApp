<!DOCTYPE html>
<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="stylehp.css">
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
		<link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.blue_grey-indigo.min.css" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
		
	</head>
<body>
<div class="main">
<h5 style="color:#FFFFFF;">Thank You <?php echo $_POST["userFN"] ?></h1>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "serviceproject";

$firstName=  $_POST["userFN"];
$lastName=$_POST["userLN"];
$email=  $_POST["userEmail"];
$pwd=  $_POST["userPWD"];

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO userdetails (First_Name,Last_Name,Email,pass )
VALUES ('$firstName','$lastName', '$email','$pwd')";
 

if ($conn->query($sql) === TRUE) {
   echo " <h5 style='color:#FFFFFF;'> Your Response has been recorded  </h5> ";
} else {
    echo "<h5 style='color:#FFFFFF;'>Please Enter all the details properly</h5>";
}

$conn->close();
?>
<button type="button" class="mdl-button mdl-js-button mdl-button--raised  mdl-button--colored butn" onclick="location.href='index.html'">Back To Home Page </button>

</body>
</html>