<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4eachblog　掲示板</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>

    <?php
        mb_internal_encoding('utf-8');
        $pdo = new PDO("mysql:dbname=lesson01;host=localhost;", "root", "root");
        $stmt = $pdo->query("select*from 4each_keijiban");
    ?> 

    <header>
        <img src="./4eachblog_logo.jpg" alt="4each logo">
        <nav>
            <a href="">トップ</a> 
            <a href="">プロフィール</a> 
            <a href="">４eachについて</a> 
            <a href="">お問合せ</a>
            <a href="">その他</a> 
        </nav>
    </header>

    <div class="container">
        <div class="leftside">
            <h1>プログラミングに役立つ掲示板</h1>

            <form action="./insert.php" method="post">
                <h3>入力フォーム</h3>
                <label>ハンドルネーム</label>
                <br>
                <input type="text" class="text" name="handlename">
                <br>
                <label>タイトル</label>
                <br>
                <input type="text" name="title" class="text">
                <br>
                <label>コメント</label>
                <br>
                <textarea class="text" name="comments" cols="35" rows="7"></textarea>
                <br>
                <button type="submit">送信する</button>
            </form>

            <?php 

            foreach($stmt as $row) {

            echo "<div class='showsTitle'>";
            echo "<h3>".$row['title']."</h3>";
                echo "<div class='content'>";
                echo $row['comments'];
                    echo "<div class='handlename'>Posted by".$row['handlename']."</div>";
                echo "</div>";
            echo "</div>";

            }
            ?> 
        </div>
        <div class="rightside">
            <h4>人気の記事</h4>
            <ul>
                <li>PHPオススメ本</li>
                <li>PHP Myadminの使い方</li>
                <li>今人気のエディタTOP5</li>
                <li>HTMLの基礎</li>
            </ul>
            <h4>オススメリンク</h4>
            <ul>
                <li>インターノウス株式会社</li>
                <li>MAMPのダウンロード</li>
                <li>Eclipseのダウンロード</li>
                <li>Bracketsのダウンロード</li>
            </ul>
            <h4>カテゴリ</h4>
            <ul>
                <li>HTML</li>
                <li>PHP</li>
                <li>MySQL</li>
                <li>JavaScript</li>
            </ul>
        </div>
    </div>

    <footer>
        <p>Internous By Rintaro Ishiguro</p>
    </footer>
</body>
</html>
