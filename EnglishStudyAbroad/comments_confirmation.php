<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comments Confirmation Page</title>
    <link rel="stylesheet" href="style.css" type="text/css">
</head>
<body>
    <div class="confirmation">
    <h1>Comments Confirmations Page</h1>
        <p>If your comment is good to go, click the "send" button below, <br>
        if you want to add additional info, click the "Go Back" button below!</p>

        <p>Name: 
            <?php echo $_POST['name']; ?>
        </p>
        <br>
        <p>email: 
            <?php echo $_POST['mail']; ?>
        </p>
        <br>
        <p>tel: 
            <?php echo $_POST['tel']; ?>
        </p>
        <br>
        <p>Comment: <br>
        <?php echo $_POST['comments']; ?>
        </p>
        <br>
        <form action="./index.html">
            <button type="submit" class="btn1" value="Go Back">Go Back</button>
        </form>
        <form action="./insert.php" method="post">
            <input type="submit" class="btn2" value="Send" />
            <input type="hidden" value="<?php echo $_POST['name']; ?>" name="name">
            <input type="hidden" value="<?php echo $_POST['mail']; ?>" name="mail">
            <input type="hidden" value="<?php echo $_POST['tel']; ?>" name="tel">
            <input type="hidden" value="<?php echo $_POST['comments']; ?>" name="comments">
        </form>
    </div>
</body>
</html>