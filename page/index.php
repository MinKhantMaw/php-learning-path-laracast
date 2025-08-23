<?php

require 'functions.php';
// require 'router.php';



$dsn = "mysql:host=127.0.0.1;port=3306;dbname=myapp;charset=utf8mb4";
$username = "root";
$password = "password";



try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}


$query = $pdo->prepare("SELECT * FROM posts");
$query->execute();
$posts = $query->fetchAll(PDO::FETCH_ASSOC);

// echo "<pre>";
// print_r($posts);
// echo "</pre>";

foreach ($posts as $post) {
    echo "<li>" . $post['title'] . "</li>";
}
