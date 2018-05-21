<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]> <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]> <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>Best Fit</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
	<!--[if lt IE 9]><script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
	<script src="http://code.jquery.com/jquery-2.0.2.min.js"></script>
	<script>
		$(document).ready(function(){
			//Скрыть PopUp при загрузке страницы    
			HideUslugi();
		});
			//Функция отображения PopUp
		function ShowUslugi(){
			$("#uslugi").show();
		}
			//Функция скрытия PopUp
		function HideUslugi(){
			$("#uslugi").hide();
		}
	</script>
	<script>
		$(document).ready(function(){
			//Скрыть PopUp при загрузке страницы    
			HideModUslugi();
		});
			//Функция отображения PopUp
		function ShowModUslugi(){
			$("#ModUslugi").show();
		}
			//Функция скрытия PopUp
		function HideModUslugi(){
			$("#ModUslugi").hide();
		}
	</script>
</head>
<body>
<!-- top bar -->
    <div class="top">
        <a href="#" target="_blank">Klinika Chirurgii Plastychnej || Adminisatrator</a>
        <span class="right">
            <a href="Enter.html">
                <strong>Wyloguj</strong>
            </a>
        </span>
    <div class="clr"></div>
    </div>
<!--/ top bar -->
<!--/ menu -->
	<div class="menu">
		<h3 class="menu-title">Usługi</h3>
		<ul class="menu-list">
			<br><li><a href="indexAdmin.html">Strona Główna</a></li></br>
			<br><li><a href="javascript:ShowUslugi()">Dodawanie Usług</a></li></br>
			<br><li><a href="javascript:ShowModUslugi()">Modyfikacja Usług</a></li></br>		
		</ul>
	</div>
<!--/ menu -->
<!-- content -->
	<div class="b-popup" id="uslugi">
		<div class="b-popup-content">
			<form action="rejestracja_personalu.php" method="POST">

	<table>
		<tr>
			<td>Nazwa Usługi<font color="red"></font>:</td>
			<td><input type="text" size="20" name="NazwaUsg"></td>
		</tr>
		<tr>
			<td>Cena Usługi<font color="red"></font>:</td>
			<td><input type="number" size="20" maxlength="20" name="CenaUsg"></td>
		</tr>
		<tr>
			<td></td>
			<td colspan="2"><input type="submit" value="Dodaj" name="submit">
			</td>
		</tr>
	</table>
		
		</form>
			<a href="javascript:HideUslugi()" >Zamknąć</a>
		</div>
	</div>
	
	<div class="b-popup" id="ModUslugi">
		<div class="b-popup-content">
			<form action="" method="POST">

	<table>
		<?
		$conn = mysqli_connect('localhost','root', '', 'project');
		$result = $conn->query("SELECT * FROM uslugi");

		while($myrow = mysqli_fetch_assoc($result)){
		echo "<a href = 'modufikacja_personalu.php?id_uslugi=" . $myrow['id'] . "' class ='choose-subject-student'>choose</a><a href = 'rejestracja_personalu.php?id_uslugi=" . $myrow['id'] . "' class ='choose-subject-student'>deleted</a>". $myrow['nazwa_uslugi']." 	".$myrow['cena']."<br>";
		}
		?>
	</table>
		
		</form>
			<a href="javascript:HideModUslugi()" >Zamknąć</a>
		</div>
	</div>

<!-- content -->


  
</body>
</html>