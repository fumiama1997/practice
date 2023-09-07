<link rel="stylesheet" href="style.css">
<?php require '../header.php'; ?>



<form action="2channel-output.php"method="post">
<h1>2チャンネル投稿ページ</h1> 
<h2>日付</h2>
<input type="text"name="time">
<h2>タイトル</h2><input type="text"name="title">
<h2>本文</h2>
<input type="text"name="body">
<input type="submit"name="投稿">




</form>




<?php require '../footer.php'; ?>