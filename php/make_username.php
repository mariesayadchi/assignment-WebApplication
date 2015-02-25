<?php
//connect to database
$mysql_host = 'localhost';
$mysql_user = 'root' ;
$mysql_pass = '';
$mysql_db = 'Marie_test' ;
$makeit = true;
$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_pass,$mysql_db);

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//get the username
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$email = mysqli_real_escape_string($conn, $_POST['email']);



    
$result = mysqli_query($conn, "SELECT * FROM user WHERE email = '$email' LIMIT 1");
if($result ){
     $row = mysqli_fetch_assoc($result);
    if($row){
    echo 1;
    $makeit = false;
    }
}

if($makeit){

$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' LIMIT 1");
if($result ){
        $row = mysqli_fetch_assoc($result);
    if($row){
    echo 2;
    $makeit = false;
    }
}
}//

if($makeit){
$result = mysqli_query($conn, "INSERT INTO `user`( `username`, `pass`, `email`) VALUES ('$username','$password','$email')");
if($result){echo 0;}
}
mysqli_close($conn);

?>


