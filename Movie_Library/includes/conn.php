<?php
$username = 'root';
$password = '';
try {
    $pdo = new PDO("mysql:host=localhost;dbname=movielibrary", $username, $password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch(PDOException $e) {
    echo $e->getMessage();
    
}
