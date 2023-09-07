<?php require '../header.php'; ?>
<?php
$pdo = new PDO('mysql:host=localhost;dbname=Book;charset=utf8', 'root', 'mariadb');

$sql=$pdo->prepare('insert into Library values(?,?)');

if ($sql->execute([$_REQUEST['ID'], $_REQUEST['name']])){
    echo '登録完了';
} else {
    echo '登録失敗';
}

?>
<?php require '../footer.php'; ?>