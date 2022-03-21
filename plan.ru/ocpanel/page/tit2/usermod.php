<?
session_start();
require_once '../../mod1123312mod.php';
require_once '../../../connect.php';
if (!isset($_POST['usosid'])) {
	echo '<script>resctr("2")</script>';
	exit();
}
$sql = mysqli_query($dbc, 'SELECT * FROM `users` where ID='.(int)$_POST['usosid']);
$result=mysqli_fetch_array($sql);
echo '<input id="hid" style="display:none" type="text" name="id" value="'.(int)$_POST['usosid'].'">';
?>
<div class="obertka">
	<table>
		<tr>
			<td>Имя:</td>
			<td><input id="in1" type="text" name="nm" value="<?echo $result['name'];?>"></td>
		</tr>
		<tr>
			<td>Фамилия:</td>
			<td><input id="in2" type="text" name="fm" value="<?echo $result['surname'];?>"></td>
		</tr>
		<tr>
			<td>E-mail:</td>
			<td><input id="in3" type="text" name="em" value="<?echo $result['email'];?>"></td>
		</tr>
		<tr>
			<td>Пароль:</td>
			<td><input id="in4" type="text" name="ps" value="<?echo $result['password'];?>"></td>
		</tr>
		<tr>
			<td>Подписка</td>
			<td>
				<select id="in5" name="pd">
					<option>Отсутствует</option>
					<option>Платная</option>
					<option>Бесплатная</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Статус бесплатной подписки:</td>
			<td>
				<select id="in6" name="st">
					<option>Доступна</option>
					<option>Не доступна</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>Дата окончания подписки:</td>
			<td><input id="in7" type="date" value="<?echo $result['date'];?>" name="dt"></td>
		</tr>
	</table>
	<a onclick="re_user()"><div>Редактировать</div></a>
	<span class='rta5'></span>
</div>
<?
if ($result["podpiska"]==0) {
	echo '<script>$("#in5").val("Отсутствует");alert("ok")</script>';
}
elseif($result["podpiska"]==2){
	echo '<script>$("#in5").val("Платная");</script>';
}
elseif($result["podpiska"]==1){
	echo '<script>$("#in5").val("Бесплатная");</script>';
}
if ($result["free"]==1) {
	echo '<script>$("#in6").val("Не доступна");</script>';
}
elseif($result["free"]==0){
	echo '<script>$("#in6").val("Доступна");</script>';
}
?>
<script type="text/javascript">
	function re_user() {
		if ($('#in1').val()=='') {
			alert('Не все поля заполнены');
			return;
		}
		if ($('#in2').val()=='') {
			alert('Не все поля заполнены');
			return;
		}
		if ($('#in3').val()=='') {
			alert('Не все поля заполнены');
			return;
		}
		if ($('#in4').val()=='') {
			alert('Не все поля заполнены');
			return;
		}
		$.ajax({
			method: "POST", 
			url: "page/tit2/reuser.php", 
			context: $( ".rta5" ),
			data: {
				nm: $('#in1').val(),
				fm: $('#in2').val(),
				em: $('#in3').val(),
				ps: $('#in4').val(),
				pd: $('#in5').val(),
				st: $('#in6').val(),
				dt: $('#in7').val(),
				usosid: $('#hid').val()
			},
			success: function ( msg ) { 
				$( this ).text( "" );
				$( this ).append( msg );
			}
		});
	}
</script>