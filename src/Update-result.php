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
		<title>更新完了</title>
	</head>
	<body>
    <a href="index.php">メニューに戻る</a>
    <hr>
<?php
    $pdo=new PDO($connect, USER, PASS);
    $sql=$pdo->prepare('update cook set cook_mei=?,cook_genre=? where cook_id=?');
    if($sql->execute([htmlspecialchars($_POST['cook_mei']),$_POST['cook_genre'],$_GET['id']])){
                echo '<h1>更新に成功しました。</h1>';
            }else{
                echo '<h1>更新に失敗しました。</h1>';
        }
    ?>
</html>
