<?
session_start();
require_once 'mod1123312mod.php';
/*
1) общие данные (метрика)
2) пользователи
	просмотр/редактирование/удаление/поиск
3) добавление пользователей
4) управление рассылкой/включение/отключение/поиск
*/
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>admin</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
	<script
	src="https://code.jquery.com/jquery-3.4.1.js"
	integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
	crossorigin="anonymous"></script>
</head>
<body>
	<header>
		<div class="logo"><img class="adm-img" src="img/RuPlan.png"></div>
		<div style="cursor: pointer;" onclick="document.location.replace('http://<?=$_SERVER['SERVER_NAME']?>/ocpanel');" class="nav-navigation">Выйти</div>
	</header>
	<main>
		<? require_once 'navmodrestr.php'?>
		<div id="contein" class="contein">
			<script type="text/javascript">resctr('1');</script>
		</div>
	</main>
	<footer></footer>
</body>
</html>