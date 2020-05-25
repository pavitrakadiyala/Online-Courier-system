<?php 
#$dbserver="127.0.0.1";
#$username="root";
#$password=NULL;
#$dbname="project";
$name=$_POST['itemname'];

$con=new mysqli("127.0.0.1","root","","project")or die("Error in database connection");
$query="INSERT INTO itemstore(itemname,cost) VALUES('".$_POST["itemname"]."','".$_POST["cost"]."')";

$result=mysqli_query($con,$query);
mysqli_close($con);
echo "Item Stored to menu successfully";
?>