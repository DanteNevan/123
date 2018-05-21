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
			HideInwentarz();
		});
			//Функция отображения PopUp
		function ShowInwentarz(){
			$("#inwentarz").show();
		}
			//Функция скрытия PopUp
		function HideInwentarz(){
			$("#inwentarz").hide();
		}
</script>

<script>
		$(document).ready(function(){
			//Скрыть PopUp при загрузке страницы    
			HideModInwentarz();
		});
			//Функция отображения PopUp
		function ShowModInwentarz(){
			$("#ModInwentarz").show();
		}
			//Функция скрытия PopUp
		function HideModInwentarz(){
			$("#ModInwentarz").hide();
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
		<h3 class="menu-title">Inwentarz</h3>
		<ul class="menu-list">
			<br><li><a href="indexAdmin.html">Strona Główna</a></li></br>
			<br><li><a href="javascript:ShowInwentarz()">Dodawanie Inwentarza</a></li></br>
			<br><li><a href="javascript:ShowModInwentarz()">Modyfikacja Inwentarza</a></li></br>		
		</ul>
	</div>
<!--/ menu -->
<!-- content -->
	<div class="b-popup" id="inwentarz">
		<div class="b-popup-content">
			<form action="rejestracja_personalu.php" method="GET">

	<table>
		<tr>
			<td>Nazwa<font color="red"></font>:</td>
			<td><input type="text" size="20" name="NazwaInw" /></td>
		</tr>
		<tr>
			<td>Ilość<font color="red"></font>:</td>
			<td><input type="number" size="20" maxlength="20" name="IloscInw" /></td>
		</tr>
		<tr>
			<td></td>
			<td colspan="2"><input type="submit" value="Dodaj" name="submit_dodacz_inwentarz">
			</td>
		</tr>
	</table>
		
		</form>
			<a href="javascript:HideInwentarz()" >Zamknąć</a>
		</div>
	</div>
	
	<div class="b-popup" id="ModInwentarz">
		<div class="b-popup-content">
			<form action="" method="POST">

	<table>
		<?php
		$conn = mysqli_connect('localhost','root', '', 'project');
		$result = $conn->query("SELECT * FROM Inwentarz");

		while($myrow = mysqli_fetch_assoc($result)){
			echo "<a href = 'modufikacja_personalu.php?id_inwentarz_newdata=" . $myrow['id'] . "' class ='choose-subject-student'>choose</a><a href = 'rejestracja_personalu.php?id_inwentarz=" . $myrow['id'] . "' class ='choose-subject-student'>deleted</a>". $myrow['nazwa']." 	".$myrow['ilosc']."<br>";
		}
		?>
	</table>
		
		</form>
			<a href="javascript:HideModInwentarz()" >Zamknąć</a>
		</div>
	</div>
		<?php
		$conn = mysqli_connect('localhost','root', '', 'project');
		$result = $conn->query("SELECT * FROM Inwentarz ");?>


			<?php
			echo"<table border=\"2\" class='border_inwentarz'><tr>
    					<th>nazwa</th>
    					<th>ilosc</th>
  					</tr>";
			while($myrow = mysqli_fetch_assoc($result)){
				echo "<tr><td>".$myrow['nazwa']."</td><td>".$myrow['ilosc']."</td></tr>";
			}
			echo"</table>";
			?>

<!-- content -->
<style>
	.border_inwentarz{
		text-align:center;
		width:600px;
	}
</style>

  
</body>
</html>