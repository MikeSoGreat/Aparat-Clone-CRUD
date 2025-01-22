<?php
require("fn.php");

$id = $_GET["id"];
$vid = getVidById($id);

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if ($_POST["title"] && $_POST["channel_name"] && $_POST["views"] && $_POST["date"] && $_POST["vid_link"] && $_POST["channel_link"] && $_POST["vid_legnth"]) {
        $_POST["title"] = trim(htmlspecialchars($_POST["title"]));
        $_POST["vid_link"] = trim(htmlspecialchars($_POST["vid_link"]));
        $_POST["channel_name"] = trim(htmlspecialchars($_POST["channel_name"]));
        $_POST["channel_link"] = trim(htmlspecialchars($_POST["channel_link"]));
        $_POST["vid_legnth"] = trim(htmlspecialchars($_POST["vid_legnth"]));
        $_POST["views"] = trim(htmlspecialchars($_POST["views"]));
        $_POST["view-var"] = trim(htmlspecialchars($_POST["view-var"]));
        $_POST["date"] = trim(htmlspecialchars($_POST["date"]));
        $_POST["date-var"] = trim(htmlspecialchars($_POST["date-var"]));
        
    
        $views = enNumberTofa($_POST["views"]) . " " .  $_POST["view-var"];
        
        $date = enNumberTofa($_POST["date"]) . " " . $_POST["date-var"];
        
        if ($_FILES["image"]["tmp_name"]) {
            $image = $_POST["image"] = imgGetter($_FILES);
        }
        if (!$_FILES["image"]["tmp_name"]) {
            $image = $vid["image"];
        }
        

        
        $vid_data = [
            "id" => $_POST["id"],
            "vid-group" => $_POST["vid-group"],
            "vid_link" => $_POST["vid_link"],
            "title" => enNumberTofa($_POST["title"]),
            "channel" => $_POST["channel_name"],
            "channel_link" => $_POST["channel_link"],
            "tick" => $_POST["check"] ?? "off",
            "vid_legnth" => enNumberTofa($_POST["vid_legnth"]),
            "views" => $views,
            "date" => $date,
            "image" => $image,
        ];


        updateEntry($vid_data, $_GET["id"]);
        $success = '<div class="success fadeOut">
                <p>ویدیو به روزرسانی شد.</p>
                    </div>';

        $_POST = null;
        $_FILES = null;

        $vid = getVidById($_GET["id"]);
        

    }
    
}

if ($vid["vid-group"] == "ویژه های آپارات") {
    $special_selected = "selected";
}
elseif ($vid["vid-group"] == "آپارات اسپرت") {
    $sport_selected = "selected";
}
elseif ($vid["vid-group"] == "آپارات موزیک") {
    $music_selected = "selected";
}
elseif ($vid["vid-group"] == "جذاب ترین ها") {
    $hot_selected = "selected";
}

if ($vid["tick"] == "on") {
    $checked = "checked";
}

$viewsN = extractInts($vid["views"]);
$viewsVar = extractChars($vid["views"]);

if ($viewsVar == "بازدید") {
    $noThou_selected = "selected";
}
elseif ($viewsVar == "هزار بازدید") {
    $thou_selected = "selected";
}
elseif ($viewsVar == "میلیون بازدید") {
    $mil_selected = "selected";
}
elseif ($viewsVar == "میلیارد بازدید") {
    $bil_selected = "selected";
}

$dateVar = extractChars($vid["date"]);

if ($dateVar == "ثانیه پیش") {
    $s_selected = "selected";
}
elseif ($dateVar == "دقیقه پیش") {
    $min_selected = "selected";
}
elseif ($dateVar == "ساعت پیش") {
    $h_selected = "selected";
}
elseif ($dateVar == "روز پیش") {
    $d_selected = "selected";
}
elseif ($dateVar == "هفته پیش") {
    $w_selected = "selected";
}
elseif ($dateVar == "ماه پیش") {
    $m_selected = "selected";
}
elseif ($dateVar == "سال پیش") {
    $y_selected = "selected";
}


?>


<!DOCTYPE html>
<html lang="fa-IR"> <!-- dir="rtl" -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aparat Clone</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Vazirmatn:wght@100..900&display=swap" rel="stylesheet">
    <link href="vid.css" rel="stylesheet">
    <link href="css/general.css" rel="stylesheet">
    <link href="css/header.css" rel="stylesheet">
    <link href="css/sidebar.css" rel="stylesheet">
    <link href="css/create.css" rel="stylesheet">
</head>

<body style="direction: rtl;"> <!-- style="direction: rtl;"  -->
    <?php include("parts/return-btn.php") ?>
    <div class="container">
        <div class="form-header">
            <h3>به روزرسانی داده های ویدیو</h3>
            <?php echo $success ?? null ?>
        </div>
        <form class="card" action="" method="POST" enctype="multipart/form-data">
            <input value="<?php echo $_GET["id"] ?>" type="hidden" name="id">
            <select class="vid-group-drop" name="vid-group">
                <option <?php echo $special_selected ?? null ?>>ویژه های آپارات</option>
                <option <?php echo $sport_selected ?? null ?>>آپارات اسپرت</option>
                <option <?php echo $music_selected ?? null ?>>آپارات موزیک</option>
                <option <?php echo $hot_selected ?? null ?>>جذاب ترین ها</option>
            </select>
            <input class="s-box " type="text" value="<?php echo $vid["title"] ?>" name="title" placeholder="عنوان ویدیو" required oninvalid="this.setCustomValidity('لطفا عنوان ویدیو را وارد کنید')" oninput="this.setCustomValidity('')">
            <input class="s-box " type="url" value="<?php echo $vid["vid_link"] ?>" name="vid_link" placeholder="لینک ویدیو" required oninvalid="this.setCustomValidity('لطفا لینک ویدیو را وارد کنید')" oninput="this.setCustomValidity('')">
            <input class="s-box " type="text" value="<?php echo $vid["channel"] ?>" name="channel_name" placeholder="اسم کانال" required oninvalid="this.setCustomValidity('لطفا اسم کانال را وارد کنید')" oninput="this.setCustomValidity('')">
            <input class="s-box " type="url" name="channel_link" value="<?php echo $vid["channel_link"] ?>" placeholder="لینک کانال" required oninvalid="this.setCustomValidity('لطفا لینک کانال را وارد کنید')" oninput="this.setCustomValidity('')">
            <div class="verifed">
                <input <?php echo $checked ?? null ?> name="check" type="checkbox">
                <span class="text">آیا کانال ثبت شده است؟ <img class="tick" src="icons/green-tick.svg">
                </span>
            </div>
            <div class="view_count">
                <p>مدت زمان ویدیو</p>
                <input class="s-box s-box-vid-legnth" value="<?php echo faNumberToEn($vid["vid_legnth"]) ?>" pattern="([0-9]{2}:[0-9]{2})|([0-9]{1}:[0-9]{2}:[0-9]{2})|([0-9]{2}:[0-9]{2}:[0-9]{2})" type="text" step="any" name="vid_legnth" placeholder="00:00:00" required oninvalid="this.setCustomValidity('لطفا مقدار مدت زمان را به صورت 00:00:00 وارد کنید')" oninput="this.setCustomValidity('')">
            </div>
            <div class="view_count">
                <p>مقدار بازدید ویدیو؟</p>
                <input class="s-box s-box-view" type="number" value="<?php echo $viewsN ?>" step="any" name="views" placeholder="0" required oninvalid="this.setCustomValidity('لطفا مقدار عددی بازدید را وارد کنید')" oninput="this.setCustomValidity('')">
                <select name="view-var">
                    <option <?php echo $noThou_selected ?? null ?>>بازدید</option>
                    <option <?php echo $thou_selected ?? null ?>>هزار بازدید</option>
                    <option <?php echo $mil_selected ?? null ?>>میلیون بازدید</option>
                    <option <?php echo $bil_selected ?? null ?>>میلیارد بازدید</option>
                </select>
            </div>
            <div class="uploaded_at">
                <p>چه زمانی آپلود شد؟</p>
                <input class="s-box s-box-date" value="<?php echo extractInts($vid["date"]) ?>" type="number" step="any" name="date" placeholder="0" required oninvalid="this.setCustomValidity('لطفا زمان عددی آپلود ویدیو را وارد کنید')" oninput="this.setCustomValidity('')">
                <select name="date-var">
                    <option <?php echo $s_selected ?? null ?>>ثانیه پیش</option>
                    <option <?php echo $min_selected ?? null ?>>دقیقه پیش</option>
                    <option <?php echo $h_selected ?? null ?>>ساعت پیش</option>
                    <option <?php echo $d_selected ?? null ?>>روز پیش</option>
                    <option <?php echo $w_selected ?? null ?>>هفته پیش</option>
                    <option <?php echo $m_selected ?? null ?>>ماه پیش</option>
                    <option <?php echo $y_selected ?? null ?>>سال پیش</option>
                </select>
            </div>
            <div class="file">
                <div class="upload">
                    <Label class="file-label" for="file-input">
                        <img src="icons/upload-arrow.svg">
                        آپلود تصویر ویدیو
                    </Label>
                    <div class="box">
                    </div>
                    <input class="choose" id="file-input" name="image" type="file" oninvalid="this.setCustomValidity('لطفا تصویر ویدیو را آپلود کنید')" oninput="this.setCustomValidity('')">
                </div>
            </div>
            <input class="submit" type="submit" value="ثبت ویدیو">
        </form>
    </div>
</body>

</html>