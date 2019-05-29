<?php 
$servername="localhost";
$username="root";
$password="";
$dbname = "db2";

$varible1=$_POST['fname'];
$varible2=$_POST['lname'];
$varible3=$_POST['pnum'];
$varible4=$_POST['birthday'];
$varible5=$_POST['gender'];
$varible6=$_POST['username'];
$varible6=$_POST['psw'];


$conn=mysqli_connect($servername,$username,$psw,$dbname);

if(!$conn)
	echo "connection failed";


$sql = " INSERT INTO users VALUES ('$varible1','$varible2','$varible3','$varible4','$varible5','$varible6','$varible7')";

if ($conn->query($sql) === TRUE) {
   header("Location:index.html");
} else {
  
}

$conn->close();

header("location:index.html");
 ?>
