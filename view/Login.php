<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Guestbook</title>
    <link rel="stylesheet" href="../style/login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="icon">
            <box-icon name='book-bookmark'></box-icon>
            <div>
                Guestbook
            </div>
        </div>
        <div class="wrapper">
            <div class="title">
                <?php
                if(isset($_GET['login-section']) || (!isset($_GET['register-section']) && !isset($_GET['login-section']))) {
                    echo "Login";
                }
                if(isset($_GET['register-section'])) {
                    echo "Register";
                }
                ?>
            </div>
            <div class="content" id="form-content">
                <form method="GET" class="section-form">
                    <button class="section-button" name="login-section" id="login-sec">Login</button>
                    <button class="section-button" name="register-section" id="register-sec">Register</button>
                </form>
                <?php
                if(isset($_GET['login-section']) || (!isset($_GET['register-section']) && !isset($_GET['login-section']))) {
                    include "component/login-section.php";
                }
                if(isset($_GET['register-section'])) {
                    include "component/register-section.php";
                }
                ?>
            </div>
            
        </div>
    </div>
    <!-- icons -->
    <script src="https://unpkg.com/boxicons@2.1.3/dist/boxicons.js"></script>
</body>
</html>