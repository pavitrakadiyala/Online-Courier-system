<?php
$con=new mysqli("localhost","root","","onlinecourier")or die("Error in database connection");
$num=$_POST["id"];

$query1="Delete from elogin where eid=$num";
$result1=mysqli_query($con,$query1);


$query="SELECT  * FROM elogin"  or die("Failed to query database".mysql_error());
$result=mysqli_query($con,$query);
echo "<table>";
echo "<tr>";
echo "<th> id </th>";
echo "<th>Name </th>";
echo "<th>username </th>";
echo "<th>email </th>";
echo "<th>address </th>";
echo "<th>mobile </th>";

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
echo "</table><BR><BR><BR>";
echo "<form method=post action=userdelete.php>";
echo  "USERID: <input type=text name=id required><BR><BR><BR>";
echo "<input type=submit value=DELETE>";
echo "</form>";
mysqli_close($con);

?>

$query1="SELECT  pid FROM prodetails" or die("Failed to query database".mysql_error());
$result1=mysqli_query($con,$query1);
$row=mysqli_fetch_array($result1);
if($row['pid']==$pid)
{
    echo " package already registered ";
}
else
{

    
$query="INSERT INTO sender (`sname`, `smobile`, 'pid',`saddress`,`sendon`)  VALUES('".$_POST["sname"]."','".$_POST["smobile"]."','".$_POST["pid"]."','".$_POST["saddress"]."','".$_POST["sendon"]."')";
$result=mysqli_query($con,$query);




<tr><td>sender name:</td><td><input type="text" size="20" maxlength="40" name="sname" required></td></tr> 
<tr><td>sender mobile:</td><td><input type="text" size="20" maxlength="40" name="smobile" required></td></tr>
<tr><td>sender address:</td><td><textarea cols="30" rows="5" wrap="hard" name="saddress" required></textarea></td></tr> 
<tr><td>send on:</td><td><input type="date" size="20" maxlength="40" name="sendon" required></td></tr> 
<tr><td>receiver name:</td><td><input type="text" size="20" maxlength="40" name="raddress" required></td></tr> 
<tr><td>receiver address:</td><td><textarea cols="30" rows="5" wrap="hard" name="rname" required></textarea></td></tr>
<tr><td>receiver mobile:</td><td><input type="text" size="20" maxlength="40" name="rmobile" required></td></tr>
<tr><td>expect delivery date:</td><td><input type="date" size="20" maxlength="40" name="ddate" required></td></tr> 