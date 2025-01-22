<?php
require("fn.php");

$vids = getVids();

include("parts/search.php");

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
</head>

<body style="direction: rtl;">
    <?php include("parts/header_admin.php") ?>

    <?php include("parts/sidebar.php") ?>

    <div class="vid-grid-top">
        <p class="special">ویژه های آپارات</p>
        <?php if ($vids) : ?>
            <?php foreach ($vids as $vid) : ?>
                <?php if ($vid["vid-group"] === "ویژه های آپارات") : ?>
                    <div class="vid">

                        <div class="pic-div">
                            <?php include("parts/dropdownCog.php") ?>
                            <a style="text-decoration: none;" href="<?php echo $vid["vid_link"] ?>">
                                <img class="pic" src="<?php echo $vid["image"] ?>">
                                <p class="time"><?php echo $vid["vid_legnth"] ?></p>
                            </a>
                        </div>


                        <a style="text-decoration: none;" href="<?php echo $vid["vid_link"] ?>">
                            <p class="title"><?php echo $vid["title"] ?></p>
                        </a>

                        <a style="text-decoration: none;" href="<?php echo $vid["channel_link"] ?>">
                            <p class="name"><?php echo $vid["channel"] ?>
                                <?php if ($vid["tick"] == "on") : ?>
                                    <img class="tick" src="icons/green-tick.svg">
                                <?php endif ?>
                            </p>
                        </a>

                        <p class="info"><?php echo $vid["views"] ?> . <?php echo $vid["date"] ?></p>
                    </div>
                <?php endif ?>
            <?php endforeach ?>
        <?php endif ?>

        <div class="line">

        </div>
    </div>

    <div class="vid-grid-sport">
        <p class="special">
            <a style="text-decoration: none;" href="https://www.aparatsport.com/">آپارات اسپرت</a>
        </p>

        <?php if ($vids) : ?>
            <?php foreach ($vids as $vid) : ?>
                <?php if ($vid["vid-group"] === "آپارات اسپرت") : ?>
                    <div class="vid">

                        <div class="pic-div">
                            <?php include("parts/dropdownCog.php") ?>
                            <a style="text-decoration: none;" href="<?php echo $vid["vid_link"] ?>">
                                <img class="pic" src="<?php echo $vid["image"] ?>">
                                <p class="time"><?php echo $vid["vid_legnth"] ?></p>
                            </a>
                        </div>


                        <a style="text-decoration: none;" href="<?php echo $vid["vid_link"] ?>">
                            <p class="title"><?php echo $vid["title"] ?></p>
                        </a>

                        <a style="text-decoration: none;" href="<?php echo $vid["channel_link"] ?>">
                            <p class="name"><?php echo $vid["channel"] ?>
                                <?php if ($vid["tick"] == "on") : ?>
                                    <img class="tick" src="icons/green-tick.svg">
                                <?php endif ?>
                            </p>
                        </a>

                        <p class="info"><?php echo $vid["views"] ?> . <?php echo $vid["date"] ?></p>
                    </div>
                <?php endif ?>
            <?php endforeach ?>
        <?php endif ?>

        <div class="line">

        </div>
    </div>

    <div class="vid-grid-music">
        <p class="special">
            <a style="text-decoration: none;" href="https://www.aparat.com/music">آپارات موزیک</a>
        </p>
        <?php if ($vids) : ?>
            <?php foreach ($vids as $vid) : ?>
                <?php if ($vid["vid-group"] === "آپارات موزیک") : ?>
                    <div class="vid">

                        <div class="pic-div">
                            <?php include("parts/dropdownCog.php") ?>
                            <a style="text-decoration: none;" href="<?php echo $vid["vid_link"] ?>">
                                <img class="pic" src="<?php echo $vid["image"] ?>">
                                <p class="time"><?php echo $vid["vid_legnth"] ?></p>
                            </a>
                        </div>


                        <a style="text-decoration: none;" href="<?php echo $vid["vid_link"] ?>">
                            <p class="title"><?php echo $vid["title"] ?></p>
                        </a>

                        <a style="text-decoration: none;" href="<?php echo $vid["channel_link"] ?>">
                            <p class="name"><?php echo $vid["channel"] ?>
                                <?php if ($vid["tick"] == "on") : ?>
                                    <img class="tick" src="icons/green-tick.svg">
                                <?php endif ?>
                            </p>
                        </a>

                        <p class="info"><?php echo $vid["views"] ?> . <?php echo $vid["date"] ?></p>
                    </div>
                <?php endif ?>
            <?php endforeach ?>
        <?php endif ?>

        <div class="line">

        </div>

    </div>

    <div class="vid-grid-suggest">
        <p class="special">جذاب ترین ها</p>
        <?php if ($vids) : ?>
            <?php foreach ($vids as $vid) : ?>
                <?php if ($vid["vid-group"] === "جذاب ترین ها") : ?>
                    <div class="vid">

                        <div class="pic-div">
                            <?php include("parts/dropdownCog.php") ?>
                            <a style="text-decoration: none;" href="<?php echo $vid["vid_link"] ?>">
                                <img class="pic" src="<?php echo $vid["image"] ?>">
                                <p class="time"><?php echo $vid["vid_legnth"] ?></p>
                            </a>
                        </div>


                        <a style="text-decoration: none;" href="<?php echo $vid["vid_link"] ?>">
                            <p class="title"><?php echo $vid["title"] ?></p>
                        </a>

                        <a style="text-decoration: none;" href="<?php echo $vid["channel_link"] ?>">
                            <p class="name"><?php echo $vid["channel"] ?>
                                <?php if ($vid["tick"] == "on") : ?>
                                    <img class="tick" src="icons/green-tick.svg">
                                <?php endif ?>
                            </p>
                        </a>

                        <p class="info"><?php echo $vid["views"] ?> . <?php echo $vid["date"] ?></p>
                    </div>
                <?php endif ?>
            <?php endforeach ?>
        <?php endif ?>

        <div class="line">

        </div>

    </div>



</body>

</html>