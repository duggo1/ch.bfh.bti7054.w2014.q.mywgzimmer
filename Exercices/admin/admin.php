<?php
include('session.php');
    //connection information
    $user = "your_mysql_user";
    $pass = "your_mysql_user_pass";
    $datbaseh = new PDO('mysql:host=localhost;dbname=mywgzimmerdb;charset=UTF-8', $user, $pass);

//prepare statement to query table
    $sth = $datbaseh->prepare("SELECT ID, active, Erstellungsdatum, Strasse, PLZ, Ort, Email, AbDatum FROM tblInserate");
    $sth->execute();
//loop over all table rows and fetch them as an object
    $inserattable = "<tr><td>";
    while ($result = $sth->fetch(PDO::FETCH_OBJ)) {
        $inserattable = $inserattable . $result->ID;
        $inserattable = $inserattable . "</td><td>";
        $inserattable = $inserattable . $result->active;
        $inserattable = $inserattable . "</td><td>";
        $inserattable = $inserattable . $result->Erstellungsdatum;
        $inserattable = $inserattable . "</td><td>";
        $inserattable = $inserattable . $result->Strasse;
        $inserattable = $inserattable . "</td><td>";
        $inserattable = $inserattable . $result->PLZ;
        $inserattable = $inserattable . "</td><td>";
        $inserattable = $inserattable . $result->Ort;
        $inserattable = $inserattable . "</td><td>";
        $inserattable = $inserattable . $result->Email;
        $inserattable = $inserattable . "</td><td>";
        $inserattable = $inserattable . $result->AbDatum;
    }
    $inserattable = $inserattable . "</td></tr>";
    $inserattable = "abme";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>MyWGZimmer-Administrator</title>
        <link rel="stylesheet" type="text/css" href="../mywgzimmer.css">
    </head>
    <body>
        <div id="Header">
            <a href="../index.php?link=home"><img id=logo src="../logo.png" alt="Home"
                                                  title="Home"></a>
            <a href="logout.php"><img id=logout src="../logout.png" alt="Logout" title="Logout" onclick="logout();"></a>
        </div>
        <div id="content">
            </br>
            <h1>
                Inserate
            </h1>
            <table>
                <tr>
                    <th>ID</th>
                    <th>Aktivierung</th>
                    <th>Erstellungsdatum</th>
                    <th>Strasse</th>
                    <th>PLZ</th>
                    <th>Ort</th>
                    <th>E-Mail</th>
                    <th>Einzugsdatum</th>
                </tr>
            </table>
            <table>
                <?php
                echo $inserattable;
                ?>
            </table>
            <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
            <p><strong><?php
                    if (isset($error)) {
                        echo $error;
                    }
                    ?></strong></p>
        </div>
    </body>
</html>



