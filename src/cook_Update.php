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
		<title>料理更新</title>
	</head>
	<body>
        <h1>料理更新</h1>
        <a href="index.php">メニューに戻る</a>
        <hr>
    <div class="field">
    <table>
<?php
$pdo = new PDO($connect, USER, PASS);
$sql = $pdo->query('SELECT * FROM cook');
echo '<form action="cook_update.php" method="post">';
foreach($sql as $row){

    echo '<tr>';
    echo '<td><input type = "radio" name = "food" value ="', $row['cook_id'] ,'">', $row['cook_id'] ,'</td>';
    echo '<td>', $row['cook_mei'], '</td>';
    echo '<td>', $row['cook_genre'], '</td>';
    echo '</tr>';
    echo "\n";
}
echo '<input type="submit" value="更新">';
echo '</form>';
?>
</table>
</div>
    </body>
</html>