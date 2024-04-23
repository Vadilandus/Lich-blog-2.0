<?php
require_once "config.php";

if (!empty($_SESSION['user_id'])) {
    $_SESSION['user_id'] = "";
    header("Location: http://localhost:3000/");

}else {

}
?>