<?php

//session_start();
// fotos
$insFotoName = "";
$insFotoImage = "";
$insFotoType = "";

if (isset($_POST ["btnfoto1"])) {
    $insFotoName = mysql_real_escape_string($_FILES ["foto1"]["Name"]);
    $insFotoImage = mysql_real_escape_string(file_get_contents($_FILES ["foto1"]["Image"]));
    $insFotoType = mysql_real_escape_string($_FILES ["foto1"]["Type"]);
} elseif (isset($_POST ["btnfoto2"])) {
    $insFotoName = mysql_real_escape_string($_FILES ["foto2"]["Name"]);
    $insFotoImage = mysql_real_escape_string(file_get_contents($_FILES ["foto2"]["Image"]));
    $insFotoType = mysql_real_escape_string($_FILES ["foto2"]["Type"]);
}else {
    $insFotoName = mysql_real_escape_string($_FILES ["foto3"]["Name"]);
    $insFotoImage = mysql_real_escape_string(file_get_contents($_FILES ["foto3"]["Image"]));
    $insFotoType = mysql_real_escape_string($_FILES ["foto3"]["Type"]);
}

$what = (isset($_POST ["what"])) ? $_POST ["what"] : "";

function upload(){
    $user_name = "root";
    $password = "root";
    $database = "mywgzimmerdb";
    $server = "localhost";

    $db_handle = mysql_connect($server, $user_name, $password);
    $db_found = mysql_select_db($database, $db_handle);

    $query = "INSERT INTO `tblimages` (`Name`, `Image`, `Type`) VALUES 		
			 ('$insFotoName', '$insFotoImage', '$insFotoType');";

    $result = mysql_query($query) or die("Ungültige Abfrage");
    
}

if ($what == "upload") {
    upload();
    echo "../request/showImage.php?id=" . mysql_insert_id();
    mysql_close($db_handle);
}











