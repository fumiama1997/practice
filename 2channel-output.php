<?php require '../header.php'; ?>
<?php

$pdo= new PDO('mysql:host=localhost;dbname=2channel;charset=utf8','root','mariadb');

$sql=$pdo->prepare('insert into post values(?,?,?)');

if ($sql->execute([$_REQUEST['time'],$_REQUEST['title'], $_REQUEST['body']])){
    echo '登録完了';
} else {
    echo '登録失敗';
}



?>
<?php require '../footer.php'; ?>