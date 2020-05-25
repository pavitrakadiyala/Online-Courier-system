<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php
$con=new mysqli("localhost","root","","onlinecourier")or die("Error in database connection");
$billid=$_POST['billid'];
$pid=$_POST['pid'];
$datet=$_POST['datet'];

include 'Escaper.php';
$escaper = new Zend\Escaper\Escaper('utf-8');
$output = $escaper->escapeHtmlAttr($billid);
$output1 = $escaper->escapeHtmlAttr($pid);
$output2 = $escaper->escapeHtmlAttr($datet);

$query="INSERT INTO bill(billid,pid,datet) VALUES('".$_POST["billid"]."','".$_POST["pid"]."','".$_POST["datet"]."')";
$result=mysqli_query($con,$query);

mysqli_close($con);
echo " WELL DONE!!";
echo"<a href='employeeafterlogin2.html'>Logout</a>";
?>
