<?php
function contact(){
    $value = "đây là contact";
    client_render("contact/index.php", ['value' => $value]);
}

?>