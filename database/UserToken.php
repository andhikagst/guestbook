<?php
session_start();

if (empty($_SESSION["token"])) {
    $_SESSION["token"] = 0;
}

if ($_SESSION["token"] === 0) {
    header("location: ../view/Login.php");
}
?>