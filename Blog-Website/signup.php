<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/login1.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" media="screen" href="css/login.css" type="text/css"/>
<!-- InstanceBeginEditable name="doctitle" -->
<title>Signup</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<script src="js/signForm.js"></script>
<!-- InstanceEndEditable -->
</head>

<body>

<div id="wrapper">
<div id="logo">
	<img src="images/logo.jfif" alt="Logo" />
</div>
<div id="heading">
	<h1>BLOG-RAJA</h1>
</div>

<div id="tabs">
<ul id="listTabs">
	<li id="lis"><a href="login.php">LOGIN</a></li>
    <li id="lis"><a href="signup.php">REGISTER</a></li>
    <li id="lis"><a href="about.php">ABOUT</a></li>
    <li id="lis"><a href="php/blog.php">BLOGS</a></li>
</ul>
</div>
<!--<div id="imgleft">
	<img src="images/Namaste.jpg" alt="Namaste" height="300" width="300" />
</div>

<div id="imgright">
	<img src="images/Namaste.jpg" alt="Namaste" height="300" width="300" />
</div>-->
<!-- InstanceBeginEditable name="EditRegion3" -->
<!--

<div id="footer1">
	<table width="100%"  cellspacing="10" cellpadding="3" align="center">
    <tr>
      <td align="center"><p><b>FORGOT PASSWORD?</b></p>
    </td></tr>
    <tr>
      <td align="center"><b><a href="">RESET PASSWORD</a></b></td>
    </tr>
  </table>
</div>

-->
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="EditRegion4" -->
<!--

<div id="footer">
	<table width="100%"  cellspacing="10" cellpadding="3" align="center">
    <tr>
      <td align="center"><p><b>NOT A MENBER YET?</b></p>
    </td></tr>
    <tr>
      <td align="center"><b><a href="">SIGN UP</a></b></td>
    </tr>
  </table>
</div>

-->
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="EditRegion5" -->
<div id="form">
  <form id="form1" name="form1" method="post" action="php/register.php" onsubmit="return validateForm()" enctype="multipart/form-data">
  <table id="login" width="43%"  align="center" cellspacing="15" cellpadding="10">
  <tr id="tableHead">
      <th colspan="2" width="100%" align="center"><strong>SIGN UP FORM:</strong></th>
      
    </tr>
    <tr>
      <td width="15%" id="heads"><strong>Username:</strong></td>
      <td width="85%"><label for="username"></label>
        <input type="text" name="username" id="username" size="55"/></td>
    </tr>
    <tr>
      <td id="heads"><strong>Password:</strong></td>
      <td><label for="password"></label>
        <input type="password" name="password" id="password" size="55"/></td>
    </tr>
    <tr>
      <td id="heads"><strong>Confirm Password:</strong></td>
      <td><label for="cnfpass"></label>
        <input type="password" name="cnfpass" id="cnfpass" size="55"/></td>
    </tr>
    <tr>
      <td width="15%" id="heads"><strong>Email-ID:</strong></td>
      <td width="85%"><label for="email"></label>
        <input type="email" name="email" id="email" size="55"/></td>
    </tr>
    <tr>
    	<td width="15%" id="heads"><strong>Filename:</strong></td>
   		<td width="85%"> <label for="file"></label>
        	<input type="file" name="file" id="file" size="55"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="right"><input type="submit" name="submit" id="submit" value="Submit" />
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
