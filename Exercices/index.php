<?php
$link = 0;

require_once '~/Content/content.php';
?>
<!DOCTYPE html>
<html>
    <?php
    if (isset($_GET['link'])) {
        $link = $_GET['link'];
    }
    ?>

    <head >
        <meta charset="ISO-8859-1">
        <title>MyWGZimmer</title>
        <link rel="stylesheet" type="text/css" href="mywgzimmer.css">
    </head >
    <body>
        <div id="Header" >
            <a href="?link=home" ><img id=logo src="logo.png" alt="Home" title="Home"></a>
            <a href="?link=hilfe" ><img id=help src="help.png" alt="Hilfe" title="Hilfe"></a>
            <a href="?link=agb" ><img id=agb src="agb.png" alt="AGB" title="AGB"></a>
        </div>
        <div id="Wrap">
            <table>
                <tr>
                    <td>
                        <div id="leftbox">  
                            <a href="?link=suchen" ><img id=suche src="suche.png" alt="WG-Zimmer-suchen" title="WG-Zimmer suchen"></a>
                            <a href="?link=inserieren" ><img id=inserat src="inserat.png" alt="Gratis-WG-Zimmer-inserieren" title="Gratis WG-Zimmer inserieren"></a>
                        </div>
                    </td>
                    <td>
                        <div id="content">
                            <?php
                            if ($link == 0 || $link == Home) {
                                home();
                            }
                            ?>
                        </div>
                    </td> 
                    <td>
                        <div id="rightbox">
                        </div>
                    </td>
                </tr>
            </table>
        </div>
    </body>
</html>