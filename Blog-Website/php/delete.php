<?php

	
	$blog_id=$_GET['blogid'];
	


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

$testsql1="SELECT blog_title,id,blog_desc,blog_category from detail WHERE blog_id='$blog_id'";
$result = mysqli_query($conn, $testsql1);
$row = mysqli_fetch_assoc($result);
$preblog_title=$row["blog_title"];
$preblog_desc=$row["blog_desc"];
$preblog_category=$row["blog_category"];
$idimp=$row["id"];


$sql1 = "DELETE FROM master WHERE blog_id='$blog_id'";
if (mysqli_query($conn, $sql1)) {
   // echo "New record created successfully";
} else {
    echo "<h1>Error: " . $sql1 . "<br>" . mysqli_error($conn)."</h1>";
}

$sql = "DELETE FROM detail WHERE blog_id='$blog_id'";

if (mysqli_query($conn, $sql)) {
   // echo "New record created successfully";
} else {
    echo "<h1>Error: " . $sql . "<br>" . mysqli_error($conn)."</h1>";
}

mysqli_close($conn);
header("Location: viewBlog.php?id=".$idimp);
die();

	?>