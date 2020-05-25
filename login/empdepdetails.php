<html>
<head>
<title>ourcourierservice.com</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style type="text/css">
body{background-image:url("login.jpg");}
table {
    border-collapse:collapse;
    width:75%;
    color: #d96459;
    font-family: monospace;
    font-size: 20px;
    text-align: left;

}
th{
    background-color: #d96459;
    color:white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
    <tr>
        <th>Employee id</th>
        <th>Dependentname  </th>
        <th>Sex</th>
        <th>Relationship</th>
    </tr>
    <?php
    

    $connect=mysqli_connect("localhost","root","") or die('ygawi'.mysqli_error());
    mysqli_select_db($connect,'onlinecourier');
    $query="SELECT `eid`, `dependentname`, `sex`, `relationship` FROM `dependents` ";
    $result=mysqli_query($connect,$query) or die(mysqli_error($connect));
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
           
            
            $eid=$row['eid'];
            $dependentname=$row['dependentname'];
            $sex=$row['sex'];
            $relationship=$row['relationship'];
            

            echo"<tr><td>" . $row["eid"] ."</td><td>".$row["dependentname"]."</td><td>".$row["sex"]."</td><td>".$row["relationship"]."</td></tr>";

        }
        echo "</table>";
    }
    else{
        echo "o result";
    }
    mysqli_close($connect);        
    ?>


</table>
<br><br><br>
<a href="managerafterlogin2.html" target="_parent" style="color:red;font-size:140%;">return</a>



</body>
</html>
