<?php
$servername = "localhost";
$username = "root";
$password = "ilove111mummy";
$dbname="blog";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "SELECT detail_image, blog_title, blog_desc, blog_category FROM detail";
$result = mysqli_query($conn, $sql);


//header("Location: Website/login.php");
//echo "<h1>Hello</h1>";
//die();
?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/login1.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" media="screen" href="../css/login.css" type="text/css"/>
<!-- InstanceBeginEditable name="doctitle" -->


<link rel="stylesheet" media="screen" href="../css/blog.css" type="text/css"/>



<title>Untitled Document</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->

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
	<li id="lis"><a href="../login.php">LOGIN</a></li>
    <li id="lis"><a href="../signup.php">REGISTER</a></li>
    <li id="lis"><a href="../about.php">ABOUT</a></li>
    <li id="lis"><a href="blog.php">BLOGS</a></li>
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
<?php
if (mysqli_num_rows($result) > 0) {
    // output data of each row
   while($row = mysqli_fetch_assoc($result)){ 
   $maruphoto=$row["detail_image"];?>
    



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
