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
    <link rel="stylesheet" href="../css/Delete-input.css">

    <title>削除</title>                                 
</head>
<body>
    <div class="list_field">
    <h1>料理削除</h1>
    <a href="index.php">メニューに戻る</a>
    <hr>
    <table  align="center" border="1">
        <tr>
            <th>料理番号</th>
            <th>レシピ番号</th>
            <th>料理名</th>
            <th>レシピ</th>
            <th>材料</th>
            <th>ジャンル</th>
        </tr>
<?php
$pdo = new PDO($connect, USER, PASS);
$sql = $pdo->query('select * from Cook');
foreach($sql as $row){
    echo '<tr>';
    echo '<td>', $row['cook_id'], '</td>';
    echo '<td>', $row['cook_mei'], '</td>';
    echo '<td>', $row['making_id'], '</td>';
    $sql2=$pdo->prepare('select * from Making where making_id=?');
    $sql2->execute([$row['making_id']]);
    foreach($sql2 as $row2){

        echo '<td>', $row2['cook_make'], '</td>';
        echo '<td>', $row2['cook_mate'], '</td>';
    }
    $sql3 = $pdo->prepare('select * from Genre where genre_id=?');
    $sql3->execute([$row['genre_id']]);
    foreach($sql3 as $row3){
        echo '<td>', $row3['genre_mei'], '</td>';
    }
    echo '<div class="delete"><td><a href="Delete-output.php?id=', $row['making_id'],'"><button type="button">削除</button></a></td></div>';
    echo '</tr>';
    echo "\n";
}

?>

</table>
</div>
</body>
</html>