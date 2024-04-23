<?php
    define('USER', 'root');
    define('PASSWORD', '');
    define('HOST', 'localhost');
    define('DATABASE', 'lich-blog');
    try {
        $connection = new PDO('mysql:host=localhost;dbname=lich-blog', 'root', '');
    } catch (PDOException $e) {
        exit("Error: " . $e->getMessage());
    }
?>