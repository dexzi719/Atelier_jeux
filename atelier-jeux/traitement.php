<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once 'includes/bdd.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nom         = $_POST['nom'];
    $email       = $_POST['email'];
    $categorie   = $_POST['categorie'];
    $description = $_POST['description'];
    $date        = date('Y-m-d H:i:s');

    $sql = "INSERT INTO tickets (date_creation, nom, email, categorie, description)
            VALUES (?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$date, $nom, $email, $categorie, $description]);

    $id = $pdo->lastInsertId();

    echo "<h2>Merci $nom, votre demande a été enregistrée</h2>";
    echo "<p>Votre numéro de ticket est : <strong>$id</strong></p>";
    echo "<a href='index.php'>Retour à l'accueil</a>";
} else {
    header('Location: index.php');
    exit();
}
