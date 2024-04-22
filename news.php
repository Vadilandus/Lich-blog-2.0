<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main2.css">
    <link rel="stylesheet" href="cursor.css">
    <title>News</title>
</head>
<?php 
$user = '';
?>
<body>
    <script src="js/cursor.js"></script>
        <div class="logo">
            <a href="index.php"><span id="logo">Vadik <br> Staryi</span></a>
        </div>
        <div class="right-menu">
            <?php if($user) { ?>
                <p>Hello</p>
            <?php } else { ?>
                <a href="register.php">Register</a>
                <a href="login.php">Log in</a>
            <?php } ?>
        </div>

        <div class="scroll">
            <div class="news">
                kvadrat
            </div>
            <div class="news">
                Kryg
            </div>
        </div>

        

    <div class="follow-cursor"></div>
</body>
</html>