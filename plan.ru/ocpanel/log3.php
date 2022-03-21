<?
session_start();
$rta1=$_POST['rtr1'];
$rta2=$_POST['rtr2'];
if ($rta1=='' || $rta2=='') {
	echo "$('.result').text('Введите корректные данные')";
	exit();
}
/*require_once '../connect.php';
$require = "SELECT COUNT(*) FROM `admin12` WHERE `admin12`.`log`='".$rta1."'";
$result = mysqli_query($dbc,$require);
if ($result[0]!=0) {
	$rty='r';
}
else{
	echo "$('.result').text('Не верный логин или пароль')";
	exit();
}
$require = "SELECT * FROM `admin12` WHERE `admin12`.`log`='".$rta1."'";
$result = mysqli_query($dbc,$require);*/
if ($rta1!='rta' || $rta2!='rta') {
	echo "$('.result').text('Не верный логин или пароль')";
	exit();
}
else{
	$_SESSION['adm_log']='true';
	$_SESSION['adm_pas']='true';
	echo "<script>document.location.replace('http://".$_SERVER['SERVER_NAME']."/ocpanel/log4.php');</script>";
	exit();
}
?>