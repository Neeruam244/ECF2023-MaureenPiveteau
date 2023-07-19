<?php

try{
    // Connexion à la base de données MySQL via PDO
    $pdo = new PDO('mysql:dbname="._DB_NAME_.";host=localhost', '_DB_USER_', '_DB_PASSWORD_'); 

    // Configurer le mode de gestion d'erreurs de PDO pour afficher les erreurs
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // ERRMODE_WARNING | ERRMODE_EXCEPTION | ERRMODE_SILENT

    // Exécutez vos requêtes SQL ici en utilisant PDO
    function getCarsById(PDO $pdo, int $id):array|bool
    {
        $query = $pdo->prepare("SELECT * FROM cars WHERE id = :id");
        $query->bindValue(":id", $id, PDO::PARAM_INT);
        $query->execute();
        return $query->fetch(PDO::FETCH_ASSOC);
    }

    // ajouter ou modifier une voiture
    function updateCar(PDO $pdo, string $brand, string $model, string $description, string $created_at, int $year, string $mileage, string $energy, string $price, string $transmission,
    string $color, int $doors_number, string $fiscal_power, string $interior_equipments, string $exterior_equipments, string $security_equipments, string $others_equipments, string|null $image, int $id = null):bool 
    {
        if ($id === null) {
            $query = $pdo->prepare("INSERT INTO cars (brand, model, description, created_at, year, mileage, energy, price, transmission, color, doors_number, fiscal_power, interior_equiments, exterior_equipments, security_equipments, others_equipments, image) 
            VALUES(:brand, :model, :description, :created_at, year, :mileage, :energy, :price, :transmission, :color, :doors_number, :fiscal_power, :interior_equiments, :exterior_equipments, :security_equipments, :others_equipments, :image)");
        } else {
            $query = $pdo->prepare("UPDATE `cars` SET `price` = :price, `description` = :description, image = :image, WHERE `id` = :id");
        
            $query->bindValue(':id', $id, $pdo::PARAM_INT);
        }

        $query->bindValue(':brand', $brand, $pdo::PARAM_STR);
        $query->bindValue(':model', $model, $pdo::PARAM_STR);
        $query->bindValue(':description', $description, $pdo::PARAM_STR);
        $query->bindValue(':created_at', $created_at, $pdo::PARAM_STR);
        $query->bindValue(':year', $year, $pdo::PARAM_INT);
        $query->bindValue(':mileage', $mileage, $pdo::PARAM_STR);
        $query->bindValue(':energy', $energy, $pdo::PARAM_STR);
        $query->bindValue(':price', $price, $pdo::PARAM_STR);
        $query->bindValue(':transmission', $transmission, $pdo::PARAM_STR);
        $query->bindValue(':color', $color, $pdo::PARAM_STR);
        $query->bindValue(':doors_number', $doors_number, $pdo::PARAM_INT);
        $query->bindValue(':fiscal_power', $fiscal_power, $pdo::PARAM_STR);
        $query->bindValue(':interior_equipments', $interior_equipments, $pdo::PARAM_STR);
        $query->bindValue(':exterior_equipments', $exterior_equipments, $pdo::PARAM_STR);
        $query->bindValue(':security_equipments', $security_equipments, $pdo::PARAM_STR);
        $query->bindValue(':others_equipments', $others_equipments, $pdo::PARAM_STR);
        $query->bindValue(':image',$image, $pdo::PARAM_STR);
        return $query->execute();  
    }

    // supprimer une voiture
    function deleteCar(PDO $pdo, int $id):bool
    {
        
        $query = $pdo->prepare("DELETE FROM cars WHERE id = :id");
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

