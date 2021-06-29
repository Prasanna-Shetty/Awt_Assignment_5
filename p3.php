<html>
<head>
    <title>Session</title>
    
</head>
<body >
    <center>
        <form method="post">
    <table border="1">
        <tr>
            <th colspan="2"> Login Sessions</th>
        </tr>
        <tr>
            <th>Username</th><th><input type="text" name="username"></th>
        </tr>
        <tr>
            <th>Password</th><th><input type="password" name="password"></th>
        </tr>        
        <tr hidden="">
            <th>count</th><th><input type="number" name="count"></th>
        </tr>
        <tr>
            <th colspan="2"><input type="submit" name="login" value="Login"><input type="submit" name="logout" value="Logout"></th>
        </tr> 
    </table>
</form>
    </center>
<?php


if(isset ($_POST["login"]))
{
        session_start();
        
if(($_SESSION["user_name"]==$_POST['username']) && ($_SESSION["password"]=$_POST['password']) && ($_SESSION["count"]>=1))
{
$_SESSION['count'] += 1;
echo "Welcome back ".$_SESSION["user_name"]. " <br> You have logged in ".$_SESSION['count'] ." times";
}
else 
{

$_SESSION["user_name"]=$_POST['username'];
$_SESSION["password"]=$_POST['password'];
echo "Hello ".$_SESSION["user_name"];
$_SESSION['count'] = 1;
echo"<br>This is your first visit";
} }
if(isset ($_POST['logout'])){
$_SESSION['count'] = 0;
echo $_SESSION["user_name"]=$_POST['username'];
SESSION_unset();
echo"Logged Out";
}
?>
</body>
</html>