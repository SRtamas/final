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
    <link rel="stylesheet" href="../css/insert-output.css">
    <title>登録完了</title>
</head>
<body>
    <a href="index.php">メニューに戻る</a>
    <hr>

    <?php
    //insertで追加
        $pdo = new PDO($connect, USER, PASS);
        $sql = $pdo->prepare('insert into Making values (null,?,?)');
        $sql->execute([$_POST['cook_make'], $_POST['cook_mate']]);

        $Makingsql = $pdo->prepare('select * from Making where cook_mate = ?');
        $Makingsql->execute([$_POST['cook_mate']]);

        foreach($Makingsql as $row){
            $makingId = $row['making_id'];
        }

        $Genresql = $pdo->prepare('select * from Genre where genre_mei = ?');
        $Genresql->execute([$_POST['genre_mei']]);  
            
        foreach($Genresql as $row2){
            $Cooksql = $pdo->prepare('insert into Cook(making_id,cook_mei,genre_id) values (?, ? , ?)');
            $Cooksql->execute([$makingId,$_POST['cook_mei'],$row2['genre_id']]);    
        }
        echo '<h1>登録が完了しました。</h1>';
    ?>
</body>
</html>
