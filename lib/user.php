<?php

function addUser(PDO $pdo, string $name, string $surname, string $email, string $password, $role = "user") {
    $sql = "INSERT INTO `users` (`name`, `surname`, `email`, `password`, `role`) VALUES (:name, :surname; :email, :password, :role);";
    $query = $pdo->prepare($sql);

    $password = password_hash($password, PASSWORD_BCRYPT);

    $query->bindParam(':username', $name, PDO::PARAM_STR);
    $query->bindParam(':username', $surname, PDO::PARAM_STR);
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->bindParam(':password', $password, PDO::PARAM_STR);
    $query->bindParam(':role', $role, PDO::PARAM_STR);
    
    return $query->execute();
}

function verifyUserLoginPassword(PDO $pdo, string $email, string $password) {
    $query = $pdo->prepare("SELECT * FROM users WHERE email = :email");
    $query->bindParam(':email', $email, PDO::PARAM_STR);
    $query->execute();
    $user = $query->fetch();

    if ($user && password_verify($password, $user['password'])) {
        return $user;
    } else {
        return false;
    }
}
