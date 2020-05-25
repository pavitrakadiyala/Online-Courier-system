<?php
$con=new mysqli("localhost","root","","onlinecourier")or die("Error in database connection");

$query="SELECT  * FROM elogin"  or die("Failed to query database".mysql_error());
$result=mysqli_query($con,$query);
echo "<table>";
echo "<tr>";
echo "<th> Id </th>";
echo "<th> Customer Name </th>";
echo "<th> User Name </th>";
echo "<th> Email </th>";
echo "<th> Address </th>";
echo "<th> Mobile No </th>";
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
echo "</tr>";

}
echo "</table>";
echo "<form method=post action=userdelete.php>";
echo  "USERID: <input type=text name=id required><BR><BR><BR>";
echo "<input type=submit value=DELETE>";
echo "</form>";
mysqli_close($con);

?>


