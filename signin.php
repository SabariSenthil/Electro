<?php
$conn=mysqli_connect("localhost","root","","electro");
if($conn)
{
$email=$_POST["Email"];
$password=$_POST["Password"];
$result=mysqli_query($conn,"SELECT * FROM signuptable WHERE Email='$email' and Password='$password'");
if(mysqli_fetch_array($result,MYSQLI_ASSOC))
{
header("location:index1.html");
}
else{
 echo "<script>alert('Invalid Mail');</script>";
 
}
}
?>

