<?php
    session_start();
    if(!isset($_SESSION['user_id'])){
        header('Location: register.php');
        exit;
    } else {
        // Покажите пользователю страницу
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main2.css">
    <link rel="stylesheet" href="cursor.css">
    <title>News</title>
</head>

<body>
    <script src="js/cursor.js"></script>
        <div class="logo" id="too">
            <a href="index.php"><span id="logo">Vadik <br> Staryi</span></a>
        </div>
        <div class="right-menu">
            <a href="profile.php"><?php echo $_SESSION['user_id']?></a><br>
            <a href="logout.php">Log out</a>
        </div>

        <div class="scroll">
            <div class="news">
                <div class="label"><h2>Название</h2></div>
                <div class="author"><h3>Автор:</h3> </div>
                <div class="text">О чем она</div>
                <div class="image_news"><img src="image/news1.jpg" width="280px" alt=""></div>
                <div class="like"><img src="image/cofee.png" alt=""></div>
            
            </div>
            <div class="news">
                <div class="label"><h2>Название</h2></div>
                <div class="author"><h3>Автор:</h3> </div>
                <div class="text">О чем она</div>
                <div class="image_news"><img src="image/news1.jpg" width="280px" alt=""></div>
                <div class="like"><img src="image/cofee.png" alt=""></div>
            
            </div>
        </div>

        

    <div class="follow-cursor"></div>
</body>
</html>