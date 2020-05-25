
<?php header('Content-Type: text/html; charset=UTF-8'); ?>

<?php
#$dbserver="localhost";
#$username="root";
#$password=NULL;
#$dbname="project";
$name=$_POST['name'];
$uname=$_POST['uname'];
$email=$_POST['email'];
$add=$_POST['address'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
include 'Escaper.php';
$escaper = new Zend\Escaper\Escaper('utf-8');
$output = $escaper->escapeHtmlAttr($name);
$output1 = $escaper->escapeHtmlAttr($uname);
$output2 = $escaper->escapeHtmlAttr($email);
$output3 = $escaper->escapeHtmlAttr($add);
$output4 = $escaper->escapeHtmlAttr($mobile);
$output5 = $escaper->escapeHtmlAttr($password);

$con=new mysqli("localhost","root","","project")or die("Error in database connection");

$hash=password_hash($password,PASSWORD_BCRYPT,array('cost'=>11));

$query="INSERT INTO register(Name,Username,Email,Address,Mobile,Password) VALUES('".$output."','".$output1."','".$output2."','".$output3."','".$output4."','".$hash."')";
$result=mysqli_query($con,$query);
mysqli_close($con);
echo "Registered successfully";
echo"<a href='login.html'>Click here to login</a>";


?>