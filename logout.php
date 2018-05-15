<?php
if(isset($_POST['logsub']))
{
session_start();
session_unset();
session_destroy();
include_once 'Login.php';
echo '<html><script>window.alert("You are logged out.....");</script></html>';
}
?>