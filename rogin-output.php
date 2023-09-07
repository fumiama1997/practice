<?php require '../header.php'; ?>
<?php

$pdo= new PDO('mysql:host=localhost;dbname=practice;charset=utf8','root','mariadb');

$sql=$pdo->prepare('select * from user where id = ? and pass=?');


if ($sql->execute([$_REQUEST['ID1'], $_REQUEST['password1']])){
    echo 'ログインできました';
} else {
    echo 'ログインできませんでした'; 
}

?>
<?php require '../footer.php'; ?>