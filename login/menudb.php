<?php
$con=new mysqli("localhost","root","","project")or die("Error in database connection");
foreach($_POST['select'] as $selected){
if($selected=="Naan")
{
$q=$_POST["quantity1"];
}
if($selected=="Pulka")
{
$q=$_POST["quantity2"];
}
if($selected=="Panner Butter Masala")
{
$q=$_POST["quantity3"];
}
if($selected=="Panner Tikka")
{
$q=$_POST["quantity4"];
}
if($selected=="Fried Rice")
{
$q=$_POST["quantity5"];
}
if($selected=="Noodles")
{
$q=$_POST["quantity6"];
}
if($selected=="Briyani")
{
$q=$_POST["quantity7"];
}
if($selected=="Lemon Juice")
{
$q=$_POST["quantity8"];
}

$query="INSERT INTO orderitems(Item,Quantity) VALUES('".$selected."','".$q."')";
$result=mysqli_query($con,$query);}
mysqli_close($con);
echo "Are you sure!!! you want to continue???";
echo"<a href='order.html'>Click here to continue...</a>";
?>