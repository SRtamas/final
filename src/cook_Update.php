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
		<title>料理更新/title>
	</head>
	<body>
        <div class="field">
    <table>
    <hr>
    <a href="index.php">メニューに戻る</a>
    <a href="cook_update.php"><button type="button">更新</button></a>
<?php
$pdo = new PDO($connect, USER, PASS);
$sql = $pdo->query('SELECT * FROM cook');
foreach($sql as $row){

    echo '<tr>';
    echo '<input type = "checkbox" name = "food">';
    echo '<td>', $row['cook_id'], '</td>';
    echo '<td>', $row['cook_mei'], '</td>';
    echo '<td>', $row['cook_genre'], '</td>';
    echo '<td>';
    echo '</td>';
    echo '</tr>';
    echo "\n";
}
?>
</table>
</div>
    </body>
</html>