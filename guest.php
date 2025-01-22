<?php
require("fn.php");

$vids = getVids();

include("parts/search.php");

?>


<?php include("parts/htmlHeader.php") ?>

<?php include("parts/header_Guest.php") ?>


<?php include("parts/sidebar.php") ?>

<div class="vid-grid-top">
    <p class="special">ویژه های آپارات</p>
    <?php if ($vids) : ?>
        <?php foreach ($vids as $vid) : ?>
            <?php if ($vid["vid-group"] === "ویژه های آپارات") : ?>
                <div class="vid">

                    <div class="pic-div">
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

                    <a style="text-decoration: none;" href="<?php echo $vid["vid_link"] ?>">
                        <div class="pic-div">
                            <img class="pic" src="<?php echo $vid["image"] ?>">
                            <p class="time"><?php echo $vid["vid_legnth"] ?></p>
                        </div>
                    </a>

                    <a style="text-decoration: none;" href="<?php echo $vid["vid_link"] ?>">
                        <p class="title"><?php echo $vid["title"] ?></p>
                    </a>

                    <a style="text-decoration: none;" href="<?php echo $vid["channel_link"] ?>">
                        <p class="name"><?php echo $vid["channel"] ?>
                            <?php if ($vid["tick"]) : ?>
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

                    <a style="text-decoration: none;" href="<?php echo $vid["vid_link"] ?>">
                        <div class="pic-div">
                            <img class="pic" src="<?php echo $vid["image"] ?>">
                            <p class="time"><?php echo $vid["vid_legnth"] ?></p>
                        </div>
                    </a>

                    <a style="text-decoration: none;" href="<?php echo $vid["vid_link"] ?>">
                        <p class="title"><?php echo $vid["title"] ?></p>
                    </a>

                    <a style="text-decoration: none;" href="<?php echo $vid["channel_link"] ?>">
                        <p class="name"><?php echo $vid["channel"] ?>
                            <?php if ($vid["tick"]) : ?>
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

                    <a style="text-decoration: none;" href="<?php echo $vid["vid_link"] ?>">
                        <div class="pic-div">
                            <img class="pic" src="<?php echo $vid["image"] ?>">
                            <p class="time"><?php echo $vid["vid_legnth"] ?></p>
                        </div>
                    </a>

                    <a style="text-decoration: none;" href="<?php echo $vid["vid_link"] ?>">
                        <p class="title"><?php echo $vid["title"] ?></p>
                    </a>

                    <a style="text-decoration: none;" href="<?php echo $vid["channel_link"] ?>">
                        <p class="name"><?php echo $vid["channel"] ?>
                            <?php if ($vid["tick"]) : ?>
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



<?php include("parts/htmlFooter.php") ?>