<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=atelier_jeux;charset=utf8mb4', 'celia', 'celiaprime');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (Exception $e) {
    die('Erreur de connexion : ' . $e->getMessage());
}
