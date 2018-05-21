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
			HidePersonel();
		});
			//Функция отображения PopUp
		function ShowPersonel(){
			$("#personel").show();
		}
			//Функция скрытия PopUp
		function HidePersonel(){
			$("#personel").hide();
		}
</script>

	<script>
		$(document).ready(function(){
			//Скрыть PopUp при загрузке страницы    
			HideModPersonel();
		});
			//Функция отображения PopUp
		function ShowModPersonel(){
			$("#ModPersonel").show();
		}
			//Функция скрытия PopUp
		function HideModPersonel(){
			$("#ModPersonel").hide();
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
		<h3 class="menu-title">Personel</h3>
		<ul class="menu-list">
			<br><li><a href="indexAdmin.html">Strona Główna</a></li></br>
			<br><li><a href="javascript:ShowPersonel()">Rejestracja Persenelu</a></li></br>
			<br><li><a href="javascript:ShowModPersonel()">Modyfikacja Personelu</a></li></br>		
		</ul>
	</div>
<!--/ menu -->
<!-- content -->
	<div class="b-popup" id="personel">
		<div class="b-popup-content">
			<form action="rejestracja_personalu.php" method="POST">
	<table>
		<tr>
			<td>Login<font color="red"></font>:</td>
			<td><input type="text" size="20" name="login"></td>
		</tr>
		<tr>
			<td>Hasło<font color="red"></font>:</td>
			<td><input type="password" size="20" maxlength="20" name="password"></td>
		</tr>
		<tr>
			<td>Powtórz Hasło<font color="red"></font>:</td>
			<td><input type="password" size="20" maxlength="20" name="password2"></td>
		</tr>
		<tr>
			<td>Imię:</td>
			<td><input type="text" size="20" name="name"></td>
		</tr>
		<tr>
			<td>Nazwisko:</td>
			<td><input type="text" size="20" name="lastname"></td>
		</tr>
		<tr>
			<td>Stanowisko:</td>
			<td><input type="text" size="20" name="position"></td>
		</tr>
		
		<tr>
			<td></td>
			<td colspan="2"><input type="submit" value="Dodaj" name="rejestracja_personalu">
			</td>
		</tr>
	</table>
		
		</form>

			<a href="javascript:HidePersonel()" >Zamknąć</a>
		</div>
	</div>
	
	<div class="b-popup" id="ModPersonel">
		<div class="b-popup-content">
		<?php
			$conn = mysqli_connect('localhost','root', '', 'project');
			$result = $conn->query("SELECT * FROM personal");

			 while($myrow = mysqli_fetch_assoc($result)){	
				echo "<a href = 'modufikacja_personalu.php?id_personal=" . $myrow['id'] . "' class ='choose-subject-student'>choose</a><a href = 'rejestracja_personalu.php?personalid=" . $myrow['id'] . "' class ='choose-subject-student'>deleted</a>". $myrow['imie']." 	".$myrow['nazwisko']."<br>";
			}
		?>

	<table>
		<h3>Modyfikacja Personelu</h3>
	</table>
		
		</form>
			<a href="javascript:HideModPersonel()" >Zamknąć</a>
		</div>
	</div>

<!-- content -->


<div>
	<?php 
			$conn = mysqli_connect('localhost','root', '', 'project');
		
		 $result = $conn->query("SELECT * FROM personal");
		 
		  while($myrow = mysqli_fetch_assoc($result)){
			  echo "haslo". $myrow['haslo'].' ';
			  echo "imie". $myrow['imie'].' ';
			  echo "nazwisko". $myrow['nazwisko'].' ';
			  echo "stanowisko". $myrow['stanowisko'].' ';
			  echo "login". $myrow['login'].' ';
			  echo"<br>";
		  }
		  
		?>
		<?php 
		
	if($_GET['account'] == 'access' && $_GET['account'] != null){
		echo "account access";
	}
	if($_GET['account'] == 'not_access' && $_GET['account'] != null){
		echo "account not access";
	}
	?>
</div>

  
</body>
</html>
