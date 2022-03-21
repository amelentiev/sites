<?php
//mb_internal_encoding("utf-8");
//header("Content-Type: text/html; charset=utf-8");
//31.31.198.58
$dbc = mysqli_connect('localhost', 'root', '', 'plan') OR DIE('Ошибка подключения к базе данных');
/* check connection */ 
/* изменение набора символов на utf8 */ 
if (!mysqli_set_charset($dbc, "utf8")) { 
printf("Ошибка при загрузке набора символов utf8: %s\n", mysqli_error($dbc)); 
exit(); 
} else { 
//printf("Текущий набор символов: %s\n", mysqli_character_set_name($dbc));
}
//$codepage = mysqli_set_charset($dbс, "utf8");
?>