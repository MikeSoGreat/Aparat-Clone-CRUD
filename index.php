<?php

if (isset($_POST["guest"])) {
    header("Location: guest.php");
}

if (isset($_POST["admin"])) {
    header("Location: admin.php");
}

?>

<!DOCTYPE html>
<html dir="rtl" lang="fa-IR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aparat Clone</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Vazirmatn:wght@100..900&display=swap" rel="stylesheet">
    <link href="css/general.css" rel="stylesheet">
    <link href="css/entry_page.css" rel="stylesheet">
</head>

<body style="direction: rtl;">
    <div class="main-div">
        <img class="logo" src="icons/logo-aparat.svg" alt="">
        <form action="" method="POST">
            <div class="space">
                <button class="btn admin" name="admin">ورود ادمین</button>
                <button class="btn guest" name="guest">ورود</button>
            </div>
        </form>
    </div>
</body>

</html>