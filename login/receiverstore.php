
<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php 
#$dbserver="localhost";
#$username="root";
#$password=NULL;
#$dbname="onlinecourier";


$pid=$_POST['pid'];
$rname=$_POST['rname'];
$rmobile=$_POST['rmobile'];
$eid =$_POST['eid'];
$raddress=$_POST['raddress'];



$con=new mysqli("localhost","root","","onlinecourier")or die("Error in database connection");


$query1="SELECT  pid FROM receiver" or die("Failed to query database".mysql_error());
$result1=mysqli_query($con,$query1);
$row=mysqli_fetch_array($result1);

if($row['pid']==$pid)
echo " This package number is already registered so enter a unique package number";

else
{
$query="INSERT INTO `receiver`(`rname`, `raddress`, `pid`, `rmobile`, `eid`)  VALUES('".$_POST["rname"]."','".$_POST["raddress"]."','".$_POST["pid"]."','".$_POST["rmobile"]."','".$_POST["eid"]."')";
$result=mysqli_query($con,$query);
mysqli_close($con);
echo "Registered successfully";

}

?>
<html>
<head>
<title> receiver  details </title>





<a href="managerafterlogin2.html" target="_parent" style="color:red;font-size:140%;">next </a>


</body>
</html>

 