<?php

try{
    // Connexion à la base de données MySQL via PDO
    $pdo = new PDO('mysql:localhost;port=3307;dbname=ecf2023_garage', 'root', ''); 

    // Configurer le mode de gestion d'erreurs de PDO pour afficher les erreurs
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // ERRMODE_WARNING | ERRMODE_EXCEPTION | ERRMODE_SILENT

    // Exécutez vos requêtes SQL ici en utilisant PDO

    function getOpinionById(PDO $pdo, int $id):array|bool
    {
        $query = $pdo->prepare("SELECT * FROM opinion WHERE id = :id");
        $query->bindValue(":id", $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    // créer un avis clients
    function createOpinion(PDO $pdo, int $id, string $name, string $text, string $note ):bool 
    {
        $query = $pdo->prepare("INSERT INTO opinion (name, text, note) "
            ."VALUES(:name, :text, :note)");  
        $query->bindValue(':id', $id, $pdo::PARAM_INT);
        $query->bindValue(':name', $name, $pdo::PARAM_STR);
        $query->bindValue(':text', $text, $pdo::PARAM_STR);
        $query->bindValue(':note',$note, $pdo::PARAM_STR);
        return $query->execute();  
    }

    // modérer un avis clients
    function updateOpinion(PDO $pdo, int $id, string $text):bool 
    {
        $query = $pdo->prepare("INSERT INTO opinion (text) "
            ."VALUES(:text)");  
        $query->bindValue(':id', $id, $pdo::PARAM_INT);
        $query->bindValue(':text', $text, $pdo::PARAM_STR);
        return $query->execute();  
    }
}
catch (PDOException $e) {
    // Gestion des erreurs
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
} catch (Exception $e) {
    // Gestion des exceptions générales
    echo "Une erreur s'est produite : " . $e->getMessage();
}


try {
    // Connexion à la base de données MySQL via PDO
    $pdo = new PDO('mysql:localhost;port=3307;dbname=ecf2023_garage', 'root', ''); 

    // Configurer le mode de gestion d'erreurs de PDO pour afficher les erreurs
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // ERRMODE_WARNING | ERRMODE_EXCEPTION | ERRMODE_SILENT

    // Exécutez vos requêtes SQL ici en utilisant PDO
    // publier un avis
    function publishOpinion(PDO $pdo, string $name)
    {
        // Requête pour récupérer les informations de l'avis à partir d'une autre table
        $query = $pdo->prepare("SELECT * FROM opinion WHERE name = :name");
        $query->bindValue(':id', $name, $pdo::PARAM_STR);
        $query->execute();
        $avis = $query->fetch(PDO::FETCH_ASSOC);

        if ($avis) {
            // Insérer l'avis dans la table de publication des avis
            $insertQuery = "INSERT INTO publish_opinion (name, text, note) VALUES (:name, :text, :note)";
            $insertStatement = $pdo->prepare($insertQuery);
            $insertStatement->execute(array(
                'name' => $avis['name'],
                'text' => $avis['text'],
                'note' => $avis['note']
            ));

            echo "Avis publié avec succès !";
        } else {
            echo "Avis introuvable.";
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
