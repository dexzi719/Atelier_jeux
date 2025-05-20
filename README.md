<h1>📝 Atelier des Jeux</h1><br>

<h2>🎯 Description</h2>

Ce projet est un mini système de gestion de tickets d'assistance destiné à un atelier de maintenance informatique.

Il est réalisé en PHP et repose sur une base de données MySQL/MariaDB.
Le projet permet aux utilisateurs de :

  - Soumettre des demandes d’assistance

  - Et aux techniciens de les consulter et les traiter<br><br>

<h2>⚙️ Installation</h2>

Clone le projet github puis ensuite,

Base de données :

Crée la base avec le fichier bdd.sql
  Bash:
  sudo mariadb < /chemin/vers/atelier-jeux/bdd.sql

  Utilisateur par défaut : admin / admin

Configuration de la connexion BDD :

Fichier : includes/bdd.php
  Bash : 
  $pdo = new PDO('mysql:host=localhost;dbname=atelier_jeux', 'utilisateur', 'motdepasse');

Droits d’accès aux fichiers (si besoin) :
  
  Bash :
  sudo chmod -R 755 /var/www/html/atelier-jeux
  sudo chown -R www-data:www-data /var/www/html/atelier-jeux<br><br>

<h2>👨‍💻 Fonctionnalités</h2><br>
<strong>Utilisateur :</strong>

    • Accès libre à demande.php

    • Soumission d’une demande d’aide (nom, mail, catégorie, description)

    • Affichage d’un message de confirmation avec un ID

<strong>Technicien :</strong>

    • Connexion avec login/mot de passe

    • Accès restreint aux pages admin (via sessions PHP)

    • Liste des tickets avec statut et action “modifier”

    • Changement de statut : ouvert, en cours, fermé 

<br><br><h2>🧪 Technologies utilisées</h2>

    • PHP (procédural)

    • HTML / CSS

    • MySQL / MariaDB 

<br><br><h2>📌 Auteur</h2>

Projet réalisé dans le cadre du BTS SIO<br>
Année 2024-2025<br>
Élève : <br>
Antoine HUGOT<br> 
Matteo LEGRAND
