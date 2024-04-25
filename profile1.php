<?php
    session_start();
    if(!isset($_SESSION['user_id'])){
        header('Location: register.php');
        exit;
    } else {
        // Покажите пользователю страницу
    }
?>
<?php 

$role = '0'



?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css">
    <link rel="stylesheet" href="cursor.css">
    <title>Profile</title>
</head>
<body>

    <div class="profile">
        <div class="label">
            <h1>Ваш профиль</h1>
        </div>
        <div class="author">
            <?php echo $_SESSION['user_id']?>
        </div>
        <div class="role">
            <h2>Ваш уровень доступа: <?php echo $role?></h2>
        </div>
        <div class="center">
            <a href="role.php">Подтвердить ваши права пользователя выше</a>
        </div>
        <div class="center"><h2><a href="news1.php">Вернуться обратно</a></h2></div>
    </div>



<script src="js/cursor.js"></script>
<div class="follow-cursor"></div>
</body>
</html>