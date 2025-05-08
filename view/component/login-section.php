<?php
include "../database/Logindb.php";
?>  


<form method="POST" class="component-form">
    <div class="input">
        <div class="username">
            <input type="text" name="username" placeholder="username">
        </div>
        <div class="password">
            <input type="password" name="password" placeholder="password">
        </div>
    </div>
    <?php
    if(!empty($errorMessage)) {
        echo "<div style='
                display: flex;
                justify-content: center;
                width: 100%;
                font-size: 0.8rem; 
                color: red'>
                $errorMessage
            </div>";
    }
    ?>
    <div class="button">
        <button type="submit" name="submit">Login</button>
    </div>
</form>