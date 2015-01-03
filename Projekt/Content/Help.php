<?php

function Hilfe() {
    echo '<h1>Hilfe</h1>
        <div>Wenn du die Links zu deinem Inserat oder deinen Inseraten verloren hast, dann kannst du deine E-Mail-Adresse unten eingeben und du wirst alle Links (Inserat, Bearbeitung, Löschen) zu allen Inseraten die in unserer Datenbank sind erhalten.</div>
    		<br />
                <form id="helpform" action="request/getlinks.php" method="GET">
   				<h2>Bitte E-mail eingeben:</h2>
                <input id="email" class="formfield" type="email" name="email">
                <input id="btnhelp" class="button" name="btnhelp" value="Senden" type="submit">
			</form>';
}
?>
