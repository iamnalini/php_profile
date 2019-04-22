<?php  
include 'db.php';
$uname=$_POST['user'];  
$pass=$_POST['pass']; 
$dob="";
$age=0;
$sex="";
$contact="";
$email="";
$sql="SELECT username,passwrd FROM admin_login WHERE username=?" ;
$stmt=$con->prepare($sql);
$stmt->bind_param("s",$uname);
$stmt->execute();
$result=$stmt->get_result();
$row=$result->fetch_array(MYSQLI_ASSOC);
if($row['username']==$uname) 
    echo "Username already exists";
else{
    $stmt=$con->prepare("INSERT INTO admin_login (username, passwrd,dob,age,sex,contact,email) VALUES(?,?,?,?,?,?,?)");
    $stmt->bind_param("sssisss",$uname,$pass,$dob,$age,$sex,$contact,$email);
    if($stmt->execute()){  

        $current_data = file_get_contents('jsonformat.json');
        $array_data = json_decode($current_data,true);
        $extra = array (
            'username' => $_POST['user'],
            'password' => $_POST['pass']
        );
        $array_data[]=$extra;
        $final_data=json_encode($array_data);
        file_put_contents('jsonformat.json',$final_data);
        echo "Account Successfully Created";
    }}
    $stmt->close();
    $con->close();
?>  