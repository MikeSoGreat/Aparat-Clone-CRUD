<?php

if (isset($_POST["search"])) {
    $_POST["search"] = trim(htmlspecialchars($_POST["search"]));
    header('Location: https://www.aparat.com/search/' . $_POST["search"]);
    $_POST["search"] = null;
}