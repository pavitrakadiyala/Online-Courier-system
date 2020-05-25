
<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php 
#$dbserver="localhost";
#$username="root";
#$password=NULL;
#$dbname="onlinecourier";

$eid=$_POST['eid'];
$employeename=$_POST['employeename'];
$birthday=$_POST['birthday'];
$address=$_POST['address'];
$sex=$_POST['sex'];
$salary=$_POST['salary'];
$emobile=$_POST['emobile'];
$mid=$_POST['mid'];






$con=new mysqli("localhost","root","","onlinecourier")or die("Error in database connection");


$query1="SELECT  eid,emobile FROM employee" or die("Failed to query database".mysql_error());
$result1=mysqli_query($con,$query1);
$row=mysqli_fetch_array($result1);

if($row['emobile']==$emobile)
echo " This mobile number is already registered so enter a unique mobile number";
else if($row['eid']==$eid)
echo "enter a valid unique empid";
else
{
$query="INSERT INTO `employee`(`eid`, `employeename`, `bdate`, `address`, `sex`, `salary`, `emobile`, `mid`)   VALUES('".$_POST["eid"]."','".$_POST["employeename"]."','".$_POST["birthday"]."','".$_POST["address"]."','".$_POST["sex"]."','".$_POST["salary"]."','".$_POST["emobile"]."','".$_POST["mid"]."')";
$result=mysqli_query($con,$query);
mysqli_close($con);
echo "Registered successfully";

}

?>
<html>
<head>
<title> employee registration </title>





<a href="managerafterlogin2.html" target="_parent" style="color:red;font-size:140%;">return</a>


</body>
</html>

 