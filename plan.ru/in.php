<?session_start();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" type="text/css" href="rta1.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<script
  src="https://code.jquery.com/jquery-3.4.1.js"
  integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
  crossorigin="anonymous"></script>
</head>
<body>
	<header>
		
		<div class="logo"><a href="index.php"><img src="img/RuPlan.png"></a></div>
		<div class="nav">
			<div class="subnav">
				<a href="" class="link" style="margin-right: 2rem;">Как это работает</a>
				<a href="" class="link">Поддержка</a>
				<a href="" class="link">Подписка</a>
			</div>
			<div class="inform"><a href="" style="visibility: hidden;" class="link2">Попробовать бесплатно</a></div>
			<div class="regnav">
				<a href="reg.php" class="reglink link">Регистрация</a>
			</div>
		</div>
	</header>
	<main class="m2">
		<div class="h1"><p class="ph1">Вход</p></div>
		<div class="rta1">
			<p class="classic2">Имя или e-mail</p>
			<input id="in1" class="inpr" type="text" name="">
		</div>
		<div class="rta1">
			<p class="classic2">Пароль</p>
			<input id="in2" class="inpr" type="password" name="">
		</div>
		<div class="rta2">
			<div id="care" class="care">Не верный логин/пароль</div>
			<p class="link2 rta4">Еще не зарегистрированы ?</p>
			
		</div>
		<a onclick="bdsm1()" class="btn"><p class="linkcont rta5">войти</p></a>
	</main>
	<footer class="rta3"><p class="pfrta">RuPlan</p></footer>
	<div class="back2">
		<svg width="1920" height="1080" style='width: 100vw;' viewBox="0 0 1920 1080" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M444.694 659.954C598.755 814.016 598.756 1063.8 444.694 1217.86C294.492 1368.06 61.9074 1600.65 61.9074 1600.65L-217.046 1321.69L-496 1042.74C-496 1042.74 -263.415 810.155 -113.214 659.954C40.8483 505.892 290.632 505.892 444.694 659.954Z" fill="#4A9DFF"/>
<path d="M418.694 683.953C572.755 838.015 572.756 1087.8 418.694 1241.86C268.492 1392.06 35.9074 1624.65 35.9074 1624.65L-243.046 1345.69L-522 1066.74C-522 1066.74 -289.415 834.155 -139.214 683.953C14.8483 529.891 264.632 529.892 418.694 683.953Z" fill="#2087FF"/>
<path d="M392.956 711.532C534.991 853.567 534.991 1083.85 392.956 1225.89C254.48 1364.36 40.0514 1578.79 40.0514 1578.79L-217.126 1321.61L-474.304 1064.44C-474.304 1064.44 -259.876 850.008 -121.399 711.532C20.6362 569.496 250.921 569.497 392.956 711.532Z" fill="white"/>
<path d="M1463.95 610.694C1309.89 456.632 1309.89 206.848 1463.95 52.7864C1614.16 -97.4154 1846.74 -330 1846.74 -330L2125.69 -51.0464L2404.65 227.907C2404.65 227.907 2239.7 610.798 2089.5 761C1935.44 915.062 1618.02 764.755 1463.95 610.694Z" fill="#4A9DFF"/>
<path d="M1481.95 602.694C1327.89 448.632 1327.89 198.848 1481.95 44.7865C1632.16 -105.415 1864.74 -338 1864.74 -338L2143.69 -59.0462L2422.65 219.907C2422.65 219.907 2257.7 602.798 2107.5 753C1953.44 907.062 1636.02 756.755 1481.95 602.694Z" fill="#2086FF"/>
<path d="M1515.69 559.115C1373.66 417.08 1373.66 186.796 1515.69 44.7608C1654.17 -93.7156 1591 -485 1591 -485L2125.77 -50.9667L2382.95 206.211C2382.95 206.211 2193.98 605.024 2055.5 743.5C1913.47 885.535 1657.73 701.15 1515.69 559.115Z" fill="white"/>
</svg>
	</div>
</body>
<script type="text/javascript">
	function bdsm1() {
		var a1=$('#in1').val();
		var a2=$('#in2').val();
		$.ajax({
			method: "POST",
			url: 'mod1.php',
			context: $('#s1'),
			data: {
				nm:a1,
				ps:a2
			},
			success: function( msg ){
				$('#s1').text('');
				$('#s1').append(msg);
			}
		});
	}
</script>
<script type="text/javascript" id="s1"></script>
</html>