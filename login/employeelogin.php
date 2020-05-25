<?php

#$dbserver="localhost";
#$username="root";
#$password=NULL;
#$dbname="onlinecourier";


$con=mysqli_connect("localhost","root","") or die('ygawi'.mysqli_error());
mysqli_select_db($con,'onlinecourier');
$username=$_POST['uname'];
$password=$_POST['password'];
session_start();

if(empty($username)){array_push($errors,"id is required");}
if(empty($password)){array_push($errors,"Password is required");}

$query="select * from elogin where eid='$username' and password='$password'";
$query_run=mysqli_query($con,$query);

if($query_run=1)
{
	echo "Welcome '$username'";
    echo"<a href='employeeafterlogin2.html'>Click here to continue</a>";
    
}
else
{
	echo "Enter valid username or password";
	echo"<a href='employeelogin.html'>Click here to login again</a>";
}



mysqli_close($con);

?>
