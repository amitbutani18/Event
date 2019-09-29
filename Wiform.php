<?php
$con=mysqli_connect("localhost","root","root","");
$dbname="event";
mysqli_select_db($con,$dbname);

$a1 = $_POST['firstname'];
$a2 = $_POST['email'];
$a3 = $_POST['mobile'];
$a4 = $_POST['address'];
$a5= $_POST['city'];
$a6= $_POST['state'];
$a7= $_POST['zip'];
$a8= $_POST['wd'];
$a9 =  $_POST['cardname'];
$a10 =  $_POST['cardnumber'];


$insert1 = "insert into winfo(firstname,email,mobile,address,city,state,zip,wd,cardname,cardnumber)values('$a1','$a2','$a3','$a4','$a5','$a6','$a7','$a8','$a9','$a10')";
if(!mysqli_query($con,$insert1))
{
    die("Error".mysqli_error($con));
}
else{
    echo "Welcome $a2";
    header("Location: Wselect.html");
}
mysqli_select_db($con,$dbname);
mysqli_close($con);

?>