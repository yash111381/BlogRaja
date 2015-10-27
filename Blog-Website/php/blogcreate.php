<?php

if(isset($_POST['blogsubmit']))
{
if(isset($_POST['title']) and isset($_POST['category'])){
	$title=$_POST["title"];
	$category=$_POST['category'];
	$desc=$_POST['desc'];
	 $filename=$_FILES["file"]["name"];
   $blogphoto= 'images/'.$filename;
   $filetmp= $_FILES["file"]["tmp_name"];
   move_uploaded_file($filetmp, $blogphoto);

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
$blogger_id=$_GET['id'];

$testsql="SELECT username,is_active from blogger where id='$blogger_id'";
$result = mysqli_query($conn, $testsql);
$row = mysqli_fetch_assoc($result);
$uname1=$row["username"];
$is_active=$row["is_active"];

$impdtae=date('Y-m-d H:i:s');



if($is_active=='a'){


$sql1 = "INSERT INTO master (blog_category, blog_desc, blog_title, blogger_id,blog_author,blog_is_active,creation_date,update_date)
VALUES ('$category', '$desc', '$title', '$blogger_id','$uname1','$is_active','$impdtae','$impdtae')";
if (mysqli_query($conn, $sql1)) {
   // echo "New record created successfully";
} else {
    echo "<h1>Error: " . $sql1 . "<br>" . mysqli_error($conn)."</h1>";
}


$testsql1="SELECT blog_id from master WHERE blogger_id='$blogger_id' AND blog_title='$title'";
$result = mysqli_query($conn, $testsql1);
$row = mysqli_fetch_assoc($result);
$uid=$row["blog_id"];


$sql = "INSERT INTO detail (blog_category, blog_desc, detail_image, blog_title, blog_id, id)
VALUES ('$category', '$desc', '$blogphoto','$title', '$uid','$blogger_id')";

if (mysqli_query($conn, $sql)) {
   // echo "New record created successfully";
} else {
    echo "<h1>Error: " . $sql . "<br>" . mysqli_error($conn)."</h1>";
}

mysqli_close($conn);
header("Location: viewBlog.php?id=".$blogger_id);
die();

}
else{
header("Location: login.php");
die();	
}



}
}

?>