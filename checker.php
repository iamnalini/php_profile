<?php
include 'db.php';
session_start();
$uname=$_POST['username'];  
$pass=$_POST['passwrd']; 
$sql="SELECT username,passwrd FROM admin_login WHERE username=?"." AND passwrd=?";
$stmt=$con->prepare($sql);
$stmt->bind_param("ss",$uname,$pass);
$stmt->execute();
$result=$stmt->get_result();
$row=$result->fetch_array(MYSQLI_ASSOC);
if($row['username']==$uname) 
{
    $_SESSION['sess_user']=$uname;  
    echo "1";
}
else{
    echo "Login failed";
}

?>