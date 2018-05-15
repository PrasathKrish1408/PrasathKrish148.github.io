<html>

<?php
session_start();
if(isset($_SESSION['username']))
{
	include_once 'Logedin.php';
exit();
}
?>
<link rel="stylesheet" type=text/css href="Login.css">
<h1>Sri Krishna Hostel Management</h1><br>
<div class="indiv">
<nav class="nav1">
<a class="hme" href="index.php">Home</a>
<a class="cnct" href="contact.php">Contact</a>
<a class="reg" href="Register.php">Register</a>
<a class="login" href="Login.php">Log in</a>
</nav>
</div>
<center><p>Already user! login</p><br>
<p class="p1"><b>Login</b></p><br>
<form action="pwdVal.php" method="post">
Username:  <input type="text" name="logun" placeholder="RegisterNo" required> *<br>
<br>Password:  <input type="password" name="logpw" placeholder="password"> *<br>
<br><input type="submit" name="lsub" value="Login">
</form>
</center>

</html>