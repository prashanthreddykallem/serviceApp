<html>
    <head>
        <title> Welcome </title>
    </head>
    <body>
        <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "serviceproject";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$uid=$_POST['inputUsername'];
$pass=$_POST['inputPassword'];

// echo "<h5 >".$uid ;

$sql = "SELECT *  FROM expertdetails where Email='$uid' AND pass='$pass'  ";
$result = $conn->query($sql);
echo $result->num_rows ;
session_start(); // Starting Session

if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()){
		
        $_SESSION['login_user']=$row["First_Name"]; // Initializing Session
        echo "<h5 style='color:#515151;'>Welcome " .$row["First_Name"] . "Expert";

		}
    }
 else {
	echo "<h5 style='color:#515151;'>Invalid Username or Password</h5>";	
	
	header("Location: expertLogin.html");
	exit(1);
 	}



?>

</body>
