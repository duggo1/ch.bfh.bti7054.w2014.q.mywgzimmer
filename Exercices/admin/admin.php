<?php
include('session.php');
//connection information

$user_name = "root";
$password = "root";
$database = "mywgzimmerdb";
$server = "localhost";

$db_handle = mysql_connect($server, $user_name, $password);
$db_found = mysql_select_db($database, $db_handle);

$SQL = "SELECT * FROM tblInserate";
$result = mysql_query($SQL) or die("Ungültige Abfrage");
if ($db_found) {
    $inserattable = "<table>";
    while ($db_field = mysql_fetch_assoc($result)) {
        $inserattable = $inserattable . '<tr><td><input type="checkbox" name="checkbox[' . $db_field['ID'] . ']"/>';
        $inserattable = $inserattable . "</td><td>";
        $inserattable = $inserattable . $db_field['ID'];
        $inserattable = $inserattable . "</td><td>";
        $inserattable = $inserattable . $db_field['active'];
        $inserattable = $inserattable . "</td><td>";
        $inserattable = $inserattable . $db_field['Erstellungsdatum'];
        $inserattable = $inserattable . "</td><td>";
        $inserattable = $inserattable . $db_field['Strasse'];
        $inserattable = $inserattable . "</td><td>";
        $inserattable = $inserattable . $db_field['PLZ'];
        $inserattable = $inserattable . "</td><td>";
        $inserattable = $inserattable . $db_field['Ort'];
        $inserattable = $inserattable . "</td><td>";
        $inserattable = $inserattable . $db_field['Email'];
        $inserattable = $inserattable . "</td><td>";
        $inserattable = $inserattable . $db_field['AbDatum']. "</td></tr>";
    }
    $inserattable = $inserattable . "</table>";
    mysqli_close($db_handle);
} else {
    print "Datenbank nicht verbindbar!";
    mysqli_close($db_handle);
}
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
            <form action="admin2.php" method="post">
                
                    <?php echo $inserattable; ?>
                    
                <input type="submit" name="delete" value="Löschen" />
                <input type="submit" name="edit" value="Bearbeiten" />
            </form>
            <p><strong><?php
                    if (isset($error)) {
                        echo $error;
                    }
                    ?></strong></p>
        </div>
    </body>
</html>



