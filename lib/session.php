<?php

session_set_cookie_params([
    'lifetime' => 3600,
    'path' => '/',
    'domain' => _DOMAIN_,
    'httponly' => true
]);

session_start();



function adminOnly() {
    if (!isset($_SESSION['user']) || $_SESSION['user']['role'] != 'administrateur') {
        // Rediriger vers la page de connexion
        header("Location: ../login.php");
        exit();
    }
}

function employeeOnly() {
    if (!isset($_SESSION['user']) || $_SESSION['user']['role'] != 'employé') {
        // Rediriger vers la page de connexion
        header("Location: ../login.php");
        exit();
    }
}