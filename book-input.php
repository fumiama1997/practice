<?php require '../header.php'; ?>
<p>天野書店 追加フォーム</p>
<p>ID</p>
<form action="book-output.php"method="post">
   <input type="text" name="ID">
<p>本名</p>
<input type="text" name="name">
<input type="submit"name="送信">




</form>
<?php require '../footer.php'; ?>