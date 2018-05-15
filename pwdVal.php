<?php
session_start();
if(isset($_POST['lsub']))
{
	include_once 'connection_ser.php';
$username=mysqli_real_escape_string($connect,$_POST['logun']);
$password=mysqli_real_escape_string($connect,$_POST['logpw']);
$usrn="SELECT * FROM register WHERE reg_regno='$username'";
if(mysqli_num_rows(mysqli_query($connect,$usrn))<1)
{
	session_unset();
	session_destroy();
	include_once 'Login.php';
	echo '<html><script>window.alert("Invalid Username.Please register....");</script></html>';
	exit();
}

$pwd="SELECT pwd FROM pwd WHERE reg_regno='$username'";
$res=mysqli_query($connect,$pwd);
$arr=mysqli_fetch_assoc($res);
$hashedPwdCheck=password_verify($password,$arr['pwd']);
if($hashedPwdCheck == false)
{
	session_unset();
	session_destroy();
	include_once 'Login.php';
	echo '<html><script>window.alert("Password doesnt matches....");</script></html>';
	exit();
}		
else if($hashedPwdCheck == true)
{
	$query="SELECT * FROM register WHERE reg_regno='$username'";
	$result=mysqli_query($connect,$query);
	$details=mysqli_fetch_assoc($result);
	$_SESSION['name']=$details['reg_first']." ".$details['reg_middle']." ".$details['reg_last'];
	$_SESSION['gender']=$details['reg_gender'];
	$_SESSION['email']=$details['reg_email'];
	$_SESSION['phone']=$details['reg_mobile'];
	$_SESSION['room no']=$details['reg_roomno'];
	$_SESSION['username']=$username;
$_SESSION['password']=$password;
include_once 'Logedin.php';
exit();
}
}
else
{
	include_once 'Login.php';
	echo '<html><script>window.alert("Invalid entry");</script></html>';
	exit();
}	
?>