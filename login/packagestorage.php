
<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php 
#$dbserver="localhost";
#$username="root";
#$password=NULL;
#$dbname="onlinecourier";


$pid=$_POST['pid'];
$wt=$_POST['wt'];
$cost=$_POST['cost'];
$eid=$_POST['eid'];
$exp=$_POST['expdate'];



$con=new mysqli("localhost","root","","onlinecourier")or die("Error in database connection");


$query1="SELECT  pid FROM prodetails " or die("Failed to query database".mysql_error());
$result1=mysqli_query($con,$query1);
$row=mysqli_fetch_array($result1);

if($row['pid']==$pid)
echo " This package number is already registered so enter a unique package number";

else
{
$query="INSERT INTO `prodetails`(`pid`, `wt`, `cost`, `eid`, `expdate`) VALUES('".$_POST["pid"]."','".$_POST["wt"]."','".$_POST["cost"]."','".$_POST["eid"]."','".$_POST["expdate"]."')";
$result=mysqli_query($con,$query);
mysqli_close($con);
echo "Registered successfully";

}

?>
<html>
<head>
<title> order  details </title>





<a href="senderstore.html" target="_parent" style="color:red;font-size:140%;">next </a>


</body>
</html>

 