<?php

require("fn.php");

/*
    "id"
    "vid-group"
    "vid_link"
    "title"
    "channel"
    "channel_link"
    "tick"
    "vid_legnth"
    "views"
    "date"
    "image"

    */

$id = $_GET["id"];
$vid = getVidById($id);

if ($vid["tick"] == "on") {
    $vid["tick"] = "ثبت شده";
}
if ($vid["tick"] == "off") {
    $vid["tick"] = "ثبت نشده";
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
    <link href="css/vid.css" rel="stylesheet">
    <link href="css/general.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <link href="css/sidebar.css" rel="stylesheet">
    <link href="css/view.css" rel="stylesheet">
</head>

<body style="direction: rtl;">
    <?php include("parts/return-btn.php") ?>
    <div class="container">
        <div class="view-div">
            <table>
                <tbody>
                    <tr>
                        <th>تصویر:</th>
                        <td><img src="<?php echo $vid["image"] ?>"></td>
                    </tr>
                    <tr>
                        <th>آیدی ویدیو:</th>
                        <td><?php echo $vid["id"] ?></td>
                    </tr>

                    <tr>
                        <th>گروه ویدیو:</th>
                        <td><?php echo $vid["vid-group"] ?></td>
                    </tr>
                    <tr>
                        <th>لینک ویدیو:</th>
                        <td><a style="text-decoration: none; color: black;" href="<?php echo $vid["vid_link"] ?>"><?php echo $vid["vid_link"] ?></a></td>

                    </tr>
                    <tr>
                        <th>عنوان ویدیو:</th>
                        <td><?php echo $vid["title"] ?></td>

                    </tr>
                    <tr>
                        <th>نام کانال:</th>
                        <td><?php echo $vid["channel"] ?></td>

                    </tr>
                    <tr>
                        <th>لینک کانال:</th>
                        <td><a style="text-decoration: none; color: black;" href="<?php echo $vid["channel_link"] ?>"><?php echo $vid["channel_link"] ?></a></td>

                    </tr>
                    <tr>
                        <th>وضعیت ثبت:</th>
                        <td><?php echo $vid["tick"] ?></td>

                    </tr>

                    <tr>
                        <th>مدت زمان ویدیو:</th>
                        <td><?php echo $vid["vid_legnth"] ?></td>

                    </tr>
                    <tr>
                        <th>مقدار بازدید:</th>
                        <td><?php echo $vid["views"] ?></td>

                    </tr>
                    <tr>
                        <th>زمان آپلود:</th>
                        <td><?php echo $vid["date"] ?></td>

                    </tr>

                </tbody>
            </table>
        </div>
    </div>

</body>

</html>