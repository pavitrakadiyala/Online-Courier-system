<?php

#$dbserver="localhost";
#$username="root";
#$password=NULL;
#$dbname="onlinecourier";


$con=mysqli_connect("localhost","root","") or die('ygawi'.mysqli_error());
mysqli_select_db($con,'onlinecourier');
$pid=$_POST['pid'];
$rmobile=$_POST['rmobile'];
session_start();

if(empty($pid)){array_push($errors,"pid is required");}
if(empty($rmobile)){array_push($errors,"rmobile is required");}

$query="select * from receiver where pid='$pid' and rmobile='$rmobile'";
$query_run=mysqli_query($con,$query);

if($query_run)
{
	echo "Welcome '$pid'";
    echo"<a href='track2.html'>Click here to continue</a>";
    echo "proceed";
}
else
{
	echo "Enter valid username or password";
	echo"<a href='homelogin.html'>Click here to track again</a>";
}



mysqli_close($con);

?>
