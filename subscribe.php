<?php
$con=mysqli_connect("localhost","root","root","");
$dbname="event";
mysqli_select_db($con,$dbname);
$a1 = $_GET['semail'];
$a2 = $_GET['spassword'];
$a3 = $_GET['srpassword'];
$insert1 = "insert into subscribe(email,password,rpassword)values('$a1','$a2','$a3')";
if(!mysqli_query($con,$insert1))
{
    die("Error".mysqli_error($con));
}
else{
    echo "Welcome $a2";
    header("Location: index.php");
}
mysqli_select_db($con,$dbname);
mysqli_close($con);

session_start();
$_SESSION['login']=$_GET['semail'];

?>

