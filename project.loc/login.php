<?php 

 if(isset($_POST['commit']))
        {
				$conn = mysqli_connect('localhost','root', '', 'project');
				
            $loginAdmin = $_POST['login'];
            $passwordAdmins = $_POST['password'];

            $result = $conn->query("SELECT login, password FROM admin WHERE login = '$loginAdmin'");
				
            $myrow = mysqli_fetch_assoc($result);
			if(empty($myrow)){
				echo "wrong login<br>";
			}
			if($myrow['password'] != $passwordAdmins){
				echo"wrong password";
			}
			else{
				header("Location: indexAdmin.html"); 
			}
		}

?>