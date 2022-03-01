<?php
session_start();
unset($_SESSION["name"]);
echo"<script type='text/javascript'>alert('You are logged out!'); window.location.href='login_master.php'</script>";

?>
