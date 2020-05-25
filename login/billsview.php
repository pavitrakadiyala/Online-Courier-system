<html>
<head>
<title>ourcourierservice.com</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style type="text/css">
body{background-image:url("login.jpg");}
table {
    border-collapse:collapse;
    width:100%;
    color: #d96459;
    font-family: monospace;
    font-size: 25px;
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
        
    
        <th>bill id</th>
        <th>package id</th>
        <th>transaction date </th>
    </tr>
    <?php
    

    $connect=mysqli_connect("localhost","root","") or die('ygawi'.mysqli_error());
    mysqli_select_db($connect,'onlinecourier');
    $query="SELECT `billid`, `pid`, `datet` FROM `bill` ";
    $result=mysqli_query($connect,$query) or die(mysqli_error($connect));
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
           
            
            $billid=$row['billid'];
            $pid=$row['pid'];
            $datet=$row['datet'];
            echo"<tr><td>" . $row["billid"] ."</td><td>" . $row["pid"] ."</td><td>".$row["datet"]."</td></tr>";

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
 