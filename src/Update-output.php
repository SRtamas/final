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
    <link rel="stylesheet" href="../css/Update-output.css">
    <title>更新</title>
</head>
<body>
    <h1>料理更新</h1>
    <a href="index.php">メニューに戻る</a>
    <hr>
<?php
    $pdo=new PDO($connect, USER, PASS);
    $Cooksql = $pdo->prepare('select * from Cook where cook_id = ?');
    $Cooksql->execute([$_GET['id']]);
    foreach($Cooksql as $row){

        $Makingsql = $pdo->prepare('select * from Making where making_id = ?');
        $Makingsql->execute([$_GET['id']]);
        foreach($Makingsql as $row1){
    

        echo '<form action="Update-result.php" method="post">';
        echo '<input type="hidden" name="cook_id" value="',$row['cook_id'],'"required>';
        echo '<input type="hidden" name="making_id" value="',$row['making_id'],'"required>';

        echo '<table>';
        echo '<tr><th>料理名</th><th>レシピ</th><th>材料</th><th>ジャンル</th></tr>';
        echo '<tr>';
        echo '<td><input type="text" name="cook_mei" value="',$row['cook_mei'],'"required></td>';
        echo '<td><textarea name = "cook_make" required>', $row1["cook_make"], ' </textarea></td>';
        echo '<td><textarea name = "cook_mate" required>', $row1["cook_mate"], ' </textarea></td>';
        echo '<td><select name="genre_mei">';
        $Genresql = $pdo->query('select * from Genre');
        foreach($Genresql as $row2){
            echo '<option value = ', $row2['genre_mei'] ,'>', $row2['genre_mei'] ,'</option>';
        }
        echo '</select></td>';
        echo '</tr>';
        echo '</table>';
        echo '<input type = "submit" value = "更新">';
        echo '</form>';
        }
    }
?>
</body>
</html>