<html>
<head>
<title>ourcourierservice.com</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<style type="text/css">
body{background-image:url("login.jpg");}
</style>
</head>

</html>



<?php

if(isset($_POST['search']))
{
    $pid=$_POST['pid'];
    $connect=mysqli_connect("localhost","root","") or die('ygawi'.mysqli_error());
    mysqli_select_db($connect,'onlinecourier');
    $query="SELECT pid,wt,cost,eid,expdate from prodetails  where pid =$pid ";
    
    
    $result=mysqli_query($connect,$query) or die(mysqli_error($connect));
    if(mysqli_num_rows($result)>0)
    {
        while($row=mysqli_fetch_array($result))
        {
            $wt=$row['wt'];
            $cost=$row['cost'];
            $eid=$row['eid'];
            $expdate=$row['expdate'];
        }
    }
    else{

        $wt="";
        $cost="";
        $eid="";
        $expdate="";
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
    $expdate="";

}


?>
<html>
<head>
<title> your package details are </title>



</head>
<form action="status.php" method="post">
<h1 align="center">ITS almost THERE</h1><br>
    pid:<input type="text" name="pid" value="<?php echo $pid;?>"><br><br>
    wt:<input type="text" name="wt" value="<?php echo $wt;?>"><br><br>
    cost:<input type="text" name="cost" value="<?php echo $cost;?>"><br><br>
    eid:<input type="text" name="eid" value="<?php echo $eid;?>"><br><br>
    expdate:<input type="date" name="expdate" value="<?php echo $expdate;?>"><br><br>
    <input type="submit" name="search" value="track" >
</form>



<a href="track2.html" target="_parent" style="color:red;font-size:140%;">return</a>


</body>
</html>

 