<?php

function Hilfe() {
    echo '<h1>Hilfe</h1>
    		<form id="helpform" action="request/getlinks.php" method="GET">
   				<div>Bitte E-mail eingeben:</div>
                <input id="email" class="formfield" type="email" name="email">
                <input id="btnhelp" class="button" name="btnhelp" value="Senden" type="submit">
			</form>';
}
?>
