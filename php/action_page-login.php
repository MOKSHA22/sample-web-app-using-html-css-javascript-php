<?php 
$servername="localhost";
$username="root";
$password="";
$dbname = "db2";
$e="";

$user=$_POST["username"];
$pass=$_POST["psw"];

$conn=mysqli_connect($servername,$username,$pws,$dbname);


if(!$conn)
	echo "connection failed";

$sql="Select * from users where uname='$user'";

$myquerry=mysqli_query($conn, $sql);

$rows=mysqli_num_rows($myquerry);

if($rows>0)
{
	//echo " user found";
	$sql="Select * from users where uname='$user' and pass1='$pass'";
	$myquerry=mysqli_query($conn, $sql);
	$rows=mysqli_num_rows($myquerry);

	if($rows>0)
	{
	header("location:index2.html");

	}
	else
	{
		$e="Password is Incorrect";
		include("login.html");
		
		
	}
}
else
{
	$e="No user Found";
	include("login.html");
	
	
	
}

$conn->close();

 ?>
