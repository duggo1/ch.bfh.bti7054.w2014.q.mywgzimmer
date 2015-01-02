<?php
function message(){
    if (isset($_GET['msg'])) {
    echo $_GET['msg'];
} else {
    echo "Error";
}
}

