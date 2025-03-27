<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <http-equiv="X-UA-Compatible" content="IE=edge"></http-equiv>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/sanitize.css">
        <link rel="stylesheet" href="css/common.css">
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="css/sanitize.css">
        <link rel="stylesheet" href="css/common.css">
        <link rel="stylesheet" href="css/index.css">

</head>

<body>
<!--ヘッダー-->
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/php02/index.php">
                World Clock
            </a>
        </div>
    </header>
    <main>
<!--ラジオボタン-->
        <div class="search-form__content">
            <div class="search-form__content">
                <h2>日本と世界の時間を比較</h2>
            </div>
<!--セレクトボックス-->
            <form class="search-form" action="result.php" method="get">
                <div class="search-form__item">
                    <select class="search-form__item-select" name="city">
                        <option value="シドニー">シドニー</option>
                        <option value="上海">上海</option>
                        <option value="モスクワ">モスクワ</option>
                        <option value="ロンドン">ロンドン</option>
                        <option value="ヨハネスブルグ">ヨハネスブルグ</option>
                        <option value="ニューヨーク">ニューヨーク</option>
                    </select>
                </div>
<!--formタグで作成したフォームボタン-->
                <div class="search-form__button">
                    <button class="search-form__button-submit" type="submit">検索</button>
                </div>
            </form>
    </main>
    <form action="detail.html" method="get">
        <select name="select">
            <option value="太郎">太郎</option>
            <option value="次郎">次郎</option>
            <option value="三郎">三郎</option>
        </select>
    </form>
</body>

</html>