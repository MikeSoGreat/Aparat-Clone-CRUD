<?php 

// TODO 1.Create
function idGenerator($n) {
    $chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $id = 0;
    $len = strlen($chars);
    for ($i=0; $i < $n; $i++) { 
        $index = rand(0, $len - 1);
        $id .= $chars[$index];
    }
    
    return $id;
}

function enNumberTofa($n) {
    $enNumbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
    $faNumbers = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
    $fa_converted_num =  str_replace($enNumbers, $faNumbers, $n);

    return $fa_converted_num;
}

function faNumberToEn($n) {
    $enNumbers = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
    $faNumbers = ['۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
    $en_converted_num =  str_replace($faNumbers, $enNumbers, $n);

    return $en_converted_num;
}

function imgGetter($files) {
    if (!file_exists("thumbs")) {
        mkdir("thumbs");
    }

    $rand = idGenerator(10);

    mkdir("thumbs/$rand");

    $path = "thumbs/" . $rand . "/" . $files["image"]["full_path"];

    move_uploaded_file($files["image"]["tmp_name"], $path);

    return $path;
}

function createVideoEntry($data) {
    if (!file_get_contents("vidDb.json")) {
        file_put_contents("vidDb.json", "");
    }

    $json = file_get_contents("vidDb.json");
    $arr = json_decode($json, true);
    $arr[] = $data;
    file_put_contents("vidDb.json", json_encode($arr));
}



// TODO 2.Read
function getVids() {
    if (file_exists("vidDb.json")) {
        return json_decode(file_get_contents("vidDb.json"), true);
    }
}

function getVidById($id){
    $vids = getVids();

    foreach ($vids as $vid) {
        if ($vid["id"] == $id) {
            return $vid;
        }
    }
}

// TODO 3.Update
function extractInts($str) {
    $chars = ['ا' ,'الف', 'ب', 'پ', 'ت', 'ث', 'ج', 'چ', 'ح', 'خ', 'د', 'ذ', 'ر', 'ز', 'ژ', 'س', 'ش', 'ص', 'ض', 'ط', 'ظ', 'ع', 'غ', 'ف', 'ق', 'ک', 'گ', 'ل', 'م', 'ن', 'و', 'ه', 'ی', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z', 'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
    return faNumberToEn(trim(str_replace($chars, "", $str)));
}

function extractChars($chars) {
    $n = ['.', 0, 1, 2, 3, 4, 5, 6, 7, 8, 9, '۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹'];
    return trim(str_replace($n, "", $chars));
}

function updateEntry($data, $id) {
    $vids = getVids();

    foreach ($vids as $i => $vid) {
        if ($vid["id"] == $id) {
            $data = array_filter($data);
            $vids[$i] = array_filter($vids[$i]);
            $vids[$i] = $updatedData = array_merge($vids[$i], $data);
        }
    }


    file_put_contents("vidDb.json", json_encode($vids));

    return $updatedData;
}

// TODO 4.Delete

function deleteVid($id) {
    $vids = getVids();

    foreach ($vids as $i => $vid) {
        if ($vid["id"] == $id) {
            unset($vids[$i]);
        }
    }

    file_put_contents("vidDb.json", json_encode($vids));
}