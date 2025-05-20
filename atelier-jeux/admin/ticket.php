<?php
    require_once '../includes/bdd.php';
    session_start();

    if (! isset($_SESSION['technicien'])) {
        header('Location: login.php');
        exit();
    }

    if (! isset($_GET['id'])) {
        header('Location: dashboard.php');
        exit();
    }

    $id = $_GET['id'];

    // Mise à jour si le formulaire est soumis
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['statut'])) {
        $stmt = $pdo->prepare("UPDATE tickets SET statut = ? WHERE id = ?");
        $stmt->execute([$_POST['statut'], $id]);
        header('Location: dashboard.php');
        exit();
    }

    // Récupérer le ticket pour affichage
    $stmt = $pdo->prepare("SELECT * FROM tickets WHERE id = ?");
    $stmt->execute([$id]);
    $ticket = $stmt->fetch();

    if ($ticket):
?>

<h2>Modifier le ticket                       <?php echo htmlspecialchars($ticket['id']) ?></h2>
<form method="post">
    <label for="statut">Statut :</label>
    <select name="statut">
        <option value="ouvert"                               <?php echo $ticket['statut'] == 'ouvert' ? 'selected' : '' ?>>Ouvert</option>
        <option value="en cours"                                 <?php echo $ticket['statut'] == 'en cours' ? 'selected' : '' ?>>En cours</option>
        <option value="ferme"                              <?php echo $ticket['statut'] == 'ferme' ? 'selected' : '' ?>>Fermé</option>
    </select>
    <input type="submit" value="Mettre à jour">
</form>

<?php else: ?>
<p>Ticket introuvable.</p>
<?php endif; ?>