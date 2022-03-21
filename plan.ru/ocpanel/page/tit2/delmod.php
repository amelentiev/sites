<?
session_start();
require_once '../../mod1123312mod.php';
require_once '../../../connect.php';
$sql = mysqli_query($dbc, 'DELETE FROM `users` WHERE ID='.(int)$_POST['usosid']);