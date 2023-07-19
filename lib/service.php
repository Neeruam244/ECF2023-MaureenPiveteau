<?php

try{
    // Connexion à la base de données MySQL via PDO
    $pdo = new PDO('mysql:dbname="._DB_NAME_.";host=localhost', '_DB_USER_', '_DB_PASSWORD_'); 

    // Configurer le mode de gestion d'erreurs de PDO pour afficher les erreurs
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // ERRMODE_WARNING | ERRMODE_EXCEPTION | ERRMODE_SILENT

    // Exécutez vos requêtes SQL ici en utilisant PDO

    function getServiceById(PDO $pdo, int $id)
    {
        $query = $pdo->prepare("SELECT * FROM services WHERE id = :id");
        $query->bindValue(":id", $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    function saveService(PDO $pdo, string $title, string $content, string|null $picture, int $id = null):bool 
    {
        if ($id === null) {
            $query = $pdo->prepare("INSERT INTO services (title, content, picture) "
            ."VALUES(:title, :content, :picture)");
        } else {
            $query = $pdo->prepare("UPDATE `services` SET `title` = :title, `content` = :content, picture = :picture, WHERE `id` = :id;");
            $query->bindValue(':id', $id, $pdo::PARAM_INT);
        }

        $query->bindValue(':title', $title, $pdo::PARAM_STR);
        $query->bindValue(':content', $content, $pdo::PARAM_STR);
        $query->bindValue(':picture',$picture, $pdo::PARAM_STR);
        return $query->execute();  
    }

    function deleteService(PDO $pdo, int $id):bool
    {
    
        $query = $pdo->prepare("DELETE FROM services WHERE id = :id");
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


