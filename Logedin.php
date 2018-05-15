<html class="lohtml">
<title>userLogin</title>
<h3>Sri Krishna Hostel Management<br>Student Profile<form class="logout" action="logout.php" method="post">
<button type="submit" name="logsub">logout</button>
</form></h3>
<link rel="stylesheet" type=text/css href="Logedin.css">
<body>
<script src="javas.js"></script>
</body>
<div class="left">
<p class="perdet">PERSONAL DETAILS</p>
<br>
<p>REGISTER NO:<?php echo " ".$_SESSION['username'];?></p>
<p>NAME:<?php echo " ".$_SESSION['name']." ";?></p>
<p>GENDER:<?php echo " ".$_SESSION['gender']." ";?></p>
<p>email:<?php echo " ".$_SESSION['email']." ";?></p>
<p>PHONE:<?php echo " ".$_SESSION['phone']." ";?></p>
</div>
<div class="right">
<p class="hosdet">HOSTEL DETAILS</p>
<br>
<p>ROOM NO:<?php echo " ".$_SESSION['room no'];?></p>
<p>ROOMMATES</p><?php
$rn=$_SESSION['room no'];
$un=$_SESSION['username'];
include_once 'connection_ser.php';
$query="SELECT reg_regno,reg_first,reg_middle,reg_last FROM register WHERE reg_roomno='$rn'";
$res=mysqli_query($connect,$query);
while($roommates=mysqli_fetch_array($res))
{
	if(strcmp($roommates['reg_regno'],$un)!=0)
	{
		echo '<p>'.$roommates['reg_regno']." - ".$roommates['reg_first']." ".$roommates['reg_middle']." ".$roommates['reg_last'].'</p>';	
	}
}
?>
</div>
</html>