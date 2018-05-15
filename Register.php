<html>
<title class="sr">Seat Registration</title>
<h1 class="n1">Sri Krishna Hostel Management</h1><br>
<div class="indiv">
<nav class="nav1">
<a class="hme" href="index.php">Home</a>
<a class="cnct" href="contact.php">Contact</a>
<a class="reg" href="Register.php">Register</a>
<a class="login" href="Login.php">Log in</a>
<body>
<script src="javas.js"></script>
</body>
</nav>
</div>
 <br>
<center>
<h1>Registration</h1>
<link rel="stylesheet" type=text/css href="Register.css">
<div>
<form onsubmit="return check(fn.value,middlename.value,Lastname.value,phone.value)" action="phpServerSide/signup_ser.php" method="POST">
Register No:<input type="text" name="regno" required> *<br>
<br>
First name:
<input type="text"  id="fn" name="firstname" required > *<br><br>
Middle name:
<input type="text" name="middlename" ><br><br>
Last name:<input type="text" name="Lastname" required> *<br>
<br>
Gender:<br><input class="r1" type="radio" name="gender" value="Male" checked>Male<br>
<input class="r2" type="radio" name="gender" value="Female">Female<br>
<input class="r3" type="radio" name="gender" value="Others">Others<br><br>
email: <input type="email" name="email" required> *<br><br>
Phone: <input type="text" name="phone" required> *<br><br>
Availability: <?php
include_once 'connection_ser.php';
$query="SELECT * FROM register";
$result=mysqli_query($connect,$query);
$avail=20-mysqli_num_rows($result);
echo $avail;
?><br><br>
<input type="submit" name="sub" value="Continue">
<input type="Reset">
</form>
</div>
</center>
</html>