<?php  
session_start();
include 'db.php';
$dob=$_POST['dob'];
$age=$_POST['age'];
$sex=$_POST['sex'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$sql="UPDATE admin_login ". " SET dob=?, age=?, sex=?, contact=?, email=? WHERE username=?";
$stmt=$con->prepare($sql);
$stmt->bind_param("sissss",$dob,$age,$sex,$contact,$email,$_SESSION['sess_user']);
if($stmt->execute())
{
    echo "Data Updated successfully";
}
$stmt->close();
$con->close();
?>