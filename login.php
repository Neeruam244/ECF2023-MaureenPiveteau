<?php

$errors = [];
$messages = [];

if (isset($_POST['loginUser'])) {

    $user = verifyUserLoginPassword($pdo, $_POST['email'], $_POST['password']);

    if ($user) {
        session_regenerate_id(true);
        $_SESSION['user'] = $user;
        if ($user['role'] === 'administrateur') {
            header('location: /admin/admin_index.php');
        } elseif 
            ($user['role'] === 'employé') {
            header('location: /employes/employe_index.php');
        }
        else {
            header('location: index.php');
        }
    } else {
        $errors[] = 'Email ou mot de passe incorrect';
    }

  }