<html>
    <head>
        <meta charset="utf-8">
        <title>MyWGZimmer-Administrator</title>
        <link rel="stylesheet" type="text/css" href="../mywgzimmer.css">
    </head>
    <body>
        <div class="Header">
            <a href="../index.php?link=home"><img id="logo" src="../logo.png" alt="Home" title="Home"></a>
            <a href="logout.php"><img id="logout" src="../logout.png" alt="Logout" title="Logout"></a>
        </div>
        <td class="content">
                    <?php
                    if ($link == 'login') {
                        ?><div class="functionalcontent"><?php login(); ?></div><?php
                    } elseif ($link == 'admin') {
                        ?><div class="textcontent"><?php admin(); ?></div><?php
                    } 
                    ?>
                </td>
                <td class="rightbox">
                </td>
            </tr>
        </table>
        
    </body>
</html>
