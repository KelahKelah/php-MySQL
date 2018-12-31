<?php
session_start();

if(!isset($_POST["secure"])) {
    $_SESSION["secure" ]= rand(1000,9999);
} else {
    if ($_SESSION["secure"]==$_POST["secure"]) {
echo "Its a match!"
    } else {
        echo "Incorrect match, try again." ;
        $_SESSION["" rand(1000,9999);
    }
}
?>

<img src="generate.php" /><br>

<form action="index.php" method="POST">
Type the Value you see: <input type="text" size="6" name="secure"> <input type="submit" value="submit">
</form>