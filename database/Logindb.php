<?php
session_start();
$_SESSION["token"] = 0;
include "Connect.php";
$errorMessage = "";

$response = array();
if ($conn) {
    $sql = "SELECT * FROM USERS";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $response = mysqli_fetch_all($result, MYSQLI_ASSOC);
        if (isset($_POST['submit'])) {
            $usn = $_POST['username'];
            $pass = $_POST['password'];
            if(userAuth($response, $usn, $pass)) {
                $_SESSION["token"] = 1;
                header("Location: dashboard.php");
            } else {
                $errorMessage = "wrong username or password";
            }
        }
    }
}

function userAuth($response, $usn, $pass) {
    $i = 0;
    for ($i=0; $i < count($response); $i++) { 
        if ($usn == $response[$i]['USERNAME'] && $pass == $response[$i]['PASS']) {
            return true;
        } 
    }
    return false;
}
?>
