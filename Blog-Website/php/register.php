<?php

if(isset($_POST['submit']))
{
if(isset($_POST['username'])){
	$uname=$_POST["username"];
	$pword=$_POST['password'];
	$cnfpass=$_POST['cnfpass'];
	$email=$_POST['email'];
		 
  $filename=$_FILES["file"]["name"];
   $image_dir= 'images/'.$filename;
  echo "Type: " . $_FILES["file"]["type"] . "<br>";
  echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>";
  $filetmp= $_FILES["file"]["tmp_name"];
  
  move_uploaded_file($filetmp, $image_dir);
  
	
if($pword==$cnfpass){

$servername = "localhost";
$username = "root";
$password = "ilove111mummy";
$db_name="blog";

// Create connection
$con=mysqli_connect("$servername", "$username", "$password", "$db_name");
if(mysqli_connect_errno()){
echo 'Failed to connect'.mysqli_connect_error();
exit();
}
else{
//echo "Done";	
}
$end_date=date('Y-m-d H:i:s', strtotime('+2 year', strtotime('today')));
if(mysqli_query($con,"INSERT INTO blogger(username,password,email,end_date,is_active,photo) VALUES('$uname','$pword','$email','$end_date','a','$image_dir')")){
	echo "DONE";
	
}else{
echo "Unable to execute query on database";
}




mysqli_close($con);


header("Location: ../login.php");
die();
//	echo $username."<br>";
//	echo $password."<br>";
//	echo $email."<br>";
}
}
}
?>



