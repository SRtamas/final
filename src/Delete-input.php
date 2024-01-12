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
    <title>削除</title>                                 
</head>
<body>
    <div class="list_field">
    <h1>料理一覧</h1>
    <a href="index.php">メニューに戻る</a>
    <hr>
    <table>
        <tr>
            <th>料理名</th>
            <th>ジャンル</th>
        </tr>
<?php
$pdo = new PDO($connect, USER, PASS);
$sql = $pdo->query('SELECT * FROM cook');
foreach($sql as $row){

    echo '<tr>';
    echo '<input type = "hidden" name = "', $row['cook_id'] ,'"';
    echo '<td>', $row['cook_mei'], '</td>';
    echo '<td>', $row['cook_genre'], '</td>';
    echo '<td><div class="delete"><a href="Delete-output.php?id=', $row['cook_id'],'"><button type="button">削除</button></a></td></div>';
    echo '</tr>';
    echo "\n";
}
?>
</table>
</div>
</body>
</html>