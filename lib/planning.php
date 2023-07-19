<?php

try{
    // Connexion à la base de données MySQL via PDO
    $pdo = new PDO('mysql:dbname="._DB_NAME_.";host=localhost', '_DB_USER_', '_DB_PASSWORD_'); 

    // Configurer le mode de gestion d'erreurs de PDO pour afficher les erreurs
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // ERRMODE_WARNING | ERRMODE_EXCEPTION | ERRMODE_SILENT

    // Exécutez vos requêtes SQL ici en utilisant PDO

    function getPlanningById(PDO $pdo, int $id):array|bool
    {
        $query = $pdo->prepare("SELECT * FROM planning WHERE id = :id");
        $query->bindValue(":id", $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    function savePlanning(PDO $pdo, string $planning1, string $hour1, string $planning2, string $hour2, string $planning3, string $hour3, int $id = null):bool 
    {
        if ($id === null) {
            $query = $pdo->prepare("INSERT INTO planning (planning1, hour1, planning2, hour2, planning3, hour3)");
        } else {
            $query = $pdo->prepare("UPDATE `planning` SET `planning1` = :planning1, `hour1` = :hour1, `planningy2` = :planning2, `hour2` = :hour2,
            `planning3` = :planning3, `hour3` = :hour3, WHERE `id` = :id;");
        
            $query->bindValue(':planning1', $planning1, $pdo::PARAM_STR);
            $query->bindValue(':hour1', $hour1, $pdo::PARAM_STR);
            $query->bindValue(':planning2', $planning2, $pdo::PARAM_STR);
            $query->bindValue(':hour2', $hour2, $pdo::PARAM_STR);
            $query->bindValue(':planning3', $planning3, $pdo::PARAM_STR);
            $query->bindValue(':hour3', $hour3, $pdo::PARAM_STR);
            return $query->execute(); 
        } 
    }

    function deletePlanning(PDO $pdo, int $id):bool
    {
        $query = $pdo->prepare("DELETE FROM planning WHERE id = :id");
        $query->bindValue(':id', $id, $pdo::PARAM_INT);
        $query->execute();
        if ($query->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }
}
catch (PDOException $e) {
    // Gestion des erreurs
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
} catch (Exception $e) {
    // Gestion des exceptions générales
    echo "Une erreur s'est produite : " . $e->getMessage();
}







