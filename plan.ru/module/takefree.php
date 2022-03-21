<?
session_start();
require_once '../connect.php';
//проверка на вход
if (empty($_SESSION['auth']) || empty($_SESSION['email'])) {
	echo "<script>document.location.replace('http://".$_SERVER['SERVER_NAME']."/reg.php?ins1');</script>";
	exit();
}
if ($_SESSION['auth']=='false') {
	echo "<script>document.location.replace('http://".$_SERVER['SERVER_NAME']."/reg.php?ins1');</script>";
	exit();
}
$f1=$_SESSION['email'];
$sql = mysqli_query($dbc, 'SELECT * FROM `users` where `users`.`email` = "'.$f1.'" ');
$result=mysqli_fetch_array($sql);
if ($result["free"]==0) {
	$tomorrow  = date('Y-m-d',mktime(0, 0, 0, date("m")  , date("d")+30, date("Y")));
	$request='UPDATE `users` SET `podpiska`=1 ,`free`=1, `date`="'.$tomorrow.'" where `users`.`email` = "'.$f1.'"';
	$sql = mysqli_query($dbc, $request);
	echo "<script>document.location.replace('http://".$_SERVER['SERVER_NAME']."/lk.php?tram1');</script>";
}
else{
	echo "<script>document.location.replace('http://".$_SERVER['SERVER_NAME']."/lk.php?tram0');</script>";
}
?>