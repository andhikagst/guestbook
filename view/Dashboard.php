<?php
include "../database/UserToken.php";
include "../database/Guestbookdb.php";
include "Logout.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>guest book</title>
    <link rel="stylesheet" href="../style/dashboard.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container">
        <header>
            <div class="logo">
                <box-icon class="icon" name="book-bookmark"></box-icon>
                <h1>Guest Book</h1>
            </div>
            <form method="POST">
                <button type="submit" name="logout"><box-icon name='log-out'></box-icon></button>
            </form>
        </header>

        <aside>
            <form class="aside-container" method="POST" id="post-form">
                <div class="inputan">
                    <div>
                        <h2>Name:</h2>
                        <input class="input" type="text" name="name">
                    </div>
                    <div>
                        <h2>Email :</h2>
                        <input class="input" type="text" name="email" >
                    </div>
                    <div>
                        <h2>Message:</h2>
                        <input class="input" type="text" name="message"><br>
                    </div>
                </div>
                <div class="button">
                    <button id="submit-button">submit</button>
                    <button id="clear-button">clear</button>
                </div>
            </form>
        </aside>
        <main>
            <div id="guestbook-list">
                <?php
                echo "<pre>";
                getGuestbookHTML();
                echo "</pre>";
                ?>
            </div>
        </main>
        <footer>
            <i><span>copyright by dika</span>©</i>
        </footer>
    </div>

    <script src="../script/Post.js"></script>
    <script src="https://unpkg.com/boxicons@2.1.3/dist/boxicons.js"></script>
</body>
</html>