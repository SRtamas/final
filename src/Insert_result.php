<?php session_start(); ?>
<?php
    const SERVER = 'mysql218.phy.lolipop.lan';
    const DBNAME = 'LAA1516810-aso2201157';
    const USER = 'LAA1516810';
    const PASS = 'Pass0305';
    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <a href="index.php">メニューに戻る</a>
    <title>登録完了</title>
</head>
<body>
    <?php
    //insertで追加
        $pdo = new PDO($connect, USER, PASS);
        $sql = $pdo->prepare('insert into cook(cook_mei, cook_genru) values (?, ?)');
        $sql->execute([$_POST['cook_mei'], $_POST['cook_genru']]);
        if(empty($_POST['cook_mei'])){
            echo '料理名を入力してください。';
        } else if(empty($_POST['cook_genru'])){
            echo 'ジャンルを入力してください。';
        } else {
            
            echo '<h1>登録が完了しました。</h1>';
        }
    ?>
</body>
</html>
