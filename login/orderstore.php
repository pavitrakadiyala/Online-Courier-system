<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php 
#$dbserver="localhost";
#$username="root";
#$password=NULL;
#$dbname="onlinecourier";
$pid=$_POST['pid'];
$weight=$_POST['weight'];
$cost=$_POST['cost'];
$sname=$_POST['sname'];
$smobile=$_POST['smobile'];
$saddress=$_POST['saddress'];
$sendon=$_POST['sendon'];
$rname=$_POST['rname'];
$raddress=$_POST['raddress'];
$rmobile=$_POST['rmobile'];
$eid=$_POST['eid'];
$ddate=$_POST['ddate'];
include 'Escaper.php';
$escaper = new Zend\Escaper\Escaper('utf-8');
$output = $escaper->escapeHtmlAttr($pid);
$output1 = $escaper->escapeHtmlAttr($weight);
$output2 = $escaper->escapeHtmlAttr($cost);
$output3 = $escaper->escapeHtmlAttr($sname);
$output4 = $escaper->escapeHtmlAttr($smobile);
$output5 = $escaper->escapeHtmlAttr($saddress);
$output6 = $escaper->escapeHtmlAttr($sendon); 
$output7 = $escaper->escapeHtmlAttr($rname);
$output8 = $escaper->escapeHtmlAttr($raddress);
$output9 = $escaper->escapeHtmlAttr($rmobile);
$output10 = $escaper->escapeHtmlAttr($eid);
$output11 = $escaper->escapeHtmlAttr($ddate);


$con=new mysqli("localhost","root","","onlinecourier")or die("Error in database connection");


$query1="SELECT  pid FROM prodetails" or die("Failed to query database".mysql_error());
$result1=mysqli_query($con,$query1);
$row=mysqli_fetch_array($result1);
if($row['pid']==$pid)
{
    echo " package already registered ";
}
else
{
$query="INSERT INTO `prodetails`(`pid`, `wt`, `cost`,`eid`)  VALUES('".$_POST["pid"]."','".$_POST["weight"]."','".$_POST["cost"]."','".$_POST["eid"]."')";
$result=mysqli_query($con,$query);
mysqli_close($con);
echo "Registered successfully";
    

}

?>

