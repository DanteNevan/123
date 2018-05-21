<?php
if(isset($_GET['token'])){
		$token = $_GET['token'];
		$login = $_GET['login'];

		$conn = mysqli_connect('localhost','root', '', 'project');
		$result = $conn->query("SELECT token, login FROM personal WHERE login = '$login' and token = '$token'");
				
        $myrow = mysqli_fetch_assoc($result);
		if(empty($myrow)){
			header("Location: PersonelAdmin.php?account=not_access");
		}else{	
		header("Location: PersonelAdmin.php?account=access");	
		}
	}
 ?>