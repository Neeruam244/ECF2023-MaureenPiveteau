<?php

function getCarsById(PDO $pdo, int $id):array|bool
{
    $query = $pdo->prepare("SELECT * FROM cars WHERE id = :id");
    $query->bindValue(":id", $id, PDO::PARAM_INT);
    $query->execute();
    return $query->fetch(PDO::FETCH_ASSOC);
}

function getCars(PDO $pdo, int $id): array|bool
{
	$query = $pdo ->prepare('SELECT * FROM cars WHERE id= :id') ; //récupère le tableau des voitures de la BDD
    $query->execute() ;
    $result = $query->fetchAll(PDO ::FETCH_ASSOC);
    Return $result;
}

// ajouter ou modifier une voiture

function updateCar(PDO $pdo, string $title, string $content, string|null $image, int $category_id, int $id = null):bool 
{
    if ($id === null) {
        $query = $pdo->prepare("INSERT INTO cars (brand, model, description, created_at, year, mileage, energy, price, transmission, color, doors_number, fiscal_power, interior_equiments, exterior_equipments, security_equipments, others_equipments, image) "
        ."VALUES(:brand, :model, :description, :created_at, year, :mileage, :energy, :price, :transmission, :color, :doors_number, :fiscal_power, :interior_equiments, :exterior_equipments, :security_equipments, :others_equipments, :image)");
    } else {
        $query = $pdo->prepare("UPDATE `cars` SET `price` = :price, `description` = :description, image = :image, WHERE `id` = :id;");
        
        $query->bindValue(':id', $id, $pdo::PARAM_INT);
    }

    $query->bindValue(':title', $title, $pdo::PARAM_STR);
    $query->bindValue(':content', $content, $pdo::PARAM_STR);
    $query->bindValue(':image',$image, $pdo::PARAM_STR);
    $query->bindValue(':category_id',$category_id, $pdo::PARAM_INT);
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