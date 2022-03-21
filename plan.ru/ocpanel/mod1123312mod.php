<?
if(isset($_SESSION['adm_log']) & isset( $_SESSION['adm_pas']) & $_SESSION['adm_log']=='true' & $_SESSION['adm_pas']=='true'){
	$ark='ark';
}
else{
	echo "<script>document.location.replace('http://".$_SERVER['SERVER_NAME']."/ocpanel');</script>";
	exit();
}
?>