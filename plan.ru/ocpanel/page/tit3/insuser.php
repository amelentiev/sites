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

$sql = mysqli_query($dbc, 'INSERT INTO `users`(`ID`, `img`, `name`, `surname`, `email`, `password`, `podpiska`, `free`, `date`) VALUES (NULL,"standart","'.$_POST["nm"].'","'.$_POST["fm"].'","'.$_POST["em"].'","'.$_POST["ps"].'",'.$pd.','.$st.',
"'.$_POST["dt"].'")');
echo "Пользователь успешно добавлен!";