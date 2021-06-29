<?php
include 'con_db.php';
?>
<html>
<head>
    <title>Random</title>
  
    <!-- CSS only -->

</head>
<body >
    <center>
        <form method="post" action="p4up.php">
    <table border="1">
        <tr>
            <th colspan="3" style="text-align: center;"> Update</th>
        </tr>   

        <tr>
            <th>Enter Passport Number</th><th><input type="text" name="passno" required></th>
        </tr>
        <tr>
            <th colspan="3" style="text-align:center"><input type="submit" name="submit" value="Update"></th>
        </tr>
    </table>
</form>
    </center>
</body>
</html>
<?php

if(isset($_POST["submit"]))
{
    $pno  =$_POST['passno'];
    $q =mysqli_query($con, "select * from passport WHERE passno = $pno ");
    $row=mysqli_fetch_array($q);
    if($row<0)
    {

        
    }

}

?>