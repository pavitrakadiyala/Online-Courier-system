<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php
$con=new mysqli("localhost","root","","onlinecourier")or die("Error in database connection");
$pid=$_POST['pid'];
$rating=$_POST['rating'];

include 'Escaper.php';
$escaper = new Zend\Escaper\Escaper('utf-8');
$output = $escaper->escapeHtmlAttr($pid);
$output1 = $escaper->escapeHtmlAttr($rating);

$query="INSERT INTO feedback(pid,rating) VALUES('".$_POST["pid"]."','".$_POST["rating"]."')";
$result=mysqli_query($con,$query);

mysqli_close($con);
echo "Thanks for your feedback.....!!";
echo"<a href='track2.html'>Logout</a>";
?>
