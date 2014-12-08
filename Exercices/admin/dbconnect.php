<?php

$host = "localhost";
$user = "root";
$pass = "root";
$dbase = "mywgzimmerdb";
$conn = @mysql_connect($host, $user, $pass);
if ($conn){
    $db = mysql_select_db($dbase);
$error = "fuck1!";}
else{
    $error = "fuck2!";
    exit("connection error");
}
?>
