<?php 
$string = 'password';
$string_harsh =md5 ($tring);

echo $string_hash;

<form action ="index.php" method="POST">
Name <input type="text" name="user_id">
<br>
Password <input type="password" name="user_password">
<input type = "submit" value="submit">
</form>

if (isset ($_POST['user_password']) &&!empty($_POST['USER_password'])) {
    $user_password = md5($_POST['user_password']) ;

    $filename ='hash.txt' ;
    $handle = fopen($filename, 'r') ;
    $file_password = fread($handle, filesize($filename)) ;

    if ($user_password==$file_password) {
        echo 'password is ok!' ;
    } else {
        echo 'Incorrect password.' ;
    }
} else {
    echo 'please enter a password.' ;
}
?>