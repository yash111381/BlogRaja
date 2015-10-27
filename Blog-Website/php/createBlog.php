<?php

include_once "session.php";

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
<script src="../js/blogForm.js"></script>
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
  <form id="formb" name="formb" method="post" onsubmit="return validateForm()" action=<?php $idi=$_GET['id'];echo 'blogcreate.php?id='.$idi;?> enctype="multipart/form-data">
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
        <textarea name="desc" rows="20" cols"20" > Enter your data here: </textarea></td>
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
