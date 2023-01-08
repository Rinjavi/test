<?php 

mb_internal_encoding("UTF-8");

$pdo = new PDO("mysql:dbname=lesson01;host=localhost;","root","root");

$pdo->exec("insert into registerForm(name,mail,age,comments)values('".$_POST['name']."','".$_POST['mail']."','".$_POST['age']."','".$_POST['comments']."'):");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>お問合せフォームを作る</title>
    <link rel="stylesheet" href="style2.css" type="text/css">
</head>
<body>
    <h1>お問合せフォーム</h1>
    <div class="confirm">
        <p>お問合せ有り難うございます。<br>
    3営業日以内に担当者よりご連絡足上げます。</p>
    </div>
</body>
</html>