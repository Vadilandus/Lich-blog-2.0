<?php 

session_start();
include('config.php');

if (isset($_POST['role'])){
    $role = $_POST['role'];
    $password = $_POST['password'];
    $query = $connection->prepare('SELECT * FROM role WHERE role=:role');
    $query->bindParam('role',$role,PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    if (password_verify($password,$result['password'])){
        $_SESSION['role'] = $result['role'];
        echo '<p>Поздравляем, вы вошли</p>';
    } else {
        echo '<p>Неверные пароль</p>';
    }

}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profile.css">
    <title>role</title>
</head>
<body>
    
<form method="post" action="" name="signup-form">
<div class="form-element">
<label>role</label>
<input type="text" name="role" required />
</div>
<div class="pass">
<label>Password</label>
<input type="password" name="password" required />
</div>
<button type="submit" name="role" value="role">role</button>
</form>

</body>
</html>