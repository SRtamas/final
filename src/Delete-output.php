<?php
    const SERVER = 'mysql220.phy.lolipop.lan';
    const DBNAME = 'LAA1516820-final';
    const USER = 'LAA1516820';
    const PASS = 'Pass0830';
    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="UTF-8">
		<title>削除完了</title>
	</head>
	<body>
    <a href="index.php">メニューに戻る</a>
    <hr>
<?php
    $pdo=new PDO($connect, USER, PASS);
    $cookId = $_POST['id'];
    $sql=$pdo->prepare('delete from cook where cook_id=?');
    $sql->execute([$cookId]);

    echo '<h1>削除が完了しました。</h1>'; 
?>
</html>
