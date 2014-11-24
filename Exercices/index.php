<?php
session_start ();

$link = 0;
global $lan;


require_once ("Content/Inserieren.php");
require_once ("Content/Home.php");
require_once ("Content/AGB.php");
require_once ("Content/Suchen.php");
require_once 'Language.php';

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
        <link rel="stylesheet" type="text/css" href="mywgzimmer.css">
          <script src="js/jquery-1.8.3.js"></script>
          <script src="js/jquery-ui-1.9.2.custom.js"></script>
        <link href="css/blitzer/jquery-ui-1.9.2.custom.css" rel="stylesheet"> 
        <script type="text/javascript" src="request/functions.js"></script>    
        <script type="text/javascript">
            $(function () {


            	 $("#btweiter1").click(function( event ) {
            		 InserierenTab1();
  				});
            	 
            	 $("#btweiter2").click(function( event ) {
            		 InserierenTab2();
 				});
            	 $("#btweiter3").click(function( event ) {
            		 InserierenTab3();
 				});
            	 $("#btweiter4").click(function( event ) {
            		 InserierenTab4();
 				});
                 $("#btAbschichen").click(function( event ) {
                	 InserierenTab5();
 				});

            	 $("#btzuruck2").click(function( event ) {
            		 ZuruckbtTab2();
 				});
            	 $("#btzuruck3").click(function( event ) {
            		 ZuruckbtTab3();
 				});
            	 $("#btzuruck4").click(function( event ) {
            		 ZuruckbtTab4();
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

                
                $("#btweiter1").button();
                $("#btweiter2").button();
                $("#btzuruck2").button();
                $("#btweiter3").button();
                $("#btzuruck3").button();
                $("#btweiter4").button();
                $("#btzuruck4").button();
                $("#btweiter5").button();
                $("#btzuruck5").button();

                $("#btMitbewohsuch").button();
                $("#btInserataufgeben").button();
                $("#btnSuchen").button();
                $("#btnFilterAus").button();

                
                /*$( "#tabs" ).tabs( "disable", 1 );
                $( "#tabs" ).tabs( "disable", 2 );
                $( "#tabs" ).tabs( "disable", 3 );
                $( "#tabs" ).tabs( "disable", 4 );
                $( "#tabs" ).tabs( "disable", 5 );*/


              //  $("#autocomplete").autocomplete({
                    //source: availableTags
               // });
               // $("#number").selectmenu();

            });
        </script>
    </head>
    <body>
        <div id="Header">
            <a href="?link=home"><img id=logo src="logo.png" alt="Home"
                                      title="Home"></a>
            <div id="lang"><?php language(); ?></div>
            <a href="?link=hilfe"><img id=help src="help.png"
                                       alt="Hilfe" title="Hilfe"></a> <a href="?link=agb"><img id=agb
                                                                    src="agb.png" alt="AGB" title="AGB"></a>
        </div>

        <div id="Wrap">
            <table>
                <tr>
                    <td style="vertical-align: top;">
                        <div id="leftbox">

                            <a href="?link=suchen"><img id=suche
                                                        src="suche.png" alt="WG-Zimmer-suchen" title="WG-Zimmer suchen"></a>
                            <a href="?link=inserieren"><img id=inserat src="inserat.png"
                                                            alt="Gratis-WG-Zimmer-inserieren"
                                                            title="Gratis WG-Zimmer inserieren"></a>
                        </div>
                    </td>
                    <td style="vertical-align: top;">
                            <?php
                            if ($link == 'home') {
							?><div id="content"><?php 
                                home();?>
                                </div>
                                <?php
                            } elseif ($link == 'suchen') {
                                suchen();
                            } elseif ($link == 'inserieren') {
                                Inserieren();
                            } elseif ($link == 'hilfe') {
                                echo '<ul><li>Hilfe</li></ul>';
                            } elseif ($link == 'agb') {
                                agb();
                            }
                            ?>
                    </td>
                    <td>
                        <div id="rightbox"></div>
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>
