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
        <table>
        <tr><th>料理名</th><th>ジャンル</th></tr>
            <td><input type = "text" name = "cook_mei" required></td>
            <td><select name='cook_genre'>
            <option value='和食'>和食</option>
            <option value='中華'>中華</option>
            <option value='洋食'>洋食</option>
            <option value='イタリア料理'>中華</option>
            </select></tr>
        </table>
    <input type="submit" value="登録" class="to">
    </form>
    </div>
</body>
</html>