<?php
$con=new mysqli("localhost","root","","project")or die("Error in database connection");

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
