<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <title>ユーザー登録 | 格言リマインダー マイカクゲン</title>
    <meta name="description" content="自分だけの格言をいつも忘れないために。格言リマインダー「マイカクゲン」" />
    <meta name="keywords" content="マイカクゲン,格言,リマインダー" />
</head>

<body>
    <h1>ユーザー登録</h1>

    <form method="POST" action="./signup_complete.php">
        <label>ニックネーム</label>
        <input type="text" name="user_screen_name" value="" />
        <br />

        <label>パスワード</label>
        <input type="password" name="user_password" value="" />
        <br />

        <label>メールアドレス</label>
        <input type="text" name="user_email" value="" />
        <br />

        <input type="submit" value="アカウントを作成">
    </form>
</body>

</html>