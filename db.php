<?php
$con=mysqli_connect("localhost","root","root");
$dbname="Event";
if(!$con)
{
    die("Error".mysqli_error());
}
else
{
    echo "Database is connected successfully";
}
mysqli_close($con);
?>