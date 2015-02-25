<?php
//connect to database
$mysql_host = 'localhost';
$mysql_user = 'root' ;
$mysql_pass = '';
$mysql_db = 'Marie_test' ;

$conn = mysqli_connect($mysql_host, $mysql_user, $mysql_pass,$mysql_db);

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

//get the username
$username = mysqli_real_escape_string($conn, $_POST['username']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

//mysql query to select field username if it's equal to the username that we check '
$result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' LIMIT 1");

//if number of rows fields is bigger them 0 that means it's NOT available '
if($result ){
    //if the password matches
    $row = mysqli_fetch_assoc($result);
    

  if( $row['pass'] == $password ){
	echo 1;}else{echo 0;}
}else{

	echo 0;
}

mysqli_close($conn);

?>


