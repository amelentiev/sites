<?
require_once 'connect.php';
$f1=$_POST['em'];
$sql = mysqli_query($dbc, 'SELECT count(*) FROM `mail` where `mail`.`email` = "'.$f1.'" ');
$result=mysqli_fetch_array($sql);
if ($result[0]>0){
	echo "
	<script>
	if (vrot3==1) {
		$('#predel13').text('');
		$('#predel13').append('Вы уже подписались');
	}
	else{
		vrot3=1;
		$('#predel13').text('');
		$('#predel13').append('Вы уже подписались');
	}
	</script>
	";
	exit();
}
$request='INSERT INTO `mail`(`ID`, `email`) VALUES (NULL,"'.$f1.'")';
$sql = mysqli_query($dbc, $request);
echo "
<script>
	if (vrot3==1) {
		$('#predel13').text('');
		$('#predel13').append('Подписка на новостную рассылку прошла успешно');
	}
	else{
		vrot3=1;
		$('#predel13').text('');
		$('#predel13').append('Подписка на новостную рассылку прошла успешно');
	}
	</script>
	";
?>