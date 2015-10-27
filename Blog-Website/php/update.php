<?php  
	$blog_id=$_GET['blogid'];
	
	
	include_once "session.php";
	


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

mysqli_close($conn);



	
	
	
	
	
	
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


$sql1 = "UPDATE master SET blog_category='$category', blog_desc='$desc', blog_title='$title' WHERE blog_id='$blog_id'";
if (mysqli_query($conn, $sql1)) {
   // echo "New record created successfully";
} else {
    echo "<h1>Error: " . $sql1 . "<br>" . mysqli_error($conn)."</h1>";
}

$sql = "UPDATE detail SET blog_category='$category', blog_desc='$desc', blog_title='$title',detail_image='$blogphoto' WHERE blog_id='$blog_id'";

if (mysqli_query($conn, $sql)) {
   // echo "New record created successfully";
} else {
    echo "<h1>Error: " . $sql . "<br>" . mysqli_error($conn)."</h1>";
}

mysqli_close($conn);
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


<div id="form">
  <form id="formb" name="formb" method="post" action=<?php echo 'update2.php?blogid='.$blog_id;?> enctype="multipart/form-data">
  <table id="login" width="50%"  align="center" cellspacing="15" cellpadding="10">
  <tr id="tableHead">
      <th colspan="2" width="100%" align="center"><strong>BLOG:</strong></th>
      
    </tr>
    <tr>
      <td width="15%" id="heads"><strong>Blog-Title:</strong></td>
      <td width="85%"><label for="blog_title"></label>
        <input type="text" name="title" id="title" size="100"/></td>
    </tr>
    <tr>
      <td id="heads"><strong>Blog-Category</strong></td>
      <td><label for="category"></label>
        <select name="category">
			  <option value="philosophy">Philosophy</option>
 				 <option value="drama">Drama</option>
 			 <option value="autobiography">Autobiography</option>
			  <option value="sports">Sports</option>
              <option value="thriller">Thriller</option>
              <option value="horror">Horror</option>
			</select>
        </td>
    </tr>
    <tr>
      <td width="15%" id="heads"><strong>Blog-Description:</strong></td>
      <td width="85%"><label for="desc"></label>
        <textarea name="desc" rows="20" cols"20" > <?php echo $preblog_desc;?> </textarea></td>
    </tr>
    <tr>
    	<td width="15%" id="heads"><strong>Image:</strong></td>
   		<td width="85%"> <label for="file"></label>
        	<input type="file" name="file" id="file" size="100"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="right"><input type="submit" name="blogsubmit" id="blogsubmit" value="Submit" />
        <input type="reset" name="Reset" id="Reset" value="Reset" /></td>
    </tr>
  </table>
</form>
</div>




<!-- InstanceEndEditable -->
<div id="foot">
	<p> For further details, email us at abc.xyz@gmail.com</p>
</div>
</div>

</body>
<!-- InstanceEnd --></html>
