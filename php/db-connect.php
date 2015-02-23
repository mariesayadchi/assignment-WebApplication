<?php
$user = 'root' ;
$pass = '';
$db = 'Marie_test' ;
$db = new mysqli('localhost',$user,$pass,$db) or die("unable to connect");
INSERT INTO `Marie_test`.`user` (`id`, `username`, `pass`) VALUES (NULL, 'fateme', '123');
echo "done!";
?>