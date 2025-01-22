<?php 

require("fn.php");  

$id = $_POST["id"];

deleteVid($id);

header("Location: admin.php");