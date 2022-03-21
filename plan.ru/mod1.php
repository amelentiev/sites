<?php
session_start();
require_once 'connect.php';
$f1=$_POST['nm'];
$f2=$_POST['ps'];
$sql = mysqli_query($dbc, 'SELECT count(*) FROM `users` where `users`.`email` = "'.$f1.'" ');
$result=mysqli_fetch_array($sql);
if ($result[0]==0){
	echo "
	$('#care').css('display','unset');
	";
	exit();
}
$sql = mysqli_query($dbc, 'SELECT `email`,`password` FROM `users` where `users`.`email` = "'.$f1.'" ');
$result=mysqli_fetch_array($sql);
if ($result['password']==$f2) {
	$_SESSION['auth']='true';
	$_SESSION['email']=$f1;
	echo "
		document.location.replace('http://".$_SERVER['SERVER_NAME']."/lk.php');
	";
	exit();
}
?>