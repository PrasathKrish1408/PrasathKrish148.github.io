<?php
if(isset($_POST['sub']))
{
include_once 'connection_ser.php';
$regno=mysqli_real_escape_string($connect,$_POST['regno']);
$first=mysqli_real_escape_string($connect,$_POST['firstname']);
$middle=mysqli_real_escape_string($connect,$_POST['middlename']);
$last=mysqli_real_escape_string($connect,$_POST['Lastname']);
$gender=mysqli_real_escape_string($connect,$_POST['gender']);
$email=mysqli_real_escape_string($connect,$_POST['email']);
$phone=mysqli_real_escape_string($connect,$_POST['phone']);

//cheking for already existance
$query="SELECT *FROM register WHERE reg_regno='$regno'";
$result=mysqli_query($connect,$query);
$result_rows=mysqli_num_rows($result);
if($result_rows>0)
{
	echo "Already register.....";
	
	exit();
}
else
{
$hashpwd=password_hash($phone,PASSWORD_DEFAULT);
$query="SELECT * FROM register";
$result=mysqli_query($connect,$query);
$resultnr=mysqli_num_rows($result)+1;
$ans=floor($resultnr/4);
if($resultnr%4==0)
{
	$roomno=floor(($resultnr-1)/4)+1;
}
else
{
	$roomno=$ans+1;
}
$query="INSERT INTO register (reg_regno,reg_first,reg_middle,reg_last,reg_gender,reg_email,reg_mobile,reg_roomno) VALUES('$regno','$first','$middle','$last','$gender','$email','$phone','$roomno')";
mysqli_query($connect,$query);
echo '<html><center><p>Success!.......</p></center></html>';
$query="SELECT *FROM register WHERE reg_regno='regno'";
$result=mysqli_query($connect,$query);
$row=mysqli_fetch_assoc($result);
echo $row['reg_regno'];
echo "<br>";
echo $row['reg_first'];
echo "<br>";
echo $row['reg_last'];
echo "<br>";
echo $row['reg_email'];
echo "<br>";
echo $row['reg_mobile'];
}
}
else
{
	echo "not allowed";
	exit();
}
?>
<html>
<body>
<script src="java.js"></script>
</body>
<center>

<div class="password">
<form onsubmit="return pwdcheck(newpwd.value,conpwd.value)" action="pass.php" method="POST" >
<input type="hidden" name="rn" value="<?php
include_once 'connection_ser.php';
$regno=mysqli_real_escape_string($connect,$_POST['regno']);
echo $regno;
?>">
New Password : <input type="password" name="newpwd" placeholder="minimum 8 letters"><br>
<br><br>Confirm Password : <input type="password" name="conpwd" placeholder="retype password" onmousedown="warning(newpwd.value)"><br>
<br><br><input type="submit" name="pwdsub" value="Register">
</form>
</div>
</center>
</html>
