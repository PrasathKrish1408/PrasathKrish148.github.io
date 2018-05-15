<?php
include_once 'connection_ser.php';
if(isset($_POST['pwdsub']))
{
	$pwd=mysqli_real_escape_string($connect,$_POST['newpwd']);
	$pwd_regno=mysqli_real_escape_string($connect,$_POST['rn']);
	$hashpwd=password_hash($pwd,PASSWORD_DEFAULT);
	$qry="INSERT INTO pwd (reg_regno,pwd) VALUES('$pwd_regno','$hashpwd')";
	$un="SELECT * FROM pwd where reg_regno='$pwd_regno'";
	$result=mysqli_query($connect,$un);
	$count=mysqli_num_rows($result);
	if($count>0)
	{
		echo "Already entered password...";
		header("Location: ../Login.php");
		exit();
	}
	else{
	mysqli_query($connect,$qry);
	header("Location: ../Login.php");
	echo '<html><center><p>Registered Successfully.....<br> you are now a member of Hstl</p></center></html>';
	exit();
	}
}
else
{
	echo "Illegal Entry";
	exit();
}
?>