<?php

	$id=$_GET['id'];
	
if(isset($_POST['update']))
{

$servername = "localhost";
$username = "root";
$password = "ilove111mummy";
$db_name="blog";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_name);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$active=$_POST["is_active"];


$sql1 = "UPDATE blogger SET is_active='$active' WHERE id='$id'";
if (mysqli_query($conn, $sql1)) {
   // echo "New record created successfully";
} else {
    echo "<h1>Error: " . $sql1 . "<br>" . mysqli_error($conn)."</h1>";
}


mysqli_close($conn);
header("Location: master.php");
die();
}
?>