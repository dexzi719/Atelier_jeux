CREATE DATABASE atelier_jeux DEFAULT CHARACTER SET utf8mb4;

USE atelier_jeux;

-- Table des tickets
CREATE TABLE tickets (
    id INT AUTO_INCREMENT PRIMARY KEY,
    date_creation DATETIME NOT NULL,
    nom VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    categorie VARCHAR(50) NOT NULL,
    description TEXT NOT NULL,
    statut ENUM('ouvert', 'en cours', 'ferme') NOT NULL DEFAULT 'ouvert'
);

-- Table technicien 
CREATE TABLE technicien (
    id INT AUTO_INCREMENT PRIMARY KEY,
    login VARCHAR(50) NOT NULL,
    mot_de_passe VARCHAR(255) NOT NULL
);

INSERT INTO technicien (login, mot_de_passe) VALUES ('admin', 'admin');


