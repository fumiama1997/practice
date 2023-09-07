<?php require '../header.php'; ?>
<?php
$pdo = new PDO('mysql:host=localhost;dbname=Book;charset=utf8', 'root', 'mariadb');

foreach ($pdo->query('select*from Library') as $row) {
   echo '<p>';
   echo $row['id'], ':';
   echo $row['name'];
   echo '</p>';
}

?>
<?php require '../footer.php'; ?>