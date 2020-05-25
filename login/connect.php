<?php
include_once('status.php');
$query="select *  from prodetails ";
$result=mysqli_query($con,$query);

mysqli_close($con);

?>
   

<html>
<head>
<title> your package details are </title>
</
head>
<body>
<th>pid</th>
<tr>
<th>weight</th>
<th>cost</th>
<th>eid</th>
<tr>

<?php
 while($rows=mysqli_fetch_assoc($result))
 {
?>

    <tr>
         <td> <?php echo $rows ['pid'];?></td>
         <td> <?php echo $rows['eid'];?></td> 

    </tr>
<?php

 }
?>

<th>g;gg</th>
</body>
</html>





