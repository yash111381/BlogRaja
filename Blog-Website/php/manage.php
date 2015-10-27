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
$sql = "SELECT * FROM blogger";
$result = mysqli_query($conn, $sql);

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
<link rel="stylesheet" media="screen" href="../css/userUpdate.css" type="text/css"/>
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


<?php
if (mysqli_num_rows($result) > 0) {
    // output data of each row
   while($row = mysqli_fetch_assoc($result)){ 
   $idi=$row["id"];

?>
    
<!--<h2 id="update"> <a href=''>UPDATE</a></h2>
<h2 id="delete"> <a href=''>DELETE</a></h2>
-->

<table id="userInfo" width="80%"  cellspacing="10" cellpadding="5" align="left">
  	<tr id="tableHead">
      <th colspan="2" width="100%" align="center"><strong>USER DETAILS:</strong></th>
      
    </tr>
  
   <tr>
      <td width="15%" id="heads"><strong>USERNAME:</strong></td>
      <td width="85%" id="detail">
       <?php echo $row["username"]; ?></td>
    </tr>
  <tr>
      <td width="15%" id="heads"><strong>EMAIL-ID:</strong></td>
      <td width="85%" id="detail">
       <?php echo $row["email"]; ?></td>
    </tr>

  <tr>
  	<form id="form2" name="form2" method="post" action=<?php echo 'userupdate.php?id='.$idi;?> enctype="multipart/form-data">
      <td width="15%" id="heads"><strong>IS_ACTIVE</strong></td>
      <td width="85%" id="detail">
      <label for="is_active"></label>
        <select name="is_active">
			<option value="i">Inactive</option>
 			<option value="a">Active</option>
		</select>
      
      </td>
   </tr>
    
    <tr>
      <td width="15%" id="il">
      <input type="submit" name="update" id="update" value="UPDATE" />
      </td>
     
      <td width="85%" id="ir">
       <?php echo "<a href='userdelete.php?id=$idi'>DELETE</a>";?></td>
    </tr>
 </form>

</table>


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
