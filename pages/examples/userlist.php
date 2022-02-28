<?php
session_start();
// $name=$_SESSION['name'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname ="cmsp";
$conn = new mysqli($servername, $username, $password,$dbname);
if(!$conn){
    die("error");
}
if($_SESSION['type']=="admin"){
$sql="SELECT * FROM admin_login where type='user' ";
  $result=mysqli_query($conn, $sql); 
  while($data =mysqli_fetch_assoc($result)) {    
        
    echo "<tr>".
    "<td>".$data["name"]."</td><br>".
    "<td>".$data["email"]."</td><br>". 

   "</tr> <br>";
}

}
 ?>   