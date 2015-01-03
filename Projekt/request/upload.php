<?php

//echo $_POST["insfoto1"];
//echo $_FILES ["insfoto1"]["name"];
$errors = $_FILES["images"]["error"];
foreach ($errors as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $name = $_FILES["images"]["name"][$key];
        //$ext = pathinfo($name, PATHINFO_EXTENSION);
        $name = explode("_", $name);
        $imagename = '';
        foreach ($name as $letter) {
            $imagename .= $letter;
        }

        move_uploaded_file($_FILES["images"]["tmp_name"][$key], "../uploads/" . $imagename);
    }
}


echo "<h2>Successfully Uploaded Images</h2>";
?>








