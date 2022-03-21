<?session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
	<script
	src="https://code.jquery.com/jquery-3.4.1.js"
	integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="
	crossorigin="anonymous"></script>
	
</head>
<body class="start-page">
	<div class="logo">
		<img class="logo_img" src="img/s1.png">
	</div>
	<div class="logo formact">
		<input class="inp" placeholder="Логин" id="t1" type="text" name="">
		<input class="inp" placeholder="Пароль" id="t2" type="password" name="">
		<p class="result"></p>
		<a onclick="z1();"><div class="btn-red">Войти</div></a>
	</div>
</body>
<script type="text/javascript" id="scriptonit"></script>
<script type="text/javascript">
	function z1() {
		tw1=$('#t1').val();
		tw2=$('#t2').val();
		$.ajax({
			method: "POST", 
			url: "log3.php", 
			context: $( "#scriptonit" ),
			data: { 
				rtr1: tw1,
				rtr2: tw2
			},
			success: function ( msg ) { 
				$( this ).text( "" );
				$( this ).append( msg );
			}
		})
	}
</script>
<style type="text/css">
	.logo{
		    width: 100%;
    	display: flex;
    	justify-content: center;
	}
	.logo_img{
		    width: 40vw;
    height: 40vw; 
	}
	.formact{
		flex-direction: column;
    	align-items: center;
	}
	.inp{
    width: 30vw;
    margin-block-end: 1vh;
    padding-left: 1vw;
    padding-top: 0.5vh;
    padding-bottom: 0.5vh;
    font-family: 'Roboto', sans-serif;
    font-size: 18px;
	}
	.inp:focus{
		outline: #1C1C1C auto 1px;
	}
	.btn-red{
		    background: #1C1C1C;
    color: white;
    padding: 0.5vw 8vw;
    border-radius: 34px;
    cursor: pointer;
        transition: all 0.1s linear 0.1s;
	}
	.btn-red:hover{
		background: #FF4A4D;
		transition: all 0.1s linear 0.1s;
	}
</style>
</html>