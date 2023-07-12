<?php
require_once __DIR__. "/lib/pdo.php";
require_once __DIR__. "/lib/voitoccas.php";
require_once __DIR__. "/templates/header.php"; 


$error = false;
if(isset($_GET['id'])) { // est ce que je reçoit bien un id en paramètre 
	$id = $_GET['id']; // oui et je le stock 

    $car = getCars($pdo); // j’appelle ma fonction qui est sensé appelé une voiture

	if (!$car){ // si j’en ai pas 
		$error= true; // error
	} else {
        $error = true; //sinon error
}}


If(!$error){
    
?>

<div class="corps-presentation">
                <div class="gauche">
                    <h2 class="title-model"><?= $car["brand"]["model"]?></h2>
                    <p class="subtitle-model"><?= $car["description"]?></p>

                    <p class="infos-car"><?= $car["year"]?>| <?= $car["mileage"]?> | <?= $car["energy"]?></p>
                    <p class="price-car"><?= $car["price"]?></p>
                </div>

                <div class="droite">
                    <div class="slide-container">
                        <div class="custom-slider fade" style="text-align: center;">
                          <img class="slide-img" src="Photos/véhicules d'occasions/clio4/clio1.jpg">
                        </div>

                        <div class="custom-slider fade" style="text-align: center;">
                          <img class="slide-img" src="Photos/véhicules d'occasions/clio4/clio3.jpg">
                        </div>

                        <div class="custom-slider fade" style="text-align: center;">
                          <img class="slide-img" src="Photos/véhicules d'occasions/clio4/clio4.jpg">
                        </div>

                        <div class="custom-slider fade" style="text-align: center;">
                            <img class="slide-img" src="Photos/véhicules d'occasions/clio4/clio5.jpg">
                        </div>

                        <div class="custom-slider fade" style="text-align: center;">
                            <img class="slide-img" src="Photos/véhicules d'occasions/clio4/clio2.jpg">
                        </div>

                        <div class="custom-slider fade" style="text-align: center;">
                            <img class="slide-img" src="Photos/véhicules d'occasions/clio4/clio6.jpg">
                        </div>
                        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                        <a class="next" onclick="plusSlides(1)">&#10095;</a>
                      </div>
                      <div class="slide-dot">
                        <span class="dot" onclick="currentSlide(1)"></span> 
                        <span class="dot" onclick="currentSlide(2)"></span> 
                        <span class="dot" onclick="currentSlide(3)"></span> 
                        <span class="dot" onclick="currentSlide(4)"></span> 
                        <span class="dot" onclick="currentSlide(5)"></span> 
                        <span class="dot" onclick="currentSlide(6)"></span> 
                      </div>
                  
                </div>
            </div>

            <!-- tableaux -->
            <div class="tableaux">
                <table>
                    <thead>
                        <tr>
                            <th colspan="2">Informations générales</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Année</th>
                            <td><?= $car["year"]?></td>
                        </tr>
                        <tr>
                            <th>Mise en circulation</th>
                            <td><?= $car["created_at"]?></td>
                        </tr>
                        <tr>
                            <th>Kilométrage au compteur</th>
                            <td><?= $car["mileage"]?></td>
                        </tr>
                        <tr>
                            <th>Energie</th>
                            <td><?= $car["energy"]?></td>
                        </tr>
                        <tr>
                            <th>Boite de vitesse</th>
                            <td><?= $car["transmission"]?></td>
                        </tr>
                        <tr>
                            <th>Couleur extérieur</th>
                            <td><?= $car["color"]?></td>
                        </tr>
                        <tr>
                            <th>Nombre de portes</th>
                            <td><?= $car["doors_number"]?></td>
                        </tr>
                        <tr>
                            <th>Puissance fiscale</th>
                            <td><?= $car["fiscal power"]?></td>
                        </tr>
                    </tbody>
                </table>

                <table>
                    <thead>
                        <tr>
                            <th colspan="2">Equipements & options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>Intérieur</th>
                            <td>
                                <?= $car["interior_equipments"]?>
                            </td>
                        </tr>
                        <tr>
                            <th>Extérieur</th>
                            <td>
                                <?= $car["exterior_equipments"]?>
                            </td>
                        </tr>
                        <tr>
                            <th>Sécurité</th>
                            <td>
                                <?= $car["security_description"]?>
                            </td>
                        </tr>
                        <tr>
                            <th>Autres</th>
                            <td>
                                <?= $car["others_equipments"]?>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="pourcontact">
                <a href="contact.html"><p>Pour plus de renseignements, cliquer ici !</p></a>
            </div>

<?php } else { ?> 
    <h1>Page introuvable</h1> 
<?php } ?>

<?php require_once __DIR__ ."/templates/footer.php";  ?>