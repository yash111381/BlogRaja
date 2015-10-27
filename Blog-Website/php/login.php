<?php
include_once "session.php";
if(isset($_POST['submit']))
{
if(isset($_POST['username']) and isset($_POST['password'])){
	$uname=$_POST["username"];
	$pword=$_POST['password'];
	


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

if($uname=='master' && $pword=='king'){
	header("Location: master.php");
	die();
}

$sql = "SELECT id, username, email, create_date, end_date, update_date, is_active, photo FROM blogger WHERE username='$uname' AND password='$pword'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $row = mysqli_fetch_assoc($result);
	$idimp=$row["id"];
	$maruName=$row["username"];
	$maruEmail=$row["email"];
	$maruCreateDate=$row["create_date"];
	$maruUpdateDate=$row["update_date"];
	$maruEndDate=$row["end_date"];
	$maruIsActive=$row["is_active"];
	$maruPhoto=$row["photo"];
     //   echo "<h1>id: " . $row["id"]. " <br> Name: " . $row["username"]. " <br>  Email: " . $row["email"]. "<br><br></h1>";
    
} else {
    echo "0 results";
}





mysqli_close($conn);
//header("Location: ../login.php");
//die();
//	echo $username."<br>";
//	echo $password."<br>";
//	echo $email."<br>";

}
}
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/login.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" media="screen" href="../css/login.css" type="text/css"/>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Untitled Document</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<link rel="stylesheet" media="screen" href="../css/userlogin.css" type="text/css"/>

<!-- InstanceEndEditable -->
</head>

<body>

<div id="wrapper">
<div id="logo">
	<img src="../images/logo.jfif" alt="Logo" />
</div>
<div id="heading">
	<h1>BLOG-RAJA</h1>
</div>

<div id="tabs">
<ul id="listTabs">
	<li id="lis"><a href="logout.php">LOGOUT</a></li>
    
</ul>
</div>
<!--<div id="imgleft">
	<img src="images/Namaste.jpg" alt="Namaste" height="300" width="300" />
</div>

<div id="imgright">
	<img src="images/Namaste.jpg" alt="Namaste" height="300" width="300" />
</div>-->
<!-- InstanceBeginEditable name="EditRegion3" -->




<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="EditRegion4" -->




<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="EditRegion5" -->
<h1 id="viewBlog"> <?php echo "<a href='viewBlog.php?id=$idimp'>View All</a>";?></h1>
<h1 id="createBlog"> <?php echo "<a href='createBlog.php?id=$idimp'>Create New Blog</a>";?></h1>
<!--<h2 id="user">   </h2>
-->



<img id="userPhoto" src=" <?php echo $maruPhoto;?>" width="300" height="200"/>

<table id="userInfo" width="40%"  cellspacing="10" cellpadding="5" align="center">
  	<tr id="tableHead">
      <th colspan="2" width="100%" align="center"><strong>USER DETAILS:</strong></th>
      
    </tr>
  
   <tr>
      <td width="15%" id="heads"><strong>Username:</strong></td>
      <td width="85%" id="detail">
        <?php echo $maruName;?></td>
    </tr>
  <tr>
      <td width="15%" id="heads"><strong>Email-ID:</strong></td>
      <td width="85%" id="detail">
        <?php echo $maruEmail;?></td>
    </tr>

  <tr>
      <td width="15%" id="heads"><strong>Create Date:</strong></td>
      <td width="85%" id="detail">
        <?php echo $maruCreateDate;?></td>
    </tr>

  <tr>
      <td width="15%" id="heads"><strong>Update Date:</strong></td>
      <td width="85%" id="detail">
        <?php echo $maruUpdateDate;?></td>
    </tr>

  <tr>
      <td width="15%" id="heads"><strong>End Date:</strong></td>
      <td width="85%" id="detail">
        <?php echo $maruEndDate;?></td>
    </tr>

  <tr>
      <td width="15%" id="heads"><strong>Account Active:</strong></td>
      <td width="85%" id="detail">
        <?php if($maruIsActive=='a'){
				echo "YES";
		}else
		echo "NO";?></td>
    </tr>

</table>
<!-- InstanceEndEditable -->
<div id="foot">
	<p> For further details, email us at abc.xyz@gmail.com</p>
</div>
</div>

</body>
<!-- InstanceEnd --></html>
