<?php
session_start();
if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];  // Variable To Store Error Message
}
$link = 0;
global $lan;

require_once ("loginpage.php");
require_once ("admin.php");
?>
<!DOCTYPE html>

<html>
    <?php
    if (isset($_GET ['link'])) {
        $link = $_GET ['link'];
    }
    if (isset($_GET ['lan'])) {
        $lan = $_GET ['lan'];
    }
    ?>
<!-- Hier wird die Adminseite erstellt. --> 
    <head>
        <meta charset="utf-8">
        <title>MyWGZimmer-Administrator</title>
        <link rel="stylesheet" type="text/css" href="../css/mywgZimmer.css">
        <link href="../css/blitzer/jquery-ui-1.9.2.custom.css" rel="stylesheet"> 
    </head>
    <body>
        <div class="Header">
            <a href="../index.php?link=home"><img id="logo" src="../images/logo.png" alt="Home" title="Home"></a>
            <a href="logout.php"><img id="logout" src="../images/logout.png" alt="Logout" title="Logout"></a>
        </div>
        <table class="Wrap">
            <tr>
                <td class="leftbox">
                </td>
                <td class="content">
                    <?php
                    if ($link == 'loginpage') {
                        ?><div class="functionalcontent"><?php loginpage(); ?></div><?php
                    } elseif ($link == 'admin') {
                        ?><div class="textcontent"><?php admin(); ?></div><?php
                    }
                    ?>
                </td>
                <td class="rightbox">
                </td>
            </tr>
        </table>
        <div class="footer">
        </div>
    </body>
</html>
