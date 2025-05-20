<?php

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <title>Demande d'assistance</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h2>Formulaire de demande</h2>
    <form action="traitement.php" method="post">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" required><br>

        <label for="email">Email :</label>
        <input type="email" name="email" required><br>

        <label for="categorie">Catégorie du problème :</label>
        <select name="categorie">
            <option value="Réseau">Réseau</option>
            <option value="Matériel">Matériel</option>
            <option value="Logiciel">Logiciel</option>
        </select><br>

        <label for="description">Description :</label><br>
        <textarea name="description" rows="5" cols="40" required></textarea><br>

        <input type="submit" value="Envoyer">
    </form>
</body>

</html>
