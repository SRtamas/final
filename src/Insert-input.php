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
    <link rel="stylesheet" href="../css/ad(css)/ad-registration.css">
    <title>登録</title>
</head>
<body>
    <div class="field">
    <a href="index.php">メニューに戻る</a>
    <hr>
    <form action = "Insert-output.php" method = "post">
        <table  align="center" border="1">
        <tr><th>料理名</th><th>ジャンル</th><th>レシピ</th><th>材料</th</tr>
            <tr><td><input type = "text" name = "cook_mei" required></td>
            <td><select name='genre_mei'>
            <?php
                    $pdo = new PDO($connect, USER, PASS);
                    $sql = $pdo->query('SELECT * FROM Genre');
                    foreach($sql as $row){
                        echo '<option value = ', $row['genre_mei'] ,'>', $row['genre_mei'] ,'</option>';
                    }
            ?>
            </select></td>
            <td><textarea name = "cook_make" required></textarea></td>
            <td><textarea name = "cook_mate" required></textarea></td></tr>
        </table>
        <div name="link"><a href = "genre-input.php">ジャンルを追加</a></div>

       
    <input type="submit" value="登録" class="to">
    </form>
    </div>
</body>
</html>