<?php header('Content-Type: text/html; charset=UTF-8'); ?>
<?php
$con=new mysqli("localhost","root","","project")or die("Error in database connection");
$num=$_POST["id"];
include 'Escaper.php';
$escaper = new Zend\Escaper\Escaper('utf-8');
$output = $escaper->escapeHtmlAttr($num);

$query2="Select * from items where id=$num";
$result2=mysqli_query($con,$query2);
$row1=mysqli_fetch_array($result2);
$item=$row1['Item'];

$quantity=$row1['Quantity'];

$id=$row1['id'];
$sugg=$row1['suggestion'];
$deladd=$row1['Deliveryaddress'];
$mobno=$row1['MobileNo'];
$paytype=$row1['PaymentType'];

$query3="insert into viewitems(Item,Quantity,id,suggestion,Deliveryaddress,MobileNo,PaymentType) VALUES('".$item."','".$quantity."','".$id."','".$sugg."','".$deladd."','".$mobno."','".$paytype."')";
$result3=mysqli_query($con,$query3);
$query1="Delete from items where id=$num";
$result1=mysqli_query($con,$query1);


$query="SELECT  * FROM items"  or die("Failed to query database".mysql_error());
$result=mysqli_query($con,$query);
echo "<table>";
echo "<tr>";
echo "<th> Orderid </th>";
echo "<th> Items </th>";
echo "<th> Quantity </th>";
echo "<th> Suggestions </th>";
echo "<th> Delivery Address </th>";
echo "<th> Mobile number  </th>";
echo "<th> Payment type </th>";
echo "</tr>";

while($row=mysqli_fetch_row($result))
{
echo "<tr>";
echo "<td>$row[6]</td>";
echo "<td>$row[0]</td>";
echo "<td>$row[1]</td>";
echo "<td>$row[2]</td>";
echo "<td>$row[3]</td>";
echo "<td>$row[4]</td>";
echo "<td>$row[5]</td>";

echo "</tr>";

}
echo "</table><BR><BR><BR>";
echo "<form method=post action=deleteorder.php>";
echo  "ORDERID: <input type=text name=id required><BR><BR><BR>";
echo "<input type=submit value=DELETE>";
echo "</form>";
mysqli_close($con);

?>

