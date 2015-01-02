<?php
session_start();

$link = 0;
global $lan;

require_once ("Content/Inserieren.php");
require_once ("Content/Home.php");
require_once ("Content/Help.php");
require_once ("Content/AGB.php");
require_once ("Content/Suchen.php");
require_once ("Content/Language.php");
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

    <head>
        <meta charset="utf-8">
        <title>MyWGZimmer</title>
        <link rel="stylesheet" type="text/css" href="css/mywgZimmer.css">
        <script src="js/jquery-1.8.3.js"></script>
        <script src="js/jquery-ui-1.9.2.custom.js"></script>
        <link href="css/blitzer/jquery-ui-1.9.2.custom.css" rel="stylesheet"> 
        <script type="text/javascript" src="request/functions.js"></script>    
        <script type="text/javascript">
            $(function () {
                $("#btnweiter1").click(function () {
                    InserierenTab1Kontrolle();
                });
                $("#btnweiter2").click(function () {
                    InserierenTab2Kontrolle();
                });
                $("#btnweiter3").click(function () {
                    InserierenTab3Kontrolle();
                });
                $("#btnweiter4").click(function () {
                    InserierenTab4Kontrolle();
                });
                $("#btnweiter5").click(function () {
                    InserierenTab5Kontrolle();
                });
                $("#btnzuruck2").click(function () {
                    ZuruckbtTab2();
                });
                $("#btnzuruck3").click(function () {
                    ZuruckbtTab3();
                });
                $("#btnzuruck4").click(function () {
                    ZuruckbtTab4();
                });
                $("#btnzuruck5").click(function () {
                    ZuruckbtTab5();
                });
                $("#btnFiltern").click(function () {
                    filtern();
                });
                $("#btnFilterAus").click(function () {
                    filterAus();
                });
                $("#btnfoto1").click(function () {
                    Foto1();
                });
                $("#btnfoto2").click(function () {
                    Foto1();
                });
                $("#btnfoto3").click(function () {
                    Foto1();
                });
                $("#tabs").tabs();
                $("#radio").buttonset();
                $("#insMitAbDatum").datepicker({dateFormat: "dd.mm.yy"});
                $("#insMitBisDatum").datepicker({dateFormat: "dd.mm.yy"});
                $("#SUCHAbDatum").datepicker({dateFormat: "dd.mm.yy"});
                $("#SUCHBisDatum").datepicker({dateFormat: "dd.mm.yy"});
                $("#btnweiter1").button();
                $("#btnweiter2").button();
                $("#btnzuruck2").button();
                $("#btnweiter3").button();
                $("#btnzuruck3").button();
                $("#btnweiter4").button();
                $("#btnzuruck4").button();
                $("#btnweiter5").button();
                $("#btnzuruck5").button();

                $("#btnMitbewohsuch").button();
                $("#btnInserataufgeben").button();
                $("#btnFiltern").button();
                $("#btnFilterAus").button();
                /*$("#tabs").tabs("enable", 0);
                $("#tabs").tabs("disable", 1);
                $("#tabs").tabs("disable", 2);
                $("#tabs").tabs("disable", 3);
                $("#tabs").tabs("disable", 4);*/
            });
        </script>
    </head>
    <body>
        <div class="Header">
            <a href="?link=home" class="link"><img id="logo" src="images/logo.png" alt="Home" title="Home"></a>
            <a href="?link=hilfe" class="link"><img id="help" src="images/help.png" alt="Hilfe" title="Hilfe"></a>
            <a href="?link=agb" class="link"><img id="agb" src="images/agb.png" alt="AGB" title="AGB"></a>
        </div>
    </div>
    <table class="Wrap">
        <tr>
            <td class="leftbox">
                <?php language(); ?>
                <a href="?link=suchen"><img class="function" src="images/suche.png" alt="WG-Zimmer-suchen" title="WG-Zimmer suchen"></a>
                <a href="?link=inserieren"><img class="function" src="images/inserat.png" alt="Gratis-WG-Zimmer-inserieren" title="Gratis WG-Zimmer inserieren"></a>
            </td>
            <td class="content">
                <?php
                if ($link == 'home') {
                    ?><div class="textcontent"><?php home(); ?></div><?php
                } elseif ($link == 'suchen') {
                    ?><div class="textcontent"><?php suchen(); ?></div><?php
                } elseif ($link == 'inserieren') {
                    ?><div class="funtionalcontent"><?php inserieren(); ?></div><?php
                    } elseif ($link == 'hilfe') {
                        ?><div class="textcontent"><?php hilfe(); ?></div><?php
                    } elseif ($link == 'agb') {
                        ?><div class="textcontent"><?php agb(); ?></div><?php
                    } elseif ($link == 'danke') {
                        ?><div class="textcontent"><?php danke(); ?></div><?php
                    }
                    ?>
            </td>
            <td class="rightbox">
                <a href="https://chrome.google.com/webstore/detail/adblock-plus/cfhdojbkjhnklbpkdaibdccddilifddb"><img id="ad" src="images/banner.gif" title="Werbung"></a>
            </td>
        </tr>
    </table>
</body>
</html>
