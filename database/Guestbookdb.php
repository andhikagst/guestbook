<?php
include "Connect.php";

function getGuestbookHTML() {
    global $conn;
    $output = "";
    $sql = "SELECT * FROM MESSAGE";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $response = mysqli_fetch_all($result, MYSQLI_ASSOC);
        foreach ($response as $row) {
            $date = date("Y/m/d");
            $output .= "
                <div style='border: 1px solid black; border-radius: 10px; width: fit-content; margin-bottom: 0.5rem;'>"
                    . "<div style='border-bottom: 1px solid black; padding: 0.5rem;'>"
                        . "<b>" . htmlspecialchars($row['NAME']) . "</b> | " . htmlspecialchars($row['EMAIL'])
                    . "</div><br>"
                    . "<div style='padding: 0 0.5rem'>" . htmlspecialchars($row['MESSAGE']) . "</div><br>"
                    . "<div style='padding: 0.5rem; font-size: 0.7rem; display: flex; justify-content: end'>"
                        . $date
                    . "</div>"
                . "</div>";
        }
    }
    return $output;
}

// UBAH: Tangani aksi dari AJAX
if (isset($_POST['action'])) {
    $action = $_POST['action'];

    if ($action === 'submit') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];

        $sql = "INSERT INTO MESSAGE (NAME, EMAIL, MESSAGE) VALUES ('$name', '$email', '$message')";
        mysqli_query($conn, $sql);

        echo getGuestbookHTML();
    }

    if ($action === 'clear') {
        $sql = "TRUNCATE TABLE MESSAGE";
        mysqli_query($conn, $sql);

        echo "";
    }

    exit;
}
?>
