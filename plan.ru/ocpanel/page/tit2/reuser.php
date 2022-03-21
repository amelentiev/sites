<?
session_start();
require_once '../../mod1123312mod.php';
require_once '../../../connect.php';
if ($_POST["pd"]=="Отсутствует") {
	$pd=0;
}
elseif($_POST["pd"]=="Платная"){
	$pd=2;
}
elseif($_POST["pd"]=="Бесплатная"){
	$pd=1;
}
if ($_POST["st"]=="Доступна") {
	$st=0;
}
elseif($_POST["st"]=="Не доступна"){
	$st=1;
}
$sql = mysqli_query($dbc, 'UPDATE `users` SET `name`="'.$_POST['nm'].'",`surname`="'.$_POST['fm'].'",`email`="'.$_POST['em'].'",`password`="'.$_POST['ps'].'",`podpiska`='.$pd.',`free`='.$st.',`date`="'.$_POST['dt'].'" WHERE ID='.(int)$_POST['usosid']);
echo "Пользователь успешно отредактирован";