<?php
session_start();
if (! isset($_SESSION['technicien'])) {
    header('Location: login.php');
    exit();
}