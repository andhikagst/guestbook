<?php
include "Connect.php";

if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['password2'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    if(passwordAuth($password, $password2)) {
        $sql = "INSERT INTO USERS(USERNAME, PASS)
        VALUES ('$username', '$password')";

        try {
            mysqli_query($conn, $sql);
            echo "register berhasil";
        } catch (Exception $e) {
            echo "<p style='color:red; font-size: 0.8rem;'>Insert gagal: " . $e->getMessage() . "</p>";
        }
        $returnMessage =  "return to <a href='../view/login.php'>login page</a>";
    } else {
        echo "<p style='color:red; font-size: 0.8rem;'>Password do not match</p>";
    }
}

function passwordAuth($pass1, $pass2) {
    return $pass1 === $pass2;
}

?>