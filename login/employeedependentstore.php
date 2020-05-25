<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php
$con=new mysqli("localhost","root","","onlinecourier")or die("Error in database connection");
$eid=$_POST['eid'];
$dependentname=$_POST['dependentname'];
$sex=$_POST['sex'];
$relationship=$_POST['relationship'];

include 'Escaper.php';
$escaper = new Zend\Escaper\Escaper('utf-8');
$output = $escaper->escapeHtmlAttr($eid);
$output1 = $escaper->escapeHtmlAttr($dependentname);
$output2 = $escaper->escapeHtmlAttr($sex);
$output3 = $escaper->escapeHtmlAttr($relationship);

$query="INSERT INTO dependents(eid,dependentname,sex,relationship) VALUES('".$_POST["eid"]."','".$_POST["dependentname"]."','".$_POST["sex"]."','".$_POST["relationship"]."')";
$result=mysqli_query($con,$query);

mysqli_close($con);
echo "REGISTERED SUCCESSFULLY";
echo"<a href='employeeafterlogin2.html'>BACK</a>";
?>
