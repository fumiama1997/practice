<?php require '../header.php'; ?>
<?php

$pdo= new PDO('mysql:host=localhost;dbname=practice;charset=utf8','root','mariadb');

$sql=$pdo->prepare('insert into user values(?,?)');

if ($sql->execute([$_REQUEST['ID'], $_REQUEST['password']])){
    echo '登録完了';
} else {
    echo '登録失敗';
}



?>
<?php require '../footer.php'; ?>