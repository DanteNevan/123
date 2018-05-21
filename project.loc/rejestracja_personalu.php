<?php 

 if(isset($_POST['rejestracja_personalu']))
        {
				$conn = mysqli_connect('localhost','root', '', 'project');
				
            $loginPers = $_POST['login'];
            $passwordPdmins = $_POST['password'];
            $name = $_POST['name'];
            $lastname = $_POST['lastname'];
            $position = $_POST['position'];
		
		$length = 10;
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
	
            $result = $conn->query("INSERT INTO personal (haslo, imie, nazwisko, stanowisko, login, token) VALUE	 ('$passwordPdmins', '$name', '$lastname', '$position', '$loginPers', '$randomString')");
			if($result == true){
                        $to = "testedmail@gmail.com";
                        $subject = "Your new password personal";
                        $messeg = "link to access account = http://project.loc/AccountAccess.php?token=" . $randomString."&login=".$loginPers. "\r\n";
                        $headers = 'MIME-Version: 1.0' . "\r\n";
                        $headers .= 'Content-type: text/html; charset=windows-1251' . "\r\n";
                        mail($to, $subject, $messeg, $headers);
			}
				header("Location: PersonelAdmin.php");
			
		
		}
	if(isset($_GET['personalid'])){
		$conn = mysqli_connect('localhost','root', '', 'project');
		$personalid = $_GET['personalid'];
		
		$result = $conn->query("DELETE FROM personal WHERE id='$personalid'");
		
		header("Location: PersonelAdmin.php");
	}

	if(isset($_POST['new_nazwisko'])){
		$conn = mysqli_connect('localhost','root', '', 'project');
		$result = $conn->query("UPDATE personal SET nazwisko = '{$_POST['new_nazwisko']}' where id = '{$_POST['personal_id']}'");
		header("Location: PersonelAdmin.php");
	}
	if(isset($_POST['new_password'])){

		$conn = mysqli_connect('localhost','root', '', 'project');
		$result = $conn->query("UPDATE personal SET haslo = '{$_POST['new_password']}' where id = '{$_POST['personal_id']}'");
		header("Location: PersonelAdmin.php");
	}
	if(isset($_POST['new_stanowisko'])){

		$conn = mysqli_connect('localhost','root', '', 'project');
		$result = $conn->query("UPDATE personal SET stanowisko = '{$_POST['new_stanowisko']}' where id = '{$_POST['personal_id']}'");
		header("Location: PersonelAdmin.php");
	}
	
	if($_GET['submit_dodacz_inwentarz']){

		$conn = mysqli_connect('localhost','root', '', 'project');
		$result = $conn->query("INSERT INTO Inwentarz (nazwa, ilosc) VALUE ('{$_GET['NazwaInw']}','{$_GET['IloscInw']}')");
		if($result == true){
			header("Location: InwentarzAdmin.php");
		}else{
			echo"Ошибка при сохранение в базу";
			header("Location: InwentarzAdmin.php");
		}
	}
	if(isset($_GET['id_inwentarz'])){
		$conn = mysqli_connect('localhost','root', '', 'project');
		$result = $conn->query("DELETE FROM Inwentarz WHERE id='{$_GET['id_inwentarz']}'");

		header("Location: InwentarzAdmin.php");
	}

	if(isset($_POST['new_inwilosc'])){
		$conn = mysqli_connect('localhost','root', '', 'project');
		$result = $conn->query("UPDATE Inwentarz SET ilosc = '{$_POST['new_inwilosc']}' where id = '{$_POST['inw_id']}'");
		header("Location: InwentarzAdmin.php");
	}

	if(isset($_POST['NazwaUsg']) && isset($_POST['CenaUsg'])){
		$conn = mysqli_connect('localhost','root', '', 'project');
		$result = $conn->query("INSERT INTO uslugi (nazwa_uslugi, cena) VALUE ('{$_POST['NazwaUsg']}','{$_POST['CenaUsg']}')");
		if($result == true){
			header("Location: UslugiAdmin.php");
		}else{
			echo"Ошибка при сохранение в базу";
			exit;
		}
	}
	if(isset($_POST['new_nazwa_uslug'])){
		$conn = mysqli_connect('localhost','root', '', 'project');
		$result = $conn->query("UPDATE uslugi SET nazwa_uslugi = '{$_POST['new_nazwa_uslug']}' where id = '{$_POST['new_uslugi_id']}'");
		header("Location: UslugiAdmin.php");
	}

	if(isset($_POST['new_uslugi_cena'])){
		$conn = mysqli_connect('localhost','root', '', 'project');
		$result = $conn->query("UPDATE uslugi SET cena = '{$_POST['new_uslugi_cena']}' where id = '{$_POST['new_uslugi_id']}'");
		header("Location: UslugiAdmin.php");
	}
?>