<?php

    $ISTGeschlecht = '';
    if (isset($_POST["geschlecht"])) {
        $ISTGeschlecht = $_POST["geschlecht"];
    }
header("location: ../index.php?link=inserieren");
?>
