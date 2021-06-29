  
<?php
    if($_POST)
    {
        $name = $_POST['name'];
        $seat = $_POST['seat'];
        $meal = $_POST['meal'];
    }
?>

<html>
<head>
    <title>Cookies</title>
</head>
<body >
<center>
<div id="second"  style="text-align:left">
    <h1>------XYZ FLIGHTS------</h1>
    <BR>
    Thankyou for choosing our Flights<br>
    The cookie values are<br>
    <?php
        
echo "Name: ".$_COOKIE['name'];
echo '<br>';
echo "Seat: ".$_COOKIE['seat'];
echo '<br>';
echo "Food: ".$_COOKIE['food'];
?>
</div>
</center>
</body>
</html>