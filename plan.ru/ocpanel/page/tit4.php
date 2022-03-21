<?
session_start();
require_once '../mod1123312mod.php';
require_once '../../connect.php';
?>
<div class="obertka">
	<div class="filter-user">
		<input type="text" name="">
	</div>
	<div class="users">
		<?
		
		$sql = mysqli_query($dbc, 'SELECT COUNT(*) FROM `mail`');
		$cpages=mysqli_fetch_array($sql);
		$cpages=$cpages[0];
		if ($cpages==0) {
			echo "Пользователей нет";
			exit();
		}
		$pages=30;
		if(isset($_GET['page'])){
			$curent_page=((int)$_GET['page']-1)*$pages;
		}
		else{
			$curent_page=0;
		}
		$sql = mysqli_query($dbc, 'SELECT * FROM `mail` limit '.$curent_page.','.$pages);
		while($result=mysqli_fetch_array($sql)){
			echo '
					<div id="'.$result["ID"].'" class="user-el">
			<span class="user-name">'.$result["email"].'</span>
			<span class="user-controls">
				<span onclick="mail_del('.$result["ID"].')" class="user-link-list">Удалить</span>
			</span>
		</div>
					
			';
		}


		?>
		<div class="pages-list">
		<?
		if (((int)$cpages % $pages)!=0) {
			$iteraction_pages=intdiv((int)$cpages, $pages)+1;
		}
		else{
			$iteraction_pages=intdiv((int)$cpages, $pages);
		}
		for ($i=1; $i <= $iteraction_pages; $i++) { 
			echo '<span onclick="resctr4('.$i.')" class="pages-list-el">'.$i.'</span>';
		}
		?>
		</div>
	</div>
</div>
<script type="text/javascript">
	function resctr4(arh) {
		$.ajax({
			method: "POST", 
			url: "page/tit4.php?page="+arh+"", 
			context: $( "#contein" ),
			success: function ( msg ) { 
				$( this ).text( "" );
				$( this ).append( msg );
			}
		})
	}
	function mail_del(arh) {
		$('#'+arh).css('display','none');
		$.ajax({
			method: "POST", 
			url: "page/tit4/delmod.php", 
			context: $( "#contein" ),
			data: { 
				usosid: arh
			}
		})
	}
</script>