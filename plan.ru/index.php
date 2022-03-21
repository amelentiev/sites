<?
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<script
	src="https://code.jquery.com/jquery-3.4.1.js"
	integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
	crossorigin="anonymous"></script>
	<script type="text/javascript" src="jquery.scrollstop.js"></script>
</head>
<body>
	<header>
		<div class="logo"><a href="index.php"><img src="img/RuPlan.png"></a></div>
		<div class="nav">
			<div class="subnav">
				<a onclick="scr2()" class="link" style="margin-right: 2rem;">Как это работает</a>
				<a href="" class="link">Поддержка</a>
				<a onclick="scr()" class="link">Подписка</a>
			</div>
			<div class="inform"><a href="start.php" class="link2">Попробовать бесплатно</a></div>
			<div class="regnav">
				<?
				if (!empty($_SESSION['auth']) || !empty($_SESSION['email'])) {
					if ($_SESSION['auth']=='false') {
						echo '<a href="in.php" class="reglink link">Вход</a>
						<a href="reg.php" class="reglink link">Регистрация</a>';
					}
					elseif($_SESSION['auth']=='true'){
						echo '
						<div class="svhcont">
						<svg style="height: 56%;" width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						<rect width="30" height="30" fill="url(#pattern0)"/>
						<defs>
						<pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
						<use xlink:href="#image0" transform="scale(0.0333333)"/>
						</pattern>
						<image id="image0" width="30" height="30" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAACnElEQVRIie2UTUiUURSGn/M5Q2qUWImEYoSMULhJsUUkCZU0TpYtCiFIZ0Zp1ypq4WYgKWgdhTQ/BG0ysLLmx+hHyCgyJAgJSiQjCIt+qETEme+0mAnEZpxPxxaF7+aDc9/zPvde7ndgRf+7ZClNzT1aMZuHA8Ce4M3t4/Lur4KdAW0U6Abq5i09E6Er7JF7yw52BbVLlTOpnpciDAOosh2oBhSlK9Ih55YN7AzoUYGrCF9FaQ97pX/uelNQDwIhlGIVWqMeuZYzuCGk+YUm40CpCbtiXhlK53OFtF5NBoEPOkVl9ITMLJRrZAMXKnuAjQJ9maAAYbc8QrgJlOkadmfLzQpWZRuACgPZvELSYySoyRksSgGAwo9sXky+A4gke3ICAxOpDWzJ6hS2pr4TOYPNPAYAE2hvCGl+Jt/hXi1QoQ0wjVliOYNjbnmLch3YtNrE3+BT23xPbY/ap37iR6lQ6LUyySz9x4eu6PqZOMPAZuC5KOdN5QmAGOxAOIVSC4wnlLqBDvmyLGAA52UtF4MRoCSD5ZOa1EQ75b2VPCuPC1dI68XgwRzotMCYwBgwnaqViMH9fQHduSxgZ0A71eQh4ADCIuydjFMU9ooj7BXHZJwiTBqBKFBlwKDTr55suQtetdOvLSL0kTyVO+KV3oX8Lr+2qhAE8gVa5s90S+DmHt2QsPMaZa1pcCDmlkiWQwDQFNT9KLeAb6tsVN1ok8/pfBmvOm7nNEoxwgWrUICIR+6IcBFYNxPnZCZfWrDPp4YobcBs3MZZq9DfykvQDcQBt8+naRlpi0/LqCb5gofuHpOPiwX3d8ok8BgoHS5PjVErYJtBJYAIo4uFztEogKay/mCkK5rKiMARlFdLpYpyCRhU5cVSM1b0b+sXvdLjFhqulbsAAAAASUVORK5CYII="/>
						</defs>
						</svg>
						</div>
						<a href="lk.php" class="reglink reglink2 link">Личный кабинет</a>
						';
					}
				}
				else{
					echo '<a href="in.php" class="reglink link">Вход</a>
					<a href="reg.php" class="reglink link">Регистрация</a>';
				}


				?>



			</div>
		</div>
	</header>
	<div class="head-mobile">
		<div class="logo"><a href="index.php"><img src="img/RuPlan.png"></a></div>
		<div class="nav-mobile">
			<svg width="25" height="9" viewBox="0 0 25 9" fill="none" xmlns="http://www.w3.org/2000/svg">
				<rect width="25" height="2" rx="1" fill="black"/>
				<rect x="10" y="7" width="15" height="2" rx="1" fill="black"/>
			</svg>
		</div>
		<div class="full-nav-mob">
			<div class="mob-nav-exit"></div>
			<div class="mob-nav-str"></div>
			<div class="mob-nav-footer"></div>
		</div>
		<div class="mob-nav-back"></div>
	</div>

	<main>
		<div class="d1">
			<div class="d1head">
				<h1 class=" main-h1 mobile-h1">RuPlan. Загружайте планировку и исследуйте будущее жилье.</h1>
				<div class="d1headbut">
					<a onclick="scr()" class="bluebut"><p class="linkcont">бесплатно</p></a>
					<a onclick="scr()" class="whitebut"><p class="linkcont">подписка</p></a>
				</div>
			</div>
			<div class="d1video"><video  preload="auto" autoplay="true" loop="true" muted="muted" class="i1"><source src="video/v1.mp4"></video>
			</div>
		</div>
		<div class="d2">
			<div class="d2head">
				<h2>Десткопное или мобильное приложение, созданное для воплащения ваших архитектурных мечт</h2>
				<p class="classic mobile-del">Создавайте модель своей квартиры с помощью планировки и пары фотографий дизайна без помощи дизайнеров, затрат времени и денежных средств</p>
			</div>
			<div class="d2img">
				<div class="d2imgcolumn">
					<div class="d2imgitem">
						<div class="svgcont">
							<svg class='strtttr' width="64" height="65" viewBox="0 0 64 65" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M37.0442 39.1978L15.8643 60.4055C14.9204 61.3507 13.4454 61.3507 12.5015 60.4055L2.70796 50.5991C1.76401 49.6539 1.76401 48.1771 2.70796 47.2319L23.8879 26.0242L25.5398 24.3701L46.7198 3.16238C47.6637 2.21719 49.1386 2.21719 50.0826 3.16238L59.8761 12.9687C60.8201 13.9139 60.8201 15.3908 59.8761 16.336L38.6962 37.5437L37.0442 39.1978Z" stroke="#409CFF" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M54.9203 14.6228L57.3982 17.1039" stroke="#409CFF" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M49.3156 16.0996L53.8584 20.6483" stroke="#409CFF" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M47.8407 21.7118L50.3186 24.1927" stroke="#409CFF" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M42.236 23.1886L46.7788 27.7372" stroke="#409CFF" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M12.2065 53.2574L16.7493 57.8063" stroke="#409CFF" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M17.8112 51.7805L20.2891 54.2616" stroke="#409CFF" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M19.2861 46.1095L23.8879 50.6582" stroke="#409CFF" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M24.9499 44.6326L27.4277 47.1138" stroke="#409CFF" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M42.177 56.1521L47.1328 61.1143C48.0177 62.0004 49.2566 62.5321 50.5546 62.5321C51.8525 62.5321 53.0915 62.0004 53.9764 61.1143L57.2802 57.8062L60.5841 54.498C61.469 53.6119 62 52.3714 62 51.0717C62 49.7721 61.469 48.5316 60.5841 47.6454L55.6283 42.6832" fill="white"/>
								<path d="M42.177 56.1521L47.1328 61.1143C48.0177 62.0004 49.2566 62.5321 50.5546 62.5321C51.8525 62.5321 53.0915 62.0004 53.9764 61.1143L57.2802 57.8062L60.5841 54.498C61.469 53.6119 62 52.3714 62 51.0717C62 49.7721 61.469 48.5316 60.5841 47.6454L55.6283 42.6832" stroke="#409CFF" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M36.9263 50.54L35.5693 51.8988L40.9971 57.2745L56.6903 41.5607L51.3215 36.1259L49.9646 37.4846" fill="white"/>
								<path d="M36.9263 50.54L35.5693 51.8988L40.9971 57.2745L56.6903 41.5607L51.3215 36.1259L49.9646 37.4846" stroke="#409CFF" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M5.24486 19.6442L34.2124 48.7087L36.5133 50.9535L43.4749 43.9827L50.4366 37.012L48.1947 34.7081L19.1682 5.70264H5.24486V19.6442Z" fill="white" stroke="#409CFF" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M19.1682 5.70264V15.0954H14.6844L14.6254 19.644H5.24486" fill="white"/>
								<path d="M19.1682 5.70264V15.0954H14.6844L14.6254 19.644H5.24486" stroke="#409CFF" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M14.7434 19.7622L30.3186 35.3579" stroke="#409CFF" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M19.1682 15.0953L32.7375 28.6825" stroke="#409CFF" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M36.1593 32.1088L39.1682 35.1216" stroke="#409CFF" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M6.89676 10.074L7.42773 6.88391L9.13865 7.12022L8.66666 8.30172L10.1416 7.00206" fill="white"/>
								<path d="M6.89676 10.074L7.42773 6.88391L9.13865 7.12022L8.66666 8.30172L10.1416 7.00206" stroke="#409CFF" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M8.84369 9.30603L12.3245 5.82056" stroke="#409CFF" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M8.84367 9.30603L5.36282 12.7915" stroke="#409CFF" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M43.9469 44.5144L48.0177 48.5906" stroke="#409CFF" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M40.4071 48.0588L44.4779 52.135" stroke="#409CFF" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M36.8673 51.6034L40.9381 55.6794" stroke="#409CFF" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M47.4867 40.9698L51.5575 45.046" stroke="#409CFF" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
								<path d="M51.0855 37.4255L55.1564 41.5016" stroke="#409CFF" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
							</svg>
						</div>
						<h3>Не требует особых навыков</h3>
						<p class="classichell">Более подробное описание почему быстро и экномично, упоминание отстутсвие человеческого труда и все в подобном духе</p>
					</div>
					<div class="d2imgitem">
						<div class="svgcont">
							<svg class='strtttr' width="65" height="65" viewBox="0 0 65 65" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M2.90498 45.1877H61.5475C62.0452 45.1877 62.4525 45.5955 62.4525 46.0939V53.8868C62.4525 54.3852 62.0452 54.793 61.5475 54.793H2.90498C2.40724 54.793 2 54.3852 2 53.8868V46.0939C2.04525 45.5955 2.45249 45.1877 2.90498 45.1877Z" stroke="#409CFF" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round"/>
								<path d="M9.64706 55.1101V61.9969C9.64706 62.4953 10.0543 62.9031 10.552 62.9031H12.724C13.2217 62.9031 13.629 62.4953 13.629 61.9969V55.1101" stroke="#409CFF" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round"/>
								<path d="M50.7783 55.4724V61.9969C50.7783 62.4953 51.1855 62.9031 51.6833 62.9031H53.9457C54.4434 62.9031 54.8507 62.4953 54.8507 61.9969V55.4724" stroke="#409CFF" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round"/>
								<path d="M39.1493 2.82446H46.8869C47.7919 2.82446 48.5158 3.5494 48.5158 4.45556V43.4207C48.5158 44.3268 47.7919 45.0518 46.8869 45.0518H39.1493C38.2444 45.0518 37.5204 44.3268 37.5204 43.4207V4.45556C37.5204 3.5494 38.2444 2.82446 39.1493 2.82446Z" stroke="#409CFF" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round"/>
								<path d="M57.0226 14.0159H50.1448C49.2398 14.0159 48.5158 14.7408 48.5158 15.647V43.4209C48.5158 44.3271 49.2398 45.052 50.1448 45.052H57.0226C57.9276 45.052 58.6516 44.3271 58.6516 43.4209V15.647C58.6063 14.7408 57.8823 14.0159 57.0226 14.0159Z" stroke="#409CFF" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round"/>
								<path d="M27.9728 9.71143H35.7104C36.6154 9.71143 37.3394 10.4364 37.3394 11.3425V43.5566C37.3394 44.4628 36.6154 45.1877 35.7104 45.1877H27.9728C27.0679 45.1877 26.3439 44.4628 26.3439 43.5566V11.3425C26.3439 10.4364 27.0679 9.71143 27.9728 9.71143Z" stroke="#409CFF" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round"/>
								<path d="M23.9909 16.9156L18.5158 15.1939C17.6561 14.9221 16.7511 15.3751 16.4796 16.236L9.01357 39.796C8.74207 40.6569 9.19456 41.563 10.0543 41.8349L15.5294 43.5566C16.3891 43.8284 17.2941 43.3753 17.5656 42.5145L25.0317 18.9545C25.3032 18.0936 24.8507 17.1875 23.9909 16.9156Z" stroke="#409CFF" stroke-width="4" stroke-miterlimit="10" stroke-linecap="round"/>
							</svg>
						</div>
						<h3>Множество форматов</h3>
						<p class="classichell">Более подробное описание почему быстро и экномично, упоминание отстутсвие человеческого труда и все в подобном духе</p>
					</div>
				</div>
				<div class="d2imgcolumn">
					<div class="d2imgitem">
						<div class="svgcont">
							<svg class='strtttr' width="43" height="61" viewBox="0 0 43 61" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M40.8738 0.453491H28.0109C27.8174 0.453491 27.624 0.59875 27.5273 0.792431L15.4865 32.0718C15.3414 32.4108 15.5832 32.7497 15.97 32.7497H27.2372L19.1616 59.865C19.0165 60.446 19.7419 60.785 20.0804 60.3008L42.1794 26.3098C42.3728 25.9709 42.1794 25.5351 41.7442 25.5351L29.4132 25.3414L41.3573 1.17979C41.5024 0.840852 41.2606 0.453491 40.8738 0.453491Z" fill="#409CFF"/>
								<path d="M14.3259 23.8405H7.07241C6.9757 23.8405 6.83063 23.8889 6.83063 24.0341L0.0123229 41.7074C-0.0360338 41.9011 0.0606797 42.0948 0.254107 42.0948H6.58884L1.99495 57.4439C1.89824 57.7829 2.33345 57.9765 2.52688 57.686L15.0029 38.4633C15.148 38.2696 15.0029 38.0275 14.7611 38.0275L7.79776 37.9307L14.5677 24.2762C14.6644 24.0826 14.5193 23.8405 14.3259 23.8405Z" fill="#409CFF"/>
							</svg>

						</div>
						<h3>Быстро</h3>
						<p class="classichell">Более подробное описание почему быстро и экномично, упоминание отстутсвие человеческого труда и все в подобном духе</p>
					</div>
					<div class="d2imgitem">
						<div class="svgcont">
							<svg width="65" height="66" class='strtttr' viewBox="0 0 65 66" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M36.453 59.2212H41.1167" stroke="#409CFF" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round"/>
								<path d="M45.7803 51.5881H19.4574C16.4978 51.5881 14.0762 49.1634 14.0762 46.1999V19.8426C14.0762 16.879 16.4978 14.4543 19.4574 14.4543H45.7803C48.74 14.4543 51.1615 16.879 51.1615 19.8426V46.1999C51.1615 49.1634 48.74 51.5881 45.7803 51.5881Z" fill="white" stroke="#409CFF" stroke-width="5" stroke-miterlimit="10"/>
								<path d="M20.9821 23.3445C22.0471 23.3445 22.9104 22.4801 22.9104 21.4138C22.9104 20.3475 22.0471 19.4832 20.9821 19.4832C19.9172 19.4832 19.0539 20.3475 19.0539 21.4138C19.0539 22.4801 19.9172 23.3445 20.9821 23.3445Z" fill="#409CFF"/>
								<path d="M28.74 23.3445C29.8049 23.3445 30.6682 22.4801 30.6682 21.4138C30.6682 20.3475 29.8049 19.4832 28.74 19.4832C27.675 19.4832 26.8117 20.3475 26.8117 21.4138C26.8117 22.4801 27.675 23.3445 28.74 23.3445Z" fill="#409CFF"/>
								<path d="M36.4529 23.3445C37.5179 23.3445 38.3812 22.4801 38.3812 21.4138C38.3812 20.3475 37.5179 19.4832 36.4529 19.4832C35.388 19.4832 34.5247 20.3475 34.5247 21.4138C34.5247 22.4801 35.388 23.3445 36.4529 23.3445Z" fill="#409CFF"/>
								<path d="M44.2108 23.3445C45.2757 23.3445 46.139 22.4801 46.139 21.4138C46.139 20.3475 45.2757 19.4832 44.2108 19.4832C43.1458 19.4832 42.2825 20.3475 42.2825 21.4138C42.2825 22.4801 43.1458 23.3445 44.2108 23.3445Z" fill="#409CFF"/>
								<path d="M20.9821 46.5588C22.047 46.5588 22.9103 45.6944 22.9103 44.6282C22.9103 43.5619 22.047 42.6975 20.9821 42.6975C19.9171 42.6975 19.0538 43.5619 19.0538 44.6282C19.0538 45.6944 19.9171 46.5588 20.9821 46.5588Z" fill="#409CFF"/>
								<path d="M28.74 46.5588C29.8049 46.5588 30.6682 45.6944 30.6682 44.6282C30.6682 43.5619 29.8049 42.6975 28.74 42.6975C27.675 42.6975 26.8117 43.5619 26.8117 44.6282C26.8117 45.6944 27.675 46.5588 28.74 46.5588Z" fill="#409CFF"/>
								<path d="M36.4529 46.5588C37.5179 46.5588 38.3812 45.6944 38.3812 44.6282C38.3812 43.5619 37.5179 42.6975 36.4529 42.6975C35.388 42.6975 34.5247 43.5619 34.5247 44.6282C34.5247 45.6944 35.388 46.5588 36.4529 46.5588Z" fill="#409CFF"/>
								<path d="M44.2107 46.5588C45.2757 46.5588 46.139 45.6944 46.139 44.6282C46.139 43.5619 45.2757 42.6975 44.2107 42.6975C43.1458 42.6975 42.2825 43.5619 42.2825 44.6282C42.2825 45.6944 43.1458 46.5588 44.2107 46.5588Z" fill="#409CFF"/>
								<path d="M20.9821 31.0679C22.047 31.0679 22.9103 30.2034 22.9103 29.137C22.9103 28.0706 22.047 27.2061 20.9821 27.2061C19.9171 27.2061 19.0538 28.0706 19.0538 29.137C19.0538 30.2034 19.9171 31.0679 20.9821 31.0679Z" fill="#409CFF"/>
								<path d="M20.9821 38.8357C22.047 38.8357 22.9103 37.9713 22.9103 36.9049C22.9103 35.8386 22.047 34.9741 20.9821 34.9741C19.9171 34.9741 19.0538 35.8386 19.0538 36.9049C19.0538 37.9713 19.9171 38.8357 20.9821 38.8357Z" fill="#409CFF"/>
								<path d="M44.2107 31.0679C45.2757 31.0679 46.139 30.2034 46.139 29.137C46.139 28.0706 45.2757 27.2061 44.2107 27.2061C43.1458 27.2061 42.2825 28.0706 42.2825 29.137C42.2825 30.2034 43.1458 31.0679 44.2107 31.0679Z" fill="#409CFF"/>
								<path d="M44.2107 38.8357C45.2757 38.8357 46.139 37.9713 46.139 36.9049C46.139 35.8386 45.2757 34.9741 44.2107 34.9741C43.1458 34.9741 42.2825 35.8386 42.2825 36.9049C42.2825 37.9713 43.1458 38.8357 44.2107 38.8357Z" fill="#409CFF"/>
								<path d="M33.4037 39.1951H31.8341C28.8745 39.1951 26.4529 36.7703 26.4529 33.8068V32.2352C26.4529 29.2717 28.8745 26.8469 31.8341 26.8469H33.4037C36.3633 26.8469 38.7849 29.2717 38.7849 32.2352V33.8068C38.7849 36.7703 36.3633 39.1951 33.4037 39.1951Z" fill="white" stroke="#409CFF" stroke-width="5" stroke-miterlimit="10"/>
								<path d="M28.74 14.4541V2.82446" stroke="#409CFF" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round"/>
								<path d="M36.453 14.4541V7.00049" stroke="#409CFF" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round"/>
								<path d="M51.1615 29.1372H59.0539" stroke="#409CFF" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round"/>
								<path d="M51.1615 36.905H61.6099" stroke="#409CFF" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round"/>
								<path d="M14.0314 29.1372H3" stroke="#409CFF" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round"/>
								<path d="M14.0314 36.905H5.82507" stroke="#409CFF" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round"/>
								<path d="M28.74 51.5879V60.1194" stroke="#409CFF" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round"/>
								<path d="M36.453 51.5879V62.9031" stroke="#409CFF" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round"/>
								<path d="M28.74 7.00049H23.7624" stroke="#409CFF" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round"/>
								<path d="M56.722 29.137V24.6018" stroke="#409CFF" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round"/>
								<path d="M7.6189 29.1372V23.9734" stroke="#409CFF" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round"/>
								<path d="M8.51569 36.905V42.1138" stroke="#409CFF" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round"/>
								<path d="M36.453 9.87402H41.1167" stroke="#409CFF" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round"/>
								<path d="M28.74 56.6169H22.9104" stroke="#409CFF" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round"/>
								<path d="M59.1436 36.905V42.5627" stroke="#409CFF" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round"/>
							</svg>

						</div>
						<h3>Своременные технологии</h3>
						<p class="classichell">Более подробное описание почему быстро и экномично, упоминание отстутсвие человеческого труда и все в подобном духе</p>
					</div>
				</div>
				<div class="d2imgcolumn">
					<div class="d2imgitem">
						<div class="svgcont">
							<svg width="39" height="61" class='strtttr' viewBox="0 0 39 61" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M27.5467 32.8791C27.9673 32.458 28.6682 32.3878 29.0888 32.8089C31.0514 34.4232 34.1355 34.2828 34.2056 32.458C34.2757 31.335 32.5935 30.7034 31.1215 30.4928C28.2477 30.0015 25.5841 28.0363 25.5841 24.2464C25.5841 20.3862 28.7383 18.421 32.0327 18.421C33.9252 18.421 35.7477 18.9123 37.3598 20.5968C37.8504 21.088 37.7803 21.8601 37.2196 22.2812L36.028 23.334C35.6075 23.6849 34.9766 23.7551 34.5561 23.4042C32.6635 21.9303 30.1402 22.211 30.0701 24.2464C30.1402 25.1588 31.0514 25.7203 32.4533 26.0712C35.6075 26.7028 38.8317 27.896 38.6215 32.7387C38.4813 36.5287 34.8364 38.5641 31.542 38.5641C29.6495 38.5641 27.6869 37.6517 26.1449 35.8971C25.7243 35.4058 25.7944 34.7039 26.215 34.2828L27.5467 32.8791Z" fill="#409CFF"/>
								<path d="M16.9626 12.2447C17.243 11.9639 17.7337 11.9639 18.0841 12.2447C19.486 13.3676 21.5888 13.2273 21.6589 11.9639C21.729 11.1919 20.5374 10.7708 19.486 10.5602C17.4533 10.2093 15.6309 8.80556 15.6309 6.2087C15.6309 3.54164 17.8739 2.06775 20.1869 2.06775C21.5187 2.06775 22.7804 2.41867 23.9019 3.61183C24.2524 3.96276 24.1823 4.45406 23.8318 4.80498L22.9206 5.57703C22.6402 5.85777 22.2196 5.78759 21.8692 5.57703C20.5374 4.52425 18.7851 4.73479 18.715 6.13851C18.7851 6.77018 19.4159 7.19129 20.3972 7.40185C22.6402 7.82296 24.8832 8.73537 24.743 12.1043C24.6028 14.7713 22.0795 16.2452 19.7664 16.2452C18.4346 16.2452 17.1028 15.6136 15.9813 14.3502C15.701 13.9993 15.701 13.5782 15.9813 13.2273L16.9626 12.2447Z" fill="#409CFF"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M20.4673 0.453491H19.9065C19.3458 0.453491 18.8551 0.944795 18.8551 1.50628V3.40131C18.8551 3.9628 19.3458 4.4541 19.9065 4.4541H20.4673C21.028 4.4541 21.5187 3.9628 21.5187 3.40131V1.50628C21.4486 0.944795 21.028 0.453491 20.4673 0.453491Z" fill="#409CFF"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M20.4673 13.9993H19.9065C19.3458 13.9993 18.8551 14.4906 18.8551 15.0521V16.9471C18.8551 17.5086 19.3458 17.9999 19.9065 17.9999H20.4673C21.028 17.9999 21.5187 17.5086 21.5187 16.9471V15.0521C21.4486 14.4906 21.028 13.9993 20.4673 13.9993Z" fill="#409CFF"/>
								<path d="M3.1542 47.1267C3.85514 46.4248 4.97663 46.4248 5.67757 47.0565C8.90186 49.7235 13.9486 49.4428 14.1589 46.4248C14.229 44.6 11.4953 43.5472 9.11214 43.1963C4.34579 42.3541 0 39.0554 0 32.9492C0 26.6326 5.25702 23.2637 10.7243 23.2637C13.8084 23.2637 16.8224 24.1059 19.5561 26.9133C20.3271 27.6853 20.257 28.9487 19.4159 29.6505L17.243 31.4753C16.542 32.0368 15.5607 32.0368 14.8598 31.4753C11.7757 29.0189 7.57009 29.5102 7.4299 32.8089C7.5 34.3529 9.04205 35.2654 11.3551 35.8268C16.6121 36.8796 21.8691 38.915 21.5187 46.8459C21.2383 53.0924 15.2804 56.5315 9.81307 56.5315C6.72896 56.5315 3.43458 54.9874 0.771031 52.0396C0.140191 51.3378 0.210289 50.2148 0.841129 49.513L3.1542 47.1267Z" fill="#409CFF"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M11.3552 19.3333H9.95329C8.62149 19.3333 7.57007 20.386 7.57007 21.7196V26.2115C7.57007 27.545 8.62149 28.5978 9.95329 28.5978H11.3552C12.687 28.5978 13.7384 27.545 13.7384 26.2115V21.7196C13.7384 20.4562 12.687 19.3333 11.3552 19.3333Z" fill="#409CFF"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M11.3552 51.2677H9.95329C8.62149 51.2677 7.57007 52.3205 7.57007 53.654V58.1458C7.57007 59.4793 8.62149 60.5321 9.95329 60.5321H11.3552C12.687 60.5321 13.7384 59.4793 13.7384 58.1458V53.654C13.7384 52.3205 12.687 51.2677 11.3552 51.2677Z" fill="#409CFF"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M32.5234 16.0345H31.6822C30.9112 16.0345 30.2102 16.6662 30.2102 17.5085V20.1755C30.2102 20.9476 30.8411 21.6494 31.6822 21.6494H32.5234C33.2944 21.6494 33.9954 21.0177 33.9954 20.1755V17.5085C33.9954 16.6662 33.3645 16.0345 32.5234 16.0345Z" fill="#409CFF"/>
								<path fill-rule="evenodd" clip-rule="evenodd" d="M32.5234 35.3356H31.6822C30.9112 35.3356 30.2102 35.9672 30.2102 36.8094V39.4764C30.2102 40.2485 30.8411 40.9503 31.6822 40.9503H32.5234C33.2944 40.9503 33.9954 40.3187 33.9954 39.4764V36.8094C33.9954 35.9672 33.3645 35.3356 32.5234 35.3356Z" fill="#409CFF"/>
							</svg>
						</div>
						<h3>Экономично</h3>
						<p class="classichell">Более подробное описание почему быстро и экномично, упоминание отстутсвие человеческого труда и все в подобном духе</p>
					</div>
					<div class="d2imgitem">
						<div class="svgcont">
							<svg width="66" height="48" class='strtttr' viewBox="0 0 66 48" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M3 28.2181C14.7003 51.1675 51.0115 51.1675 62.7694 28.2181C51.0115 5.26876 14.7003 5.26876 3 28.2181Z" stroke="#409CFF" stroke-width="5" stroke-miterlimit="10"/>
								<path d="M38.6196 32.1389C43.1079 32.1389 46.7463 28.4989 46.7463 24.0087C46.7463 19.5185 43.1079 15.8784 38.6196 15.8784C34.1313 15.8784 30.4928 19.5185 30.4928 24.0087C30.4928 28.4989 34.1313 32.1389 38.6196 32.1389Z" stroke="#409CFF" stroke-width="5" stroke-miterlimit="10"/>
								<path d="M32.9712 9.99683V2.84692" stroke="#409CFF" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round"/>
								<path d="M18.9653 12.8799L15.3918 6.94092" stroke="#409CFF" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round"/>
								<path d="M8.30261 19.7417L3 15.3594" stroke="#409CFF" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round"/>
								<path d="M47.0345 12.8799L50.5504 6.94092" stroke="#409CFF" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round"/>
								<path d="M57.6398 19.7417L62.9999 15.3594" stroke="#409CFF" stroke-width="5" stroke-miterlimit="10" stroke-linecap="round"/>
								<path d="M44.6715 43.4983C35.2191 46.1507 24.4986 40.3845 21.271 31.3316C18.6773 24.1239 21.0981 15.9936 27.2076 11.3806" stroke="#409CFF" stroke-width="5" stroke-miterlimit="10"/>
							</svg>

						</div>
						<h3>Полное предствалнение</h3>
						<p class="classichell">Более подробное описание почему быстро и экномично, упоминание отстутсвие человеческого труда и все в подобном духе</p>
					</div>
				</div>
			</div>
		</div>
		<div id="animation">
			<div class="d3">
			<div class="d3left">
				<video class="vrta" id="v1" width="100%" height="100%" preload="auto" autoplay="true" loop="true" muted="muted">
					<source src="video/v3.mp4">
					</video>
					<video class="vrta" id="v2" width="100%" height="100%" style="display: none;" preload="auto" loop="true" muted="muted">
						<source src="video/v1.mp4">
						</video>
						<video class="vrta" id="v3" width="100%" height="100%" style="display: none;" preload="auto" loop="true" muted="muted">
							<source src="video/v2.mp4">
							</video>
							<video class="vrta" id="v4" width="100%" height="100%" style="display: none;" preload="auto" loop="true" muted="muted">
								<source src="video/v3.mp4">
								</video>
							</div>
							<div class="d3right">
								<div class="vlist">
									<div class="vlistitem">
										<div class="vlistcont">
											<div class="predel4" id="prp1" onclick="disp('1')">
												<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
													<circle cx="16" cy="16" r="15" stroke="#4A9DFF" stroke-width="2"/>
													<path fill-rule="evenodd" clip-rule="evenodd" d="M16 28C22.6274 28 28 22.6274 28 16C28 9.37258 22.6274 4 16 4V16L8.06253 25C10.1779 26.8671 12.9567 28 16 28Z" fill="#4A9DFF"/>
												</svg>
											</div>
											<p class="vp">Шаг 1</p>
										</div>
										<div class="vhidenone">
											<p id="vp1" class="vphide">Подробное описание этого шага, как залить, куда и что будет, в какой форме залить, что выбрать, видео слева отображает этот процесс на примере</p>
										</div>
									</div>
									<div class="hr"></div>
									<div class="vlistitem">
										<div class="vlistcont">
											<div class="predel4" id="prp2"  onclick="disp('2')">
												<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
													<circle cx="16" cy="16" r="15" stroke="#4A9DFF" stroke-width="2"/>
													<path d="M22.5 15.134C23.1667 15.5189 23.1667 16.4811 22.5 16.866L13.5 22.0622C12.8333 22.4471 12 21.966 12 21.1962V10.8038C12 10.034 12.8333 9.55292 13.5 9.93782L22.5 15.134Z" fill="#4A9DFF"/>
												</svg>
											</div>
											<p class="vp">Шаг 2</p>
										</div>
										<div class="vhidenone">
											<p  id="vp2" class="vphide">Подробное описание этого шага, как залить, куда и что будет, в какой форме залить, что выбрать, видео слева отображает этот процесс на примере</p>
										</div>
									</div>
									<div class="hr"></div>
									<div class="vlistitem">
										<div class="vlistcont">
											<div class="predel4"  id="prp3" onclick="disp('3')">
												<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
													<circle cx="16" cy="16" r="15" stroke="#4A9DFF" stroke-width="2"/>
													<path d="M22.5 15.134C23.1667 15.5189 23.1667 16.4811 22.5 16.866L13.5 22.0622C12.8333 22.4471 12 21.966 12 21.1962V10.8038C12 10.034 12.8333 9.55292 13.5 9.93782L22.5 15.134Z" fill="#4A9DFF"/>
												</svg>
											</div>
											<p class="vp">Шаг 3</p>
										</div>
										<div class="vhidenone">
											<p id="vp3" class="vphide">Подробное описание этого шага, как залить, куда и что будет, в какой форме залить, что выбрать, видео слева отображает этот процесс на примере</p>
										</div>
									</div>
									<div class="hr"></div>
									<div class="vlistitem">
										<div class="vlistcont">
											<div class="predel4"  id="prp4" onclick="disp('4')">
												<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
													<circle cx="16" cy="16" r="15" stroke="#4A9DFF" stroke-width="2"/>
													<path d="M22.5 15.134C23.1667 15.5189 23.1667 16.4811 22.5 16.866L13.5 22.0622C12.8333 22.4471 12 21.966 12 21.1962V10.8038C12 10.034 12.8333 9.55292 13.5 9.93782L22.5 15.134Z" fill="#4A9DFF"/>
												</svg>

											</div>
											<p class="vp">Шаг 4</p>
										</div>
										<div class="vhidenone">
											<p id="vp4" class="vphide">Подробное описание этого шага, как залить, куда и что будет, в какой форме залить, что выбрать, видео слева отображает этот процесс на примере</p>
										</div>
									</div>
								</div>
							</div>
							<div class="d3right-mob">
								<div class="d3right-mob-corusel"></div>
								<div class="d3right-mob-txt">
									<p id="vpm1" class="d3right-mob-txt">
										Подробное описание этого шага#1, как залить, куда и что будет, в какой форме залить, что выбрать, видео слева отображает этот процесс на примере
									</p>
									<p id="vpm2" class="d3right-mob-txt">
										Подробное описание этого шага#2, как залить, куда и что будет, в какой форме залить, что выбрать, видео слева отображает этот процесс на примере
									</p>
									<p id="vpm3" class="d3right-mob-txt">
										Подробное описание этого шага#3, как залить, куда и что будет, в какой форме залить, что выбрать, видео слева отображает этот процесс на примере
									</p>
									<p id="vpm4" class="d3right-mob-txt">
										Подробное описание этого шага#4, как залить, куда и что будет, в какой форме залить, что выбрать, видео слева отображает этот процесс на примере
									</p>
								</div>
							</div>
			</div>
			<div class="d4">
			<div class="d4videoon">
				<video id="v0" width="100%"  preload="auto" autoplay="true"  muted="muted">
					<source src="video/end.mp4">
				</video>
			</div>

			<style type="text/css">
				.d4{
					position: relative;
				}
				.d4videoon{
					position: absolute;
					top: 0;
					left: 0;
					background: white;
					z-index: 10000;
					width: 100%;
					height: 100%;
				}
			</style>
							<div class="sketchfab-embed-wrapper">
								<iframe width="100%" height="600" src="https://sketchfab.com/models/7c256f0e482445cbae7f4966bd840428/embed?autostart=1" frameborder="0" allow="autoplay; fullscreen; vr" ></iframe>

							</div>
							<div class="rer" style="width: 100%;
							z-index: 1000;
							height: 4rem;
							background: #FFF;
							position: relative;
							top: -38rem;
							left: 0;"></div>
							<div class="rer" style="    width: 100%;
							z-index: 1000;
							height: 4rem;
							background: #FFF;
							position: relative;
							top: -8rem;
							left: 0;"></div>
			</div>
		</div>
		<div class="d5">
							<div class="d5head">
								<div class="preprepre"></div>
								<h2 class="d5headtxt">Выберите тариф наиболее подходящий для вас</h2>
							</div>
							<div class="uslugi">
								<div class="us1 yyy" style=" ">
									<h4 class="predel1">Пробная подписка</h4>
									<p class="blue">1 мес</p>
									<div class="uli">
										<div class="urow">
											<div class="svgcont2">
												<svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
													<circle cx="10.5" cy="10.9922" r="10.5" fill="#4A9DFF"/>
													<rect x="4" y="4.49219" width="13" height="13" fill="url(#pattern0)"/>
													<defs>
														<pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
															<use xlink:href="#image0" transform="scale(0.0769231)"/>
														</pattern>
														<image id="image0" width="13" height="13" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAANCAQAAADY4iz3AAAAAmJLR0QA/4ePzL8AAABCSURBVCjPY2CgPfjP9L/7vwl2iYX/L/wXwiaxACghQozE/zX/U+FGCaOqNvn/9n86FgmwpCFQEpsdYEn5/3zU8DoAuXIuBMmyYKkAAAAASUVORK5CYII="/>
													</defs>
												</svg>

											</div>
											<p class="up">Какая-то возможность</p>
										</div>
										<div class="urow">
											<div class="svgcont2">
												<svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
													<circle cx="10.5" cy="10.9922" r="10.5" fill="#4A9DFF"/>
													<rect x="4" y="4.49219" width="13" height="13" fill="url(#pattern0)"/>
													<defs>
														<pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
															<use xlink:href="#image0" transform="scale(0.0769231)"/>
														</pattern>
														<image id="image0" width="13" height="13" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAANCAQAAADY4iz3AAAAAmJLR0QA/4ePzL8AAABCSURBVCjPY2CgPfjP9L/7vwl2iYX/L/wXwiaxACghQozE/zX/U+FGCaOqNvn/9n86FgmwpCFQEpsdYEn5/3zU8DoAuXIuBMmyYKkAAAAASUVORK5CYII="/>
													</defs>
												</svg>

											</div><p class="up">Какая-то возможность</p>
										</div>
										<div class="urow">
											<div class="svgcont2">
												<svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
													<circle cx="10.5" cy="10.9922" r="10.5" fill="#8B8B8B"/>
													<rect x="4" y="4.49219" width="13" height="13" fill="url(#pattern0)"/>
													<defs>
														<pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
															<use xlink:href="#image0" transform="scale(0.0769231)"/>
														</pattern>
														<image id="image0" width="13" height="13" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAANCAQAAADY4iz3AAAAAmJLR0QA/4ePzL8AAABCSURBVCjPY2CgPfjP9L/7vwl2iYX/L/wXwiaxACghQozE/zX/U+FGCaOqNvn/9n86FgmwpCFQEpsdYEn5/3zU8DoAuXIuBMmyYKkAAAAASUVORK5CYII="/>
													</defs>
												</svg></div>
												<p class="up">Какая-то возможность</p>
											</div>
											<div class="urow">
												<div class="svgcont2">
													<svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
														<circle cx="10.5" cy="10.9922" r="10.5" fill="#8B8B8B"/>
														<rect x="4" y="4.49219" width="13" height="13" fill="url(#pattern0)"/>
														<defs>
															<pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
																<use xlink:href="#image0" transform="scale(0.0769231)"/>
															</pattern>
															<image id="image0" width="13" height="13" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAANCAQAAADY4iz3AAAAAmJLR0QA/4ePzL8AAABCSURBVCjPY2CgPfjP9L/7vwl2iYX/L/wXwiaxACghQozE/zX/U+FGCaOqNvn/9n86FgmwpCFQEpsdYEn5/3zU8DoAuXIuBMmyYKkAAAAASUVORK5CYII="/>
														</defs>
													</svg></div>
													<p class="up">Какая-то возможность</p>
												</div>
												<div class="urow">
													<div class="svgcont2">
														<svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
															<circle cx="10.5" cy="10.9922" r="10.5" fill="#8B8B8B"/>
															<rect x="4" y="4.49219" width="13" height="13" fill="url(#pattern0)"/>
															<defs>
																<pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
																	<use xlink:href="#image0" transform="scale(0.0769231)"/>
																</pattern>
																<image id="image0" width="13" height="13" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAANCAQAAADY4iz3AAAAAmJLR0QA/4ePzL8AAABCSURBVCjPY2CgPfjP9L/7vwl2iYX/L/wXwiaxACghQozE/zX/U+FGCaOqNvn/9n86FgmwpCFQEpsdYEn5/3zU8DoAuXIuBMmyYKkAAAAASUVORK5CYII="/>
															</defs>
														</svg>
													</div>
													<p class="up">Какая-то возможность</p>
												</div>
											</div>
											<h4>Бесплатно</h4>
											<?
											if (isset($_SESSION['auth']) & isset($_SESSION['email']) & $_SESSION['auth']=='true') {
												echo '<a href="lk.php" class="bluebut circle"><p class="linkcont">Оформить</p></a>';
											}
											else{
												echo '<a href="reg.php" class="bluebut circle"><p class="linkcont">Оформить</p></a>';
											}
											?>
								</div>
										<div class="us1">
											<h4 class="predel1">Временная подписка</h4>

											<div class="blue blue2">
												<div class="delpre"
												style="    position: absolute;
												top: -64px;
												left: 0px;
												width: 100%;
												height: 217px;
												z-index: 100;
												box-shadow: inset 0px 0px 29px 34px white;
												display: flex;">
												<div onclick="disp3('0');" class="ats"></div>
												<div onclick="disp3('1');" class="ats"></div>
											</div>
											<div  id="blue" class="polupredel">
												<p onclick="disp3('1');" class="prerta">1 мес</p>
												<p onclick="disp3('2');" class="prerta">2 мес</p>
												<p onclick="disp3('3');" class="prerta">3 мес</p>
												<p onclick="disp3('4');" class="prerta">4 мес</p>
												<p onclick="disp3('5');"class="prerta">5 мес</p>
											</div>
										</div>
										<div class="uli">
											<div class="urow">
												<div class="svgcont2">
													<svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
														<circle cx="10.5" cy="10.9922" r="10.5" fill="#4A9DFF"/>
														<rect x="4" y="4.49219" width="13" height="13" fill="url(#pattern0)"/>
														<defs>
															<pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
																<use xlink:href="#image0" transform="scale(0.0769231)"/>
															</pattern>
															<image id="image0" width="13" height="13" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAANCAQAAADY4iz3AAAAAmJLR0QA/4ePzL8AAABCSURBVCjPY2CgPfjP9L/7vwl2iYX/L/wXwiaxACghQozE/zX/U+FGCaOqNvn/9n86FgmwpCFQEpsdYEn5/3zU8DoAuXIuBMmyYKkAAAAASUVORK5CYII="/>
														</defs>
													</svg>

												</div><p class="up">Какая-то возможность</p>
											</div>
											<div class="urow">
												<div class="svgcont2">
													<svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
														<circle cx="10.5" cy="10.9922" r="10.5" fill="#4A9DFF"/>
														<rect x="4" y="4.49219" width="13" height="13" fill="url(#pattern0)"/>
														<defs>
															<pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
																<use xlink:href="#image0" transform="scale(0.0769231)"/>
															</pattern>
															<image id="image0" width="13" height="13" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAANCAQAAADY4iz3AAAAAmJLR0QA/4ePzL8AAABCSURBVCjPY2CgPfjP9L/7vwl2iYX/L/wXwiaxACghQozE/zX/U+FGCaOqNvn/9n86FgmwpCFQEpsdYEn5/3zU8DoAuXIuBMmyYKkAAAAASUVORK5CYII="/>
														</defs>
													</svg>

												</div><p class="up">Какая-то возможность</p>
											</div>
											<div class="urow">
												<div class="svgcont2">
													<svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
														<circle cx="10.5" cy="10.9922" r="10.5" fill="#4A9DFF"/>
														<rect x="4" y="4.49219" width="13" height="13" fill="url(#pattern0)"/>
														<defs>
															<pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
																<use xlink:href="#image0" transform="scale(0.0769231)"/>
															</pattern>
															<image id="image0" width="13" height="13" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAANCAQAAADY4iz3AAAAAmJLR0QA/4ePzL8AAABCSURBVCjPY2CgPfjP9L/7vwl2iYX/L/wXwiaxACghQozE/zX/U+FGCaOqNvn/9n86FgmwpCFQEpsdYEn5/3zU8DoAuXIuBMmyYKkAAAAASUVORK5CYII="/>
														</defs>
													</svg>

												</div><p class="up">Какая-то возможность</p>
											</div>
											<div class="urow">
												<div class="svgcont2">
													<svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
														<circle cx="10.5" cy="10.9922" r="10.5" fill="#4A9DFF"/>
														<rect x="4" y="4.49219" width="13" height="13" fill="url(#pattern0)"/>
														<defs>
															<pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
																<use xlink:href="#image0" transform="scale(0.0769231)"/>
															</pattern>
															<image id="image0" width="13" height="13" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAANCAQAAADY4iz3AAAAAmJLR0QA/4ePzL8AAABCSURBVCjPY2CgPfjP9L/7vwl2iYX/L/wXwiaxACghQozE/zX/U+FGCaOqNvn/9n86FgmwpCFQEpsdYEn5/3zU8DoAuXIuBMmyYKkAAAAASUVORK5CYII="/>
														</defs>
													</svg>

												</div><p class="up">Какая-то возможность</p>
											</div>
											<div class="urow">
												<div class="svgcont2">
													<svg width="21" height="22" viewBox="0 0 21 22" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
														<circle cx="10.5" cy="10.9922" r="10.5" fill="#4A9DFF"/>
														<rect x="4" y="4.49219" width="13" height="13" fill="url(#pattern0)"/>
														<defs>
															<pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
																<use xlink:href="#image0" transform="scale(0.0769231)"/>
															</pattern>
															<image id="image0" width="13" height="13" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAA0AAAANCAQAAADY4iz3AAAAAmJLR0QA/4ePzL8AAABCSURBVCjPY2CgPfjP9L/7vwl2iYX/L/wXwiaxACghQozE/zX/U+FGCaOqNvn/9n86FgmwpCFQEpsdYEn5/3zU8DoAuXIuBMmyYKkAAAAASUVORK5CYII="/>
														</defs>
													</svg>

												</div><p class="up">Какая-то возможность</p>
											</div>
										</div>
										<h4 id="summa">1054 руб.</h4>
										<?
										if (isset($_SESSION['auth']) & isset($_SESSION['email']) & $_SESSION['auth']=='true') {
											echo '<a href="lk.php" class="bluebut circle"><p class="linkcont">Оформить</p></a>';
										}
										else{
											echo '<a href="reg.php" class="bluebut circle"><p class="linkcont">Оформить</p></a>';
										}
										?>
									</div>
								</div>
								<div class="prepre"></div>
		</div>
		<div class="d6">
								<div class="d6left">
									<div class="predel2">
										<svg width="50" height="51" viewBox="0 0 50 51" fill="none" xmlns="http://www.w3.org/2000/svg">
											<circle cx="25" cy="25.4922" r="25" fill="url(#paint0_linear)"/>
											<path d="M23.405 32.7422H27.425V36.4922H23.405V32.7422ZM18.635 21.8822C18.635 20.7822 18.795 19.7822 19.115 18.8822C19.455 17.9822 19.935 17.2122 20.555 16.5722C21.195 15.9322 21.955 15.4422 22.835 15.1022C23.735 14.7422 24.735 14.5622 25.835 14.5622C26.755 14.5622 27.605 14.7022 28.385 14.9822C29.185 15.2422 29.875 15.6322 30.455 16.1522C31.055 16.6522 31.525 17.2822 31.865 18.0422C32.205 18.8022 32.375 19.6622 32.375 20.6222C32.375 21.3222 32.295 21.9322 32.135 22.4522C31.995 22.9522 31.795 23.3922 31.535 23.7722C31.295 24.1322 31.015 24.4622 30.695 24.7622C30.375 25.0422 30.055 25.3222 29.735 25.6022C29.355 25.9222 29.005 26.2322 28.685 26.5322C28.365 26.8322 28.085 27.1722 27.845 27.5522C27.605 27.9122 27.415 28.3422 27.275 28.8422C27.155 29.3422 27.095 29.9522 27.095 30.6722H23.855C23.855 29.7922 23.895 29.0522 23.975 28.4522C24.075 27.8322 24.225 27.2922 24.425 26.8322C24.625 26.3722 24.865 25.9722 25.145 25.6322C25.445 25.2722 25.795 24.9222 26.195 24.5822C26.515 24.3022 26.815 24.0422 27.095 23.8022C27.395 23.5622 27.655 23.3022 27.875 23.0222C28.115 22.7222 28.295 22.3922 28.415 22.0322C28.555 21.6722 28.625 21.2422 28.625 20.7422C28.625 20.1422 28.515 19.6322 28.295 19.2122C28.095 18.7722 27.845 18.4222 27.545 18.1622C27.245 17.9022 26.925 17.7122 26.585 17.5922C26.245 17.4722 25.945 17.4122 25.685 17.4122C24.445 17.4122 23.525 17.8222 22.925 18.6422C22.345 19.4422 22.055 20.5222 22.055 21.8822H18.635Z" fill="white"/>
											<defs>
												<linearGradient id="paint0_linear" x1="25" y1="0.492187" x2="25" y2="50.4922" gradientUnits="userSpaceOnUse">
													<stop stop-color="#4A9DFF"/>
													<stop offset="1" stop-color="#1882FF"/>
												</linearGradient>
											</defs>
										</svg>
									</div>
									<h2 class="rta12">Часто задаваемые вопросы</h2>
								</div>
								<div class="d6right">
									<div class="questcont">
										<div class="theme">тематика</div>
										<div class="predel88"><div class="predel8"></div></div>
										<div class="question">
											<div class="q1">
												<p class="qp">Какой-то очень очень длинный интересный вопрос ?</p>
												<div class="predel5" id="pr1" onclick="disp2('1')">
													<svg width="16" height="3" viewBox="0 0 16 3" fill="none" xmlns="http://www.w3.org/2000/svg">
														<rect y="2.49219" width="2" height="16" transform="rotate(-90 0 2.49219)" fill="black"/>
													</svg>
												</div>
											</div>
											<div class="textquest">
												<p class="ptextq" id="tx1">
													Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял. Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял. Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял. Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял. Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял. Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял. Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял. Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял.
												</p>
											</div>
										</div>
										<div class="predel88"><div class="predel8"></div></div>
										<div class="questcont">
											<div class="theme">тематика</div>
											<div class="predel88"><div class="predel8"></div></div>
											<div class="question">
												<div class="q1">
													<p class="qp">Какой-то очень очень длинный интересный вопрос ?</p>
													<div class="predel5" id="pr2" onclick="disp2('2')">
														<svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect x="7" y="0.492188" width="2" height="16" fill="black"/>
															<rect y="9.49219" width="2" height="16" transform="rotate(-90 0 9.49219)" fill="black"/>
														</svg>
													</div>
												</div>
												<div class="textquest">
													<p class="ptextq" id="tx2">
														Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял. Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял. Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял. Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял. Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял. Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял. Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял. Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял.
													</p>
												</div>
											</div>
											<div class="predel88"><div class="predel8"></div></div>
											<div class="theme">тематика</div>
											<div class="predel88"><div class="predel8"></div></div>
											<div class="question">
												<div class="q1">
													<p class="qp">Какой-то очень очень длинный интересный вопрос ?</p>
													<div class="predel5" id="pr3" onclick="disp2('3')">
														<svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect x="7" y="0.492188" width="2" height="16" fill="black"/>
															<rect y="9.49219" width="2" height="16" transform="rotate(-90 0 9.49219)" fill="black"/>
														</svg>
													</div>
												</div>
												<div class="textquest">
													<p class="ptextq" id="tx3">
														Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял. Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял. Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял. Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял. Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял. Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял. Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял. Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял.
													</p>
												</div>
											</div>
											<div class="predel88"><div class="predel8"></div></div>
											<div class="question">
												<div class="q1">
													<p class="qp">Какой-то очень очень длинный интересный вопрос ?</p>
													<div class="predel5" id="pr4" onclick="disp2('4')">
														<svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect x="7" y="0.492188" width="2" height="16" fill="black"/>
															<rect y="9.49219" width="2" height="16" transform="rotate(-90 0 9.49219)" fill="black"/>
														</svg>
													</div>
												</div>
												<div class="textquest">
													<p class="ptextq" id="tx4">
														Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял. Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял. Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял. Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял. Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял. Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял. Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял. Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял.
													</p>
												</div>
											</div>
											<div class="predel88"><div class="predel8"></div></div>
											<div class="theme">тематика</div>
											<div class="predel88"><div class="predel8"></div></div>
											<div class="question">
												<div class="q1">
													<p class="qp">Какой-то очень очень длинный интересный вопрос ?</p>
													<div class="predel5" id="pr5" onclick="disp2('5')">
														<svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect x="7" y="0.492188" width="2" height="16" fill="black"/>
															<rect y="9.49219" width="2" height="16" transform="rotate(-90 0 9.49219)" fill="black"/>
														</svg>
													</div>
												</div>
												<div class="textquest">
													<p class="ptextq" id="tx5">
														Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял. Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял. Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял. Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял. Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял. Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял. Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял. Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял.
													</p>
												</div>
											</div>
											<div class="predel88"><div class="predel8"></div></div>
											<div class="question">
												<div class="q1">
													<p class="qp">Какой-то очень очень длинный интересный вопрос ?</p>
													<div class="predel5" id="pr6" onclick="disp2('6')">
														<svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect x="7" y="0.492188" width="2" height="16" fill="black"/>
															<rect y="9.49219" width="2" height="16" transform="rotate(-90 0 9.49219)" fill="black"/>
														</svg>
													</div>
												</div>
												<div class="textquest">
													<p class="ptextq" id="tx6">
														Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял. Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял. Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял. Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял. Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял. Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял. Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял. Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял.
													</p>
												</div>
											</div>
											<div class="predel88"><div class="predel8"></div></div>
											<div class="question">
												<div class="q1">
													<p class="qp">Какой-то очень очень длинный интересный вопрос ?</p>
													<div class="predel5" id="pr7" onclick="disp2('7')">
														<svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect x="7" y="0.492188" width="2" height="16" fill="black"/>
															<rect y="9.49219" width="2" height="16" transform="rotate(-90 0 9.49219)" fill="black"/>
														</svg>
													</div>
												</div>
												<div class="textquest">
													<p class="ptextq" id="tx7">
														Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял. Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял. Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял. Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял. Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял. Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял. Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял. Полный ответ на вопрос, досточно полный, чтобы пользователь точно понял.
													</p>
												</div>
											</div>
											<div class="predel88"><div class="predel8"></div></div>
										</div>
										<p class="ptheme">Больше вопросов? <a href="#" class="link2">Свяжитесь с нами</a></p>
									</div>
								</div>
		</div>
		<div class="d7">
								<div class="divimg">
									<div class="divimgp">
										<p class="imgph">Начни работу с RuPlan уже сегодня</p>
										<p class="imgp">Попробуй бесплатную подписку сроком в 30 дней.</p>
									</div>
									<div class="predel3">
										<?
										if (isset($_SESSION['auth']) & isset($_SESSION['email']) & $_SESSION['auth']=='true') {
											echo '<a href="start.php" class="imgbut1">';
										}
										else{
											echo '<a href="reg.php?mod1" class="imgbut1">';
										}
										?>
										<p class="linkcont3">Попробовать бесплатно</p></a>
										<?
										if (isset($_SESSION['auth']) & isset($_SESSION['email']) & $_SESSION['auth']=='true') {
											echo '<a href="start.php" class="imgbut2">';
										}
										else{
											echo '<a href="reg.php?mod1" class="imgbut2">';
										}
										?>
										<p class="linkcont3">Оформить подписку</p></a>
									</div>

								</div>
		</div>
	</main>
	<footer>
	<div class="f1 ftrstart">
		<div class="frtarty">
			<h3 class="hf">RuPlan</h3>
			<div class="imgfooter">
				<svg width="9" height="5" viewBox="0 0 9 5" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect x="8.29297" y="4.94971" width="6" height="1" rx="0.5" transform="rotate(-135 8.29297 4.94971)" fill="black"/>
					<rect x="5" y="0.707031" width="6" height="1" rx="0.5" transform="rotate(135 5 0.707031)" fill="black"/>
				</svg>
			</div>
		</div>
		<div class="fnav">
			<a href="" class="link predel6">О нас</a>
			<a href="" class="link predel6">Как это работает</a>
			<a href="" class="link predel6">Поддержка</a>
			<a href="" class="link predel6">Подписка</a>
		</div>
	</div>
	<div class="f2 ftrstart">
		<div class="frtarty">
			<h3 class="hf">Помощь</h3>
			<div class="imgfooter">
				<svg width="9" height="5" viewBox="0 0 9 5" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect x="8.29297" y="4.94971" width="6" height="1" rx="0.5" transform="rotate(-135 8.29297 4.94971)" fill="black"/>
					<rect x="5" y="0.707031" width="6" height="1" rx="0.5" transform="rotate(135 5 0.707031)" fill="black"/>
				</svg>
			</div>
		</div>
		<div class="fnav">
			<a href="" class="link predel6">FAQ</a>
			<a href="" class="link predel6">Связаться с нами</a>
		</div>
	</div>
	<div class="f3 ftrstart">
		<div class="frtarty">
			<h3 class="hf">Обновления</h3>
			<div class="imgfooter">
				<svg width="9" height="5" viewBox="0 0 9 5" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect x="8.29297" y="4.94971" width="6" height="1" rx="0.5" transform="rotate(-135 8.29297 4.94971)" fill="black"/>
					<rect x="5" y="0.707031" width="6" height="1" rx="0.5" transform="rotate(135 5 0.707031)" fill="black"/>
				</svg>
			</div>
		</div>
		<div class="fnav">
			<a onclick="pod2()" class="link predel6" style="margin-bottom: 2rem;">Подписаться на рассылку</a>
			<a href="" class="link predel6">Vk</a>
			<a href="" class="link predel6">Instagram</a>
			<a href="" class="link predel6">Facebook</a>
		</div>
	</div>
	<div class="f4">
		<h3 class="hf">Подпишитесь на рассылку</h3>
		<p class="predel7">Последние новости RuPlan будут приходить вам на почту каждый месяц.</p>
		<div class="podpiska">
			<div class="predel10">
				<input id="unpr_rta" type="text" name="">
				<div onclick="podpiska()" class="predel9">
					<div class="predel11"></div>
				</div>
			</div>
		</div>
		<div class="predel12">
			<p id="predel13" class="predel13"></p>
		</div>
		<div class="socials">
			<a href="" class="soclink"><img src="img/s2.png"></a>
			<a href="" class="soclink"><img src="img/s3.png"></a>
			<a href="" class="soclink"><img src="img/s1.png"></a>
		</div>
	</div>
	</footer>
	<div class="allright"> RuPlan. All right reserved.</div>
	<div class="backk">
		<svg  width="1920" class='back-back' height="990" viewBox="0 0 1920 990" fill="none" xmlns="http://www.w3.org/2000/svg">
			<path d="M-1 497.68L523.231 781.972L-1 907.732L-1 497.68Z" stroke="#0578FF" stroke-width="2"/>
			<path d="M1723.89 980.563L1441.24 516.117L2129.26 733.868L1723.89 980.563Z" stroke="#0578FF" stroke-width="2"/>
			<path d="M659.166 -8.05254L990.455 -7.89526L408.792 312.461L659.166 -8.05254Z" stroke="#0578FF" stroke-width="2"/>
			<path d="M480 782.5L-1.75 902.526L-1.75 521.474L480 782.5Z" fill="#0578FF"/>
			<path d="M1512 552.861L2158.65 757.52L1777.65 989.381L1512 552.861Z" fill="#87BEFF"/>
		</svg>
	</div>
</body>
<script type="text/javascript">
	var vrot = '1';
	var vrot2 = '1';
	var vrot3 = 0;
	var vrot4 = 2;
	$('.ptextq').toggle('1',"swing");
	$('#care2').toggle('1',"swing");
	$('#tx1').toggle('1',"swing");
	$('.vphide').toggle('4000',"swing");
	$('#vp1').toggle('4000',"swing");
	function disp(arh) {
		$('#prp'+vrot).text('');
		$('#prp'+vrot).append('<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">													<circle cx="16" cy="16" r="15" stroke="#4A9DFF" stroke-width="2"/>													<path d="M22.5 15.134C23.1667 15.5189 23.1667 16.4811 22.5 16.866L13.5 22.0622C12.8333 22.4471 12 21.966 12 21.1962V10.8038C12 10.034 12.8333 9.55292 13.5 9.93782L22.5 15.134Z" fill="#4A9DFF"/>												</svg>');
		$('#prp'+arh).text('');
		$('#prp'+arh).append('<svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">													<circle cx="16" cy="16" r="15" stroke="#4A9DFF" stroke-width="2"/>													<path fill-rule="evenodd" clip-rule="evenodd" d="M16 28C22.6274 28 28 22.6274 28 16C28 9.37258 22.6274 4 16 4V16L8.06253 25C10.1779 26.8671 12.9567 28 16 28Z" fill="#4A9DFF"/>												</svg>');
		$('#vp'+vrot).toggle('4000',"swing");
		vrot = arh;
		$('.vrta').css('display','none');
		$('.vrta')[0].pause();
		$('.vrta')[0].currentTime = 0;
		$('.vrta')[1].pause();
		$('.vrta')[1].currentTime = 0;
		$('.vrta')[2].pause();
		$('.vrta')[2].currentTime = 0;
		$('.vrta')[3].pause();
		$('.vrta')[3].currentTime = 0;
		$('#v'+arh).css('display','unset');
		$('#v'+arh)[0].play();
					//$('.vphide').toggle('4000',"swing");
					$('#vp'+arh).toggle('4000',"swing");
				}
				function disp2(arh) {
					$('#pr'+vrot2).text('');
					$('#pr'+vrot2).append('<svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">													<rect x="7" y="0.492188" width="2" height="16" fill="black"/>													<rect y="9.49219" width="2" height="16" transform="rotate(-90 0 9.49219)" fill="black"/>											</svg>');
					$('#pr'+arh).text('');
					$('#pr'+arh).append('<svg width="16" height="3" viewBox="0 0 16 3" fill="none" xmlns="http://www.w3.org/2000/svg"><rect y="2.49219" width="2" height="16" transform="rotate(-90 0 2.49219)" fill="black"/>');
					$('#tx'+vrot2).toggle('6000',"swing");
					vrot2 = arh;
					$('#tx'+arh).toggle('6000',"swing");
				}
				function podpiska(){
					var sigma = $('#unpr_rta').val();
					filter1=sigma.split('@');
					if (filter1.length==2) {
						filter2=filter1[1];
						filter2=filter2.split('.');
						if (filter2.length>=2) {
							$.ajax({
								method: "POST",
								url: 'addtomail.php',
								context: $('#scriptonit'),
								data: {
									em:sigma
								},
								success: function( msg ){
									$('#scriptonit').text();
									$('#scriptonit').append(msg);
								}
							});
						}
						else{
							if (vrot3==1) {
								$('#predel13').text('');
								$('#predel13').append('Не корректный e-mail');
							}
							else{
								vrot3=1;
								$('#predel13').text('');
								$('#predel13').append('Не корректный e-mail');
							}
						}
					}
					else{
						if (vrot3==1) {
							$('#predel13').text('');
							$('#predel13').append('Не корректный e-mail');

						}
						else{
							vrot3=1;
							$('#predel13').text('');
							$('#predel13').append('Не корректный e-mail');
						}
					}
				}
				function pod2() {
					$('#predel13').text('');
					$('#predel13').append('Введите E-mail на который хотите получать рассылку');
				}
				function disp3(arh) {
					if (arh=='0') {
						vrot4-=1;
					}
					else if (arh=='1') {
						vrot4+=1;
					}
					if (vrot4>5) {
						vrot4=5;
					}
					if (vrot4<1) {
						vrot4=1;
					}
					switch(vrot4){
						case 1:
						$('#summa').text('');
						$('#summa').text('554 руб.');
						$("#blue").animate({left: "127px"}, 500);
						break;
						case 2:
						$('#summa').text('');
						$('#summa').text('1054 руб.');
						$("#blue").animate({left: "67px"}, 500);
						break;
						case 3:
						$('#summa').text('');
						$('#summa').text('2054 руб.');
						$("#blue").animate({left: "9px"}, 500);
						break;
						case 4:
						$('#summa').text('');
						$('#summa').text('3054 руб.');
						$("#blue").animate({left: "-49px"}, 500);
						break;
						case 5:
						$('#summa').text('');
						$('#summa').text('10054 руб.');
						$("#blue").animate({left: "-108px"}, 500);
						break;
					}
				}
				function scr() {
					$("body,html").animate({scrollTop:3400}, 800);
				}
				function scr2() {
					$("body,html").animate({scrollTop:2100}, 800);
				}
				function scr3() {
					$("body,html").animate({scrollTop:3400}, 800);
				}
			</script>
			<script type="text/javascript">
				var vid = document.getElementById('v0');
				vid.addEventListener('ended',myHandler,false);
				vid.pause();
				vid.playbackRate = 3.0;
				var oldScroll=0;
				$(window).scroll(function(){
					newScroll=$(window).scrollTop();
					if (oldScroll<newScroll & newScroll>2180) {
							console.log('x:'+oldScroll);
							vid.play();
							oldScroll=newScroll;
						}
					});
				$(window).on("scrollstop", function() {
					console.log('yyy:'+newScroll);
					if ($(window).scrollTop()>=2660) {
						return;
					}
					else{
						vid.pause();
					}
				});
				function myHandler() {
					$('.d4videoon').css('display','none');
				}
				
				/*
				перекресток на 9ой просеке
				$(document).scroll(function(){
					console.log('x:'+window.pageYOffset);
					vid.play();
					let timerId = setTimeout(function() {
						vid.pause();
					},1000);
				});*/
				/*var alltime,startTime,ticks,itemTime;
				var rtatime=0;
				vid.addEventListener('loadedmetadata', function() {
					console.log(vid.duration);
					alltime = vid.duration;
					startTime = vid.currentTime;
					ticks = 10000;
					cadr = 24;
					itemTime = alltime / ticks;
				});
				$(document).scroll(function(){
					if (vid.currentTime == alltime) {
						vid.currentTime = 0.0;
						return;
					}
					let timerId = setInterval(function() {
						vid.currentTime = startTime + itemTime;
						startTime+=itemTime;
						if (rtatime==ticks) {
							rtatime=0;
							clearInterval(timerId);
						}
						if (vid.currentTime == alltime) {
							clearInterval(timerId);
						}
						++rtatime;
						console.log(startTime);
					}, 250);
				});*/
				/*window.onscroll = function(){
					alltime = vid.duration;
					vid.pause();
					var startTime = 1;
					var h1 = window.innerHeight;
					var ticks=100;
					var timing = 50;
					procent = window.pageYOffset / h1;
					
					endTime = startTime/procent;
					itemTime = (endTime - startTime) / ticks;
					
					itemTime = Math.ceil(itemTime); 

					for ( var i = 0; i < ticks; ++i )
					{
							setTimeout(function() {
								vid.currentTime = startTime + 1;
								startTime+=1;
								
							}, timing);
					}
					vid.playbackRate = 3.0;
					vid.play();
					let timerId = setInterval(function(){
						if (vid.currentTime == window.pageYOffset/100000) {
							vid.pause();
							clearInterval(timerId);
						}
					}, 1);
					//vid.currentTime = window.pageYOffset/1000;
						//vid.pause();
				};*/
				//setInterval(function(){
					//vid.currentTime = window.pageYOffset/800;
				//}, 1);
			</script>	
			<div type="text/javascript" id="scriptonit">
			</div>
			</html>