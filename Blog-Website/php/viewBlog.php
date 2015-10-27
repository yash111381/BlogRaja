<?php
$servername = "localhost";
$username = "root";
$password = "ilove111mummy";
$dbname="blog";
include_once "session.php";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$idno=$_GET['id'];
$sql = "SELECT detail_image, blog_title, blog_desc, blog_category, blog_id FROM detail WHERE id='$idno'";
$result = mysqli_query($conn, $sql);


//header("Location: Website/login.php");
//echo "<h1>Hello</h1>";
//die();
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
<link rel="stylesheet" media="screen" href="../css/viewBlog.css" type="text/css"/>
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

<!--<h2 id="user">   </h2>
-->

<?php
if (mysqli_num_rows($result) > 0) {
    // output data of each row
   while($row = mysqli_fetch_assoc($result)){ 
   $maruphoto=$row["detail_image"];
   $blogid=$row["blog_id"];?>
    
<!--<h2 id="update"> <a href=''>UPDATE</a></h2>
<h2 id="delete"> <a href=''>DELETE</a></h2>
-->

<table id="userInfo" width="40%"  cellspacing="10" cellpadding="5" align="left">
  	<tr id="tableHead">
      <th colspan="2" width="100%" align="center"><strong>BLOG DETAILS:</strong></th>
      
    </tr>
  
   <tr>
      <td width="15%" id="heads"><strong>Blog Title:</strong></td>
      <td width="85%" id="detail">
       <?php echo $row["blog_title"]; ?></td>
    </tr>
  <tr>
      <td width="15%" id="heads"><strong>Blog-Category:</strong></td>
      <td width="85%" id="detail">
       <?php echo $row["blog_category"]; ?></td>
    </tr>

  <tr>
      <td width="15%" id="heads"><strong>Blog-Description:</strong></td>
      <td width="85%" id="detail">
       <?php echo $row["blog_desc"]; ?></td>
    </tr>
    
    <tr>
      <td width="50%" id="il">  <?php echo "<a href='update.php?blogid=$blogid'>UPDATE</a>";?></td>
      <td width="50%" id="ir">
       <?php echo "<a href='delete.php?blogid=$blogid'>DELETE</a>";?></td>
    </tr>


</table>

<img id="userPhoto" src="<?php echo $maruphoto; ?>" width="300" height="200"/>
<?php    	 
   }

} else {
  
}
mysqli_close($conn);?>








<!-- InstanceEndEditable -->
<div id="foot">
	<p> For further details, email us at abc.xyz@gmail.com</p>
</div>
</div>

</body>
<!-- InstanceEnd --></html>
