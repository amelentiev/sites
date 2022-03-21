<?
session_start();
$_SESSION['auth']='false';
$strt=$_SERVER['SERVER_NAME'];
$strt='http://'.$strt;
?>
<script type="text/javascript">
	<?
	echo "document.location.replace('".$strt."');";
	?>
</script>