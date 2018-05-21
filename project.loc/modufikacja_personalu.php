<?php
if(isset($_GET['id_personal'])){
    $conn = mysqli_connect('localhost','root', '', 'project');
    $result = $conn->query("SELECT * FROM personal WHERE id = '{$_GET['id_personal']}' ");
    $myrow = mysqli_fetch_assoc($result);
    ?>
        <p>Imie: <? echo $myrow['imie']?></p>
        <p>Nazwisko: <? echo $myrow['nazwisko']?></p>
        <p>Stanowisko: <? echo  $myrow['stanowisko']?></p>

    -----------------------------
    <form action="rejestracja_personalu.php" method="POST">
        <p>New Nazwisko</p>
        <input name="new_nazwisko" type='text' /><br>
        <input name="personal_id" type='hidden' value="<?php echo $_GET['id_personal'];?>" />
        <br>
        <input type="submit" value="submit"/>
    </form>
    <form action="rejestracja_personalu.php" method="POST">
        <p>New Password</p>
        <input name="new_password" type='text' /><br>
        <input name="personal_id" type='hidden' value="<?php echo $_GET['id_personal'];?>" />
        <br>
        <input type="submit" value="submit"/>
    </form>
    <form action="rejestracja_personalu.php" method="POST">
        <p>New stanowisko</p>
        <input name="new_stanowisko" type='text' /><br>
        <input name="personal_id" type='hidden' value="<?php echo $_GET['id_personal'];?>" />
        <br>
        <input type="submit" value="submit"/>
    </form>

<?} ?>
<?php
if(isset($_GET['id_inwentarz_newdata'])){
    $conn = mysqli_connect('localhost','root', '', 'project');
    $result = $conn->query("SELECT * FROM Inwentarz WHERE id = '{$_GET['id_inwentarz_newdata']}' ");
    $myrow = mysqli_fetch_assoc($result);

?>
<p>nazwa: <? echo $myrow['nazwa']?></p>
<p>ilosc: <? echo $myrow['ilosc']?></p>

<form action="rejestracja_personalu.php" method="POST">
    <p>New ilosc</p>
    <input name="new_inwilosc" type='text' /><br>
    <input name="inw_id" type='hidden' value="<?php echo $_GET['id_inwentarz_newdata'];?>" />
    <br>
    <input type="submit" value="submit"/>
</form>
<?} ?>

<?php
if(isset($_GET['id_uslugi'])){
$conn = mysqli_connect('localhost','root', '', 'project');
$result = $conn->query("SELECT * FROM uslugi WHERE id = '{$_GET['id_uslugi']}' ");
$myrow = mysqli_fetch_assoc($result);

?>

    <p>nazwa: <? echo $myrow['nazwa_uslugi']?></p>
    <p>cena: <? echo $myrow['cena']?></p>
    <form action="rejestracja_personalu.php" method="POST">
        <p>New usluga</p>
        Nazwa uslugi
        <input name="new_nazwa_uslug" type='text' /><br>
        Cena
        <input name="new_uslugi_cena" type='number' /><br>
        <input name="new_uslugi_id" type='hidden' value="<?php echo $_GET['id_uslugi'];?>" />
        <br>
        <input type="submit" value="submit"/>
    </form>
<?php }?>
