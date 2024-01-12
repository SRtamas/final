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
    <form action = "Insert_result.php" method = "post">
        <table>
        <tr><th>料理名</th><th>ジャンル</th></tr>
            <td><input type = "text" name = "cook_mei" required></td>
            <td><input type = "text" name = "cook_genru" required></td></tr>
        </table>
    <input type="submit" value="登録" class="to">
    </form>
    </div>
</body>
</html>