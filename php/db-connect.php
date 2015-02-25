<?php
$mysql_host = 'localhost';
$mysql_user = 'root' ;
$mysql_pass = '';
$mysql_db = 'Marie_test' ;
//$mysql_db = new mysqli($mysql_host,$mysql_user,$mysql_pass,$mysql_db) or die("unable to connect to mysql");
mysql_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db) or die("unable to connect to mysql");
mysql_select_db('Marie_test') or die("unable to connect to table");
//INSERT INTO `Marie_test`.`user` (`id`, `username`, `pass`) VALUES (NULL, 'fateme', '123');
echo "done!";
$query = "INSERT INTO `Marie_test`.`user` (`id`, `username`, `pass`) VALUES (NULL, 'fateme', '123');" ;
mysql_query($query);
?>