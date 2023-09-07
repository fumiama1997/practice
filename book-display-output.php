<?php require '../header.php'; ?>
<?php

$pdo= new PDO('mysql:host=localhost;dbname=Book;charset=utf8','root','mariadb');

$sql=$pdo->prepare('select * from Library where name = ?');


if ($sql->execute([$_REQUEST['select']])){
    echo '天野書店で取り扱いあります';
} else {
    echo '天野書店では取り扱っておりません'; 
}

?>
<?php require '../footer.php'; ?>