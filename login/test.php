<?php

if(isset($_POST['search']))
{
    $pid=$_POST['pid'];
    $connect=mysqli_connect("localhost","root","") or die('ygawi'.mysqli_error());
    mysqli_select_db($connect,'onlinecourier');
    $query="SELECT packid,wt,cost,eid from prodetails  where packid =$pid ";
    
    
    $result=mysqli_query($connect,$query) or die(mysqli_error($connect));
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
        {
            $wt=$row['wt'];
            $cost=$row['cost'];
            $eid=$row['eid'];
        }
    }
    else{

        $wt="";
        $cost="";
        $eid="";
    }
   
    mysqli_free_result($result);
    mysqli_close($connect);
    




}

else
{
    $pid="";
    $wt="";
    $cost="";
    $eid="";

}


?>
<html>
<head>
<title> your package details are </title>



</head>
<form action="test.php" method="post">
    pacid:<input type="text" name="pid" value="<?php echo $pid;?>"><br><br>
    weight:<input type="text" name="weight" value="<?php echo $wt;?>"><br><br>
    cost:<input type="text" name="cost" value="<?php echo $cost;?>"><br><br>
    eid:<input type="text" name="eid" value="<?php echo $eid;?>"><br><br>
    <input type="submit" name="search" value="track" >
</for m>
<body>
<th>pid</th>
<tr>
<th>weight</th>
<th>cost</th>
<th>eid</th>
<tr>

 

<th>g;gg</th>
</body>
</html>

 