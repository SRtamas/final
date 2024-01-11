
<?php
    const SERVER = 'mysql220.phy.lolipop.lan';
    const DBNAME = 'LAA1516810-final';
    const USER = 'LAA1516810';
    const PASS = 'Pass0830';
    $connect = 'mysql:host='. SERVER . ';dbname='. DBNAME . ';charset=utf8';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/ad(css)/ad-list.css">
    <title>料理管理システム</title>                                 
</head>
<body>
    <div class="list_field">
    <h1>商品一覧画面</h1>
    <a href="cook_Insert.php">
        <button type="button" class="re">商品登録</button>
    </a>
    <table align="center" border="1">
        <tr>
            <th>料理番号</th>
            <th>料理名</th>
            <th>ジャンル</th>
        </tr>
<?php
$pdo = new PDO($connect, USER, PASS);
$sql = $pdo->query('SELECT * FROM cook');
foreach($sql as $row){

    echo '<tr>';
    echo '<td>', $row['cook_id'], '</td>';
    echo '<td>', $row['cook_mei'], '</td>';
    echo '<td>', $row['cook_genru'], '</td>';
    echo '<td>';
    echo '<div class="delete"><a href="cook-Delet.php?id=', $row['cook_id'],'"><button type="button">削除</button></a></div>';
    echo '<div class="update"><a href="cook-update.php?id=', $row['cook_id'],'"><button type="button">更新</button></a></div>';
    echo '</td>';
    echo '</tr>';
    echo "\n";
}

?>
</table>
</div>
</body>
</html>