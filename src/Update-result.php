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
        <link rel="stylesheet" href="../css/Update-result.css">
		<title>更新完了</title>
	</head>
	<body>
    <a href="index.php">メニューに戻る</a>
    <hr>
<?php
    $pdo=new PDO($connect, USER, PASS);
    $Makingsql=$pdo->prepare('update Making set cook_make=?,cook_mate=? where making_id=?');
    $Makingsql->execute([$_POST['cook_make'],$_POST['cook_mate'],$_POST['making_id']]);

    $sql = $pdo->prepare('select * from Genre where genre_mei=?'); 
    $sql->execute([$_POST['genre_mei']]);
    foreach($sql as $row){
        $Cooksql=$pdo->prepare('update Cook set cook_mei=?,genre_id=? where cook_id=?');
        $Cooksql->execute([$_POST['cook_mei'],$row['genre_id'],$_POST['cook_id']]);
    }
    echo '<h1>更新に成功しました。</h1>';

    ?>
</html>
