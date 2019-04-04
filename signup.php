<?php
$conn=mysqli_connect("localhost","root","","electro");
$name=$_POST["Username"];
$email=$_POST["Email"];
$phone=$_POST["Phone"];
$password=$_POST["Password"];
$repassword=$_POST["RetypePassword"];
$check=mysqli_query($conn,"SELECT * FROM signuptable WHERE Email='$email'");
$data=mysqli_fetch_array($check,MYSQLI_NUM);

if($data>1)
{
	echo"user already exits!..";

}
else{


$result=mysqli_query($conn,"INSERT INTO signuptable(Username,Email,Phone,Password,RetypePassword)
           VALUES('$name','$email','$phone','$password','$repassword');");

if($result)
{
	
echo "<script>alert('Successfully Logined');</script>";
header("location:index.html");
}
}

?>
