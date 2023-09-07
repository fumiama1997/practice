<link rel="stylesheet" href="style.css">
<?php require '../header.php'; ?>
<p>２チャンネル閲覧フォーム</p>
<p>上から新しい順</p>
<?php

$pdo= new PDO('mysql:host=localhost;dbname=2channel;charset=utf8','root','mariadb');

foreach($pdo->query('select* from post')as $row){
    echo '<p>';
    echo $row['time'],':';
    echo $row['title'],':';
    echo $row['body'];
    echo '</p>';
}






?>
<?php require '../footer.php'; ?>