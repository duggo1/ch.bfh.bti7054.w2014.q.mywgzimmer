<?php
session_start();

$link = 0;
global $lan;

require_once ("Content/Inserieren.php");
require_once ("Content/Home.php");
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
        <link rel="stylesheet" type="text/css" href="mywgZimmer.css">
        <script src="js/jquery-1.8.3.js"></script>
        <script src="js/jquery-ui-1.9.2.custom.js"></script>
        <link href="css/blitzer/jquery-ui-1.9.2.custom.css" rel="stylesheet"> 
        <script type="text/javascript" src="request/functions.js"></script>    
        <script type="text/javascript">
            $(function () {


                $("#btnweiter1").click(function (event) {
                    InserierenTab1();
                });

                $("#btnweiter2").click(function (event) {
                    InserierenTab2();
                });
                $("#btnweiter3").click(function (event) {
                    InserierenTab3();
                });
                $("#btnweiter4").click(function (event) {
                    InserierenTab4();
                });
                $("#btnweiter5").click(function (event) {
                    InserierenTab5();
                });

                $("#btnzuruck2").click(function (event) {
                    ZuruckbtTab2();
                });
                $("#btnzuruck3").click(function (event) {
                    ZuruckbtTab3();
                });
                $("#btnzuruck4").click(function (event) {
                    ZuruckbtTab4();
                });
                $("#btnzuruck5").click(function (event) {
                    ZuruckbtTab5();
                });
                //$("#table").droppable();
                //$("#table").resizable();
                $("#tabs").tabs();
                $("#radio").buttonset();

                $("#accordion").accordion();


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
                $("#btnSuchen").button();
                $("#btnFilterAus").button();


//                 $( "#tabs" ).tabs( "disable", 1 );
//                  $( "#tabs" ).tabs( "disable", 2 );
//                  $( "#tabs" ).tabs( "disable", 3 );
//                  $( "#tabs" ).tabs( "disable", 4 );
                //$( "#tabs" ).tabs( "disable", 5 );


                //  $("#autocomplete").autocomplete({
                //source: availableTags
                // });
                // $("#number").selectmenu();

            });
        </script>
    </head>
    <body>
        <div class="Header">
            <a href="?link=home"><img id="logo" src="logo.png" alt="Home" title="Home"></a>
            <a href="?link=hilfe"><img id="help" src="help.png" alt="Hilfe" title="Hilfe"></a>
            <a href="?link=agb"><img id="agb" src="agb.png" alt="AGB" title="AGB"></a>
            </div>
        </div>
        <table class="Wrap">
            <tr>
                <td class="leftbox">
                    <?php language(); ?>
                    <a href="?link=suchen"><img class="inserat" src="suche.png" alt="WG-Zimmer-suchen" title="WG-Zimmer suchen"></a>
                    <a href="?link=inserieren"><img class="inserat" src="inserat.png" alt="Gratis-WG-Zimmer-inserieren" title="Gratis WG-Zimmer inserieren"></a>
                </td>
                <td class="content">
                    <?php
                    if ($link == 'home') {
                        ?><div class="textcontent"><?php home(); ?></div><?php
                    } elseif ($link == 'suchen') {
                        ?><div class="functionalcontent"><?php suchen(); ?></div><?php
                    } elseif ($link == 'inserieren') {
                        ?><div class="funtionalcontent"><?php inserieren(); ?></div><?php
                        } elseif ($link == 'hilfe') {
                            ?><div class="textcontent"><?php hilfe(); ?></div><?php
                        } elseif ($link == 'agb') {
                            ?><div class="textcontent"><?php agb(); ?></div><?php
                        }
                        ?>
                </td>
                <td class="rightbox">
                    <img id="ad" src="banner.gif" title="Werbung">
                </td>
            </tr>
        </table>
    </body>
</html>
