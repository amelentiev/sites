<?
session_start();
require_once '../mod1123312mod.php';
require_once '../../connect.php';
?>
<div class="obertka">
	<table>
		<tr>
			<td>Имя:</td>
			<td><input id="in1" type="text" name="nm"></td>
		</tr>
		<tr>
			<td>Фамилия:</td>
			<td><input id="in2" type="text" name="fm"></td>
		</tr>
		<tr>
			<td>E-mail:</td>
			<td><input id="in3" type="text" name="em"></td>
		</tr>
		<tr>
			<td>Пароль:</td>
			<td><input id="in4" type="text" name="ps"></td>
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
			<td><input id="in7" type="date" name="dt"></td>
		</tr>
	</table>
	<a onclick="new_user()"><div>Добавить</div></a>
</div>
<script type="text/javascript">
	function new_user() {
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
			url: "page/tit3/insuser.php", 
			context: $( "#contein" ),
			data: {
				nm: $('#in1').val(),
				fm: $('#in2').val(),
				em: $('#in3').val(),
				ps: $('#in4').val(),
				pd: $('#in5').val(),
				st: $('#in6').val(),
				dt: $('#in7').val()
			},
			success: function ( msg ) { 
				$( this ).text( "" );
				$( this ).append( msg );
			}
		});
	}
</script>