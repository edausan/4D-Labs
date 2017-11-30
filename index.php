<?php
    $file = file_get_contents("http://localhost/4DLabs-dev/all.php");
    file_put_contents("index.html", $file);
?>