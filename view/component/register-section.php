<?php
include "../database/Registerdb.php";
?>

<form method="POST" class="component-form" id="registerForm">
    <div class="input">
        <div class="username">
            <input type="text" name="username" placeholder="username">
        </div>
        <div class="password">
            <input type="password" name="password" placeholder="password">
        </div>
        <div class="password2">
            <input type="password" name="password2" placeholder="password again">
            <?php
            if(!empty($errorMessage)) {
                echo "<p style='color:red; font-size: 0.8rem;'>$errorMessage</p>";
            }
            ?>
        </div>
        <div id="messageArea"></div>
    </div>
    <div class="button">
        <button type="submit">Register</button>
    </div>
    <?php
    if(!empty($returnMessage)) {
        echo "<p style='font-size: 0.8rem;'>$returnMessage</p>";
    }
    ?>
</form>

<script src="../script/Register.js"></script>