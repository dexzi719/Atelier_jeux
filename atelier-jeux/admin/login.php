<?php
    session_start();

    // Si déjà connecté, rediriger
    if (isset($_SESSION['technicien'])) {
        header('Location: dashboard.php');
        exit();
    }

    // Traitement du formulaire
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $login = $_POST['login'];
        $mdp   = $_POST['mdp'];

        // Authentification simple
        if ($login === "admin" && $mdp === "admin") {
            $_SESSION['technicien'] = $login;
            header('Location: dashboard.php');
            exit();
        } else {
            $erreur = "Identifiants incorrects";
        }
    }
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Connexion Technicien</title>
</head>

<body>
    <h2>Connexion Technicien</h2>

    <?php if (isset($erreur)) {?>
    <p style="color:red;"><?php echo $erreur; ?></p>
    <?php }?>

    <form method="post">
        <label for="login">Login :</label>
        <input type="text" name="login" required><br><br>

        <label for="mdp">Mot de passe :</label>
        <input type="password" name="mdp" required><br><br>

        <input type="submit" value="Se connecter">
    </form>

</body>

</html>