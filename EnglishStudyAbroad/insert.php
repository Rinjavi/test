<?php

mb_internal_encoding("utf-8");

$pdo = new PDO("mysql:dbname=business;host=localhost;","root","root");

$pdo->exec("insert into englishBusiness(name,mail,tel,comments)
values('".$_POST['name']."','".$_POST['mail']."','".$_POST['tel']."','".$_POST['comments']."');");

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sending the Information into Database</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <h1>Thank you so much for contacting us!</h1>
    <div class="confirmation">
        <p>we will get in touch with you within 3 ~ 5 business days. <br>
    I appreciate your patient...</p>
    </div>
</body>
</html>

