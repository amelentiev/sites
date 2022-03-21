<?
session_start();
require_once 'connect.php';
$f1=$_POST['nm'];
$f2=$_POST['fm'];
$f3=$_POST['em'];
$f4=$_POST['ps'];
$stat=$_POST['stat'];
$sql = mysqli_query($dbc, 'SELECT count(*) FROM `users` where `users`.`email` = "'.$f3.'" ');

$result=mysqli_fetch_array($sql);
if ($result[0]!=0){
	echo "
	$('#care').text('');
	$('#care').append('Данный e-mail уже зарегестрирован');
	$('#care').css('display','unset');
	";
	exit();
}
$request='INSERT INTO `users`(`ID`, `img`, `name`, `surname`, `email`, `password`, `podpiska`,`free`, `date`) VALUES (NULL,"standart","'.$f1.'","'.$f2.'","'.$f3.'","'.$f4.'",0,0,NULL)';
$sql = mysqli_query($dbc, $request);
$_SESSION['auth']='true';
$_SESSION['email']=$f3;
//echo $request;
if ($stat=='0') {
	echo "document.location.replace('http://".$_SERVER['SERVER_NAME']."/lk.php');";
}
elseif ($stat=='1') {
	echo "document.location.replace('http://".$_SERVER['SERVER_NAME']."/start.php');";
}
//echo "$('.m2').css('display','none')";
exit();
?>