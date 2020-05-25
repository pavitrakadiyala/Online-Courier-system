
<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php 
#$dbserver="localhost";
#$username="root";
#$password=NULL;
#$dbname="onlinecourier";


$pid=$_POST['pid'];
$cname=$_POST['cname'];
$branchid=$_POST['branchid'];





$con=new mysqli("localhost","root","","onlinecourier")or die("Error in database connection");


$query1="SELECT  pid FROM company" or die("Failed to query database".mysql_error());
$result1=mysqli_query($con,$query1);
$row=mysqli_fetch_array($result1);

if($row['pid']==$pid)
echo " This package number is already registered so enter a unique package number";

else
{
$query="INSERT INTO `company`(`cname`, `pid`, `branchid`)  VALUES('".$_POST["cname"]."','".$_POST["pid"]."','".$_POST["branchid"]."')";
$result=mysqli_query($con,$query);
mysqli_close($con);
echo "Registered successfully";

}

?>
<html>
<head>
<title> order registration </title>





<a href="receiverstore.html" target="_parent" style="color:red;font-size:140%;">next </a>


</body>
</html>

 