<?php require '../header.php'; ?>

<?php
    $pdo = new PDO('mysql:host=localhost;dbname=Book;charset=utf8', 'root', 'mariadb');
    $sql = $pdo->prepare('delete from Library where id=?');
    if($sql->execute([$_REQUEST['id']])){
   echo '削除に成功しました。';

   } else {
   echo '削除に失敗しました。';
   }
?>
<?php require '../footer.php'; ?>