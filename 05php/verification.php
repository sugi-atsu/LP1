<?php
$name = $_POST['name'];
$hurigana = $_POST['hurigana'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$date = $_POST['date'];
$storename = $_POST['storename'];
$request = $_POST['request'];

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/83b9443572.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="../04img/01.favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../02css/reset.css">
    <link rel="stylesheet" href="../02css/inputForm_style.css">
    <title>iCure鍼灸整骨院</title>
</head>
<body>
<div class="verification_container">
        <img src="../04img/01firstview/logo.png" alt="">
        <p class="title">ご予約受付</p>
        <ul class="flow">
            <li id="num1">1.入力</li>
            <p class="nexticon"></p>
            <li id="num2">2.確認</li>
            <div class="nexticon"></div>
            <li id="num3">3.完了</li>
        </ul>
        <ul class="inputItems">
            <li>
                <p class="title">お名前</p>
                <p class="text"><?php echo $name; ?></p>
            </li>
            <li>
                <p class="title">ふりがな</p>
                <p class="text"><?php echo $hurigana; ?></p>
            </li>
            <li>
                <p class="title">電話番号</p>
                <p class="text"><?php echo $tel; ?></p>
            </li>
            <li>
                <p class="title">メールアドレス</p>
                <p class="text"><?php echo $email; ?></p>
            </li>
            <li>
                <p class="title">ご来院希望日</p>
                <p class="text"><?php echo $date; ?></p>
            </li>
            <li>
                <p class="title">ご希望院名</p>
                <p class="text"><?php echo $storename; ?></p>
            </li>
            <li class="request">
                <p class="title">ご要望など</p>
                <p class="text"><?php echo $request; ?></p>
            </li>
        </ul>
        <div class="submit"><a href="../01html/thanks.html">確定する</a></div>
        <div class="goback"><a href="../01html/input.html">戻る</a></div>
    </div>
</body>
</html>