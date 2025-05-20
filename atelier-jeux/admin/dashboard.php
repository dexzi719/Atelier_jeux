<?php
session_start();
require_once '../includes/bdd.php';

if (! isset($_SESSION['technicien'])) {
    header('Location: login.php');
    exit();
}

echo "<h2>Tableau de bord</h2>";
echo "<a href='../index.php'>Accueil</a><br><br>";

$sql     = "SELECT * FROM tickets ORDER BY date_creation DESC";
$tickets = $pdo->query($sql)->fetchAll();

if ($tickets) {
    echo "<table border='1'>
            <tr><th>ID</th><th>Date</th><th>Nom</th><th>Email</th><th>Catégorie</th><th>Description</th><th>Statut</th><th>Action</th></tr>";
    foreach ($tickets as $t) {
        echo "<tr>
                <td>{$t['id']}</td>
                <td>{$t['date_creation']}</td>
                <td>{$t['nom']}</td>
                <td>{$t['email']}</td>
                <td>{$t['categorie']}</td>
                <td>{$t['description']}</td>
                <td style='color:" . ($t['statut'] == 'ferme' ? 'green' : ($t['statut'] == 'en cours' ? 'orange' : 'red')) . "'>{$t['statut']}</td>
                <td><a href='ticket.php?id={$t['id']}'>Modifier</a></td>
            </tr>";
    }
    echo "</table>";
} else {
    echo "<p>Aucun ticket pour le moment.</p>";
}
