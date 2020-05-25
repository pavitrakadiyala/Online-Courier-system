<?php
$con=mysqli_connect("localhost","root","") or die('ygawi'.mysqli_error());
mysqli_select_db($con,'login');

$query="select * from user where username='krish'";
$query_run=mysqli_query($con,$query);
if(!$query_run){
    echo "This user exists";
}
else{
    $query="insert into user values('6778','890')";
    $query_run=mysqli_query($con,$query);
    if($query_run){
        echo "User Registered Successfully";
    }
}
?>