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
    <title>更新</title>
</head>
<body>
<?php
    $pdo=new PDO($connect, USER, PASS);
    echo '<form action="Upadate-result.php">';
    echo '<input type="hidden" name="',$_POST['cook_id'],'"> ';
    echo '<table>';
    echo '<tr><th>料理名</th><th>ジャンル</th></tr>';
    echo '<tr>';
    echo '<div class="td1">';
    echo '<td><input type="text" name="',$_POST["'cook_mei'"], '" value="',$_POST["'cook_mei'"]",'required "></td>';
    echo '<td><select name="', $_POST['cook_genre'],'">';
    echo '<option value="和食">和食</option>';
    echo '<option value="中華">中華</option>';
    echo '<option value="洋食">洋食</option>';
    echo '<option value="イタリア料理">イタリア料理</option>';
    echo '</select></tr>';
    echo '</div>';
    echo '<input type = "submit" value = "更新">';
    echo '</form>'
?>
</body>
</html>