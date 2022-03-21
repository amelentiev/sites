<?
require_once 'mod1123312mod.php';
?>
<nav>
	<a onclick="resctr('1')" class="logolibk"><div class="nav-item-real">Главная</div></a>
	<a onclick="resctr('2')"><div class="nav-item-real">Список пользователей</div></a>
	<a onclick="resctr('3')"><div class="nav-item-real">Добавление пользователей</div></a>
	<a  onclick="resctr('4')"><div class="nav-item-real">Управление рассылкой</div></a>
</nav>
<script type="text/javascript">
	function resctr(arh) {
		$.ajax({
			method: "POST", 
			url: "page/tit"+arh+".php", 
			context: $( "#contein" ),
			success: function ( msg ) { 
				$( this ).text( "" );
				$( this ).append( msg );
			}
		})
	}
</script>