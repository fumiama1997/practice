<?php require '../header.php'; ?>

<?php
$pdo = new PDO('mysql:host=localhost;dbname=Book;charset=utf8', 'root', 'mariadb');
$sql = $pdo->prepare('update Library set name=? where id=?');


if (empty($_REQUEST['name'])) {
    echo '商品名を入力してください。';
} else if ($sql->execute([htmlspecialchars($_REQUEST['name']),$_REQUEST['id']])) {
    echo '更新に成功しました';
} else {
    echo '更新に失敗しました';
}

?>
<?php require '../footer.php'; ?>