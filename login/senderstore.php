
<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php 
#$dbserver="localhost";
#$username="root";
#$password=NULL;
#$dbname="onlinecourier";


$pid=$_POST['pid'];
$sname=$_POST['sname'];
$smobile=$_POST['smobile'];
$sendon=$_POST['sendon'];
$saddress=$_POST['saddress'];



$con=new mysqli("localhost","root","","onlinecourier")or die("Error in database connection");


$query1="SELECT  pid FROM sender" or die("Failed to query database".mysql_error());
$result1=mysqli_query($con,$query1);
$row=mysqli_fetch_array($result1);

if($row['pid']==$pid)
echo " This package number is already registered so enter a unique package number";

else
{
$query="INSERT INTO `sender`(`sname`, `smobile`, `pid`, `saddress`, `sendon`)  VALUES('".$_POST["sname"]."','".$_POST["smobile"]."','".$_POST["pid"]."','".$_POST["saddress"]."','".$_POST["sendon"]."')";
$result=mysqli_query($con,$query);
mysqli_close($con);
echo "Registered successfully";

}

?>
<html>
<head>
<title> sender  details </title>





<a href="receiverstore.html" target="_parent" style="color:red;font-size:140%;">next </a>


</body>
</html>

 