<?php

$user1 = "aaa";
$pass1 = "123456";

$user2 = "bbb";
$pass2 = "123456";

if($_POST) {
    if(($_POST["username"] == $user1 && $_POST["password"] == $pass1) ||
        ($_POST["username"] == $user2 && $_POST["password"] == $pass2)
        ) {
    echo "";
include 'scriptloading.txt';
    } else {
        echo "0";
    }
}

?>
