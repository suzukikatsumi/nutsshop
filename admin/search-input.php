<?php include_once '../header.php'; ?>
<?php require_once '../connect.php'; ?>
商品名を入力してください。
<form action="search-output.php" method="post">
<input type="text" name="keyword">
<input type="submit" value="検索">
</form>
<?php require '../footer.php'; ?>
