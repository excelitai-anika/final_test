<?php
include("conn.php");
$id=$_GET['xid'];
$sql="DELETE FROM admin_login Where id='$id'";
$result3=mysqli_query($conn, $sql);
if($result3)
    header("Location:userlist.php");
else "couldn't execute";
?>