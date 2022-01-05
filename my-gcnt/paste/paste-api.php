<?php
if (isset($_GET['paste-id'])) {
    $abc = $_GET['paste-id'];

    $cont = file_get_contents("https://www.gcnt.net/my-gcnt/paste/paste-html.php?paste_name=" . $abc);
    echo $cont;
}
return;
