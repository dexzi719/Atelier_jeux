<?php
    // index.php
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Accueil - Atelier des Jeux</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styles AdminLTE -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="https://demo.brlbd.com/panel/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="https://demo.brlbd.com/panel/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <link rel="stylesheet" href="https://demo.brlbd.com/panel/dist/css/adminlte.min.css">
</head>

<body class="hold-transition d-flex align-items-center justify-content-center"
    style="min-height: 100vh; background-color: #f4f6f9;">

    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <h1 style="font-size: 24px; margin-bottom: 10px;">Bienvenue sur le portail<br>de l'Atelier des Jeux</h1>
                <img src="images/agent_logo_fillup.jpg" alt="Logo" class="img-circle img-size-50 mt-2">
            </div>

            <div class="card-body">
                <p class="login-box-msg">Espace Technicien</p>

                <form method="POST" action="admin/login.php">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <img src="images/enveloppes.png" alt="Login" width="20">
                            </span>
                        </div>
                        <input type="text" name="login" class="form-control" placeholder="Login" required autofocus>
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                                <img src="images/lock.png" alt="Mot de passe" width="20">
                            </span>
                        </div>
                        <input type="password" name="mdp" class="form-control" placeholder="Mot de passe" required>
                    </div>


                    <div class="row">
                        <div class="col-12">
                            <input type="submit" class="btn btn-primary btn-block" value="Connexion">
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <a href="demande.php" class="mt-3 btn btn-primary btn-lg btn-block">Créer un ticket</a>
    </div>

</body>

</html>
