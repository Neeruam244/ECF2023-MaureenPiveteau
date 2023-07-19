<?php

try{
 // Connexion à la base de données MySQL via PDO
    $pdo = new PDO('mysql:dbname="._DB_NAME_.";host=localhost', '_DB_USER_', '_DB_PASSWORD_'); 

 // Configurer le mode de gestion d'erreurs de PDO pour afficher les erreurs
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // ERRMODE_WARNING | ERRMODE_EXCEPTION | ERRMODE_SILENT

// Exécutez vos requêtes SQL ici en utilisant PDO

    function getOpinionById(PDO $pdo, int $id):array|bool
    {
        $query = $pdo->prepare("SELECT * FROM publish_opinion WHERE id = :id");
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

// Publier des avis
    function publishOpinion(PDO $pdo, string $client_name)
    {
        // Requête pour récupérer les informations de l'avis à partir d'une autre table
        $query = $pdo->prepare("SELECT * FROM opinions WHERE client_name = :client_name");
        $query->bindValue(':id', $client_name, $pdo::PARAM_STR);
        $query->execute();
        $avis = $query->fetch(PDO::FETCH_ASSOC);

        if ($avis) {
            // Insérer l'avis dans la table de publication des avis
            $insertQuery = "INSERT INTO publish_opinion (client_name, opinion, note) VALUES (:client_name, :opinion, :imgNote)";
            $insertStatement = $pdo->prepare($insertQuery);
            $insertStatement->execute(array(
                'client_name' => $avis['client_name'],
                'opinion' => $avis['opinion'],
                'imgNote' => $avis['imgNote']
            ));

            echo "Avis publié avec succès !";
        } else {
            echo "Avis introuvable.";
        }
    }

// Ajouter des avis
    function createOpinion(PDO $pdo, int $id, string $client_name, string $opinion, string $imgNote ):bool 
    {
        $query = $pdo->prepare("INSERT INTO opinions (client_name, opinion, imgNote) VALUES (:client_name, :opinion, :imgNote)");  
        $query->bindValue(':id', $id, $pdo::PARAM_INT);
        $query->bindValue(':client_name', $client_name, $pdo::PARAM_STR);
        $query->bindValue(':opinion', $opinion, $pdo::PARAM_STR);
        $query->bindValue(':imgNote',$imgNote, $pdo::PARAM_STR);
        return $query->execute();  
    }

// Modifier les avis existants
function updateOpinion(PDO $pdo, int $id, string $opinion):bool 
    {
        $query = $pdo->prepare("UPDATE opinions (opinion) VALUES (:opinion)");  
        $query->bindValue(':id', $id, $pdo::PARAM_INT);
        $query->bindValue(':opinion', $opinion, $pdo::PARAM_STR);
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
?>