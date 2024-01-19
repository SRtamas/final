<?php session_start(); ?>
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
    <a href="index.php">メニューに戻る</a>
    <hr>
    <title>追加完了</title>
</head>
<body>
    <?php
    //insertで追加
        $pdo = new PDO($connect, USER, PASS);
        $Cooksql = $pdo->prepare('insert into Genre(genre_mei) values (?)');
        $Cooksql->execute([$_POST['genre']]);
        
        echo '<h1>登録が完了しました。</h1>';
    ?>
</body>
</html>
