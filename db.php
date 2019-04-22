<?php

$con=mysqli_connect("remotemysql.com","fDwGQcAkjO","eHWnCwJ3oW","fDwGQcAkjO");
if($con->connect_error)
{
    die("Failed to connect ". $con->connect_error);
}

?>