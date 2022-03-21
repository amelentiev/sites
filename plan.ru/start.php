<?
session_start();
require_once 'connect.php';
if (empty($_SESSION['auth']) || empty($_SESSION['email'])) {
	echo "<script>document.location.replace('http://".$_SERVER['SERVER_NAME']."/in.php');</script>";
	exit();
}
if ($_SESSION['auth']=='false') {
	echo "<script>document.location.replace('http://".$_SERVER['SERVER_NAME']."/in.php');</script>";
	exit();
}
$sql = mysqli_query($dbc, 'SELECT * FROM `users` where `users`.`email` = "'.$_SESSION['email'].'" ');
$result=mysqli_fetch_array($sql);
if ($result['podpiska']!= 0) {
	$datr=$result['date'];
	$today= mktime(0,0,0, date("m")  , date("d"), date("Y"));
	$fdatr=explode('-', $datr);
	$dy=(int)$fdatr[0];
	$dm=(int)$fdatr[1];
	$dd=(int)$fdatr[2];
	$datr_rta=mktime(0,0,0, $dm  , $dd, $dy);
	if (($datr_rta-$today) <=0) {
		$request='UPDATE `users` SET `podpiska`=0 ,`free`='.(int)$result["free"].', `date`=NULL where `users`.`email` = "'.$_SESSION['email'].'"';
		$sql = mysqli_query($dbc, $request);
		echo "<script>document.location.replace('http://".$_SERVER['SERVER_NAME']."/start.php');</script>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" type="text/css" href="rta1.css">
	<link rel="stylesheet" type="text/css" href="rta2.css">
	<link rel="stylesheet" type="text/css" href="rta3.css">

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
				<a href="" class="link">Мои проекты</a>
				<a href="" class="link">Обучение</a>
			</div>
			<div class="regnav">
				<div>
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
				<a href="exit.php" class="reglink link">Выйти</a>
			</div>
		</div>
	</header>
	<main class="m5">
		<div class="headrta">
			<p class="classicrta"></p>
			<p class="classicrta"></p>
		</div>
		<div class="thekey">
			<div class="free">
				<div class="us1" style="    margin-right: 8rem;">
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
							<a href="module/takefree.php" class="bluebut circle"><p class="linkcont">Оформить</p></a>
						</div>
					</div>
					<div class="pro">

						<div class="us1">
							<h4 class="predel1">Временная подписка</h4>
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
							<h4>1054 руб.</h4>
							<a href="" class="bluebut circle"><p class="linkcont">Оплатить</p></a>
						</div>
					</div>
				</div>
			</main>
		</body>
		</html>