<?php require '../header.php'; ?>
<div class="th0">商品番号</div>
<div class="th1">商品名</div>
<?php
$pdo = new PDO('mysql:host=localhost;dbname=Book;charset=utf8', 'root', 'mariadb');

foreach ($pdo->query('select* from Library') as $row) {

   echo '<form action="book-update-output.php"method="post">';

   echo '<input type="hidden" name="id" value="', $row['id'], '">';
   echo '<div class="td0">', $row['id'], '</div>';

   echo '<div class="td1">';
   echo '<input type="text" name="name" value="', $row['name'], '">';
   echo '</div>';
   echo '<input type="submit" value="更新"> </div>';
   echo  '</form>';
   echo "\n";
}
?>


<?php require '../footer.php'; ?>