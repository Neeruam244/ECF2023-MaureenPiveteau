<?php 
require_once __DIR__. "/lib/car.php";
require_once __DIR__. "/templates/header.php"; 
?> 

<!-- page de la liste des véhicules d'occasions -->

<h2 class="title-car">Nos voitures d'occasions</h2>

<!-- Les différents filtres -->
<div class="filter">
  <div class="type-filter">
    <label for="price-select" class="title-filter">Prix :</label>
    <select name="price" id="price-select">
      <option value="Indifférent">Indifférent</option>
      <option value="Moins de 10 000 €€">Moins de 10 000 €</option>
      <option value="Entre 10 000 et 20 000 €">Entre 10 000 et 20 000 €</option>
      <option value="Entre 20 000 et 30 000 €">Entre 20 000 et 30 000 €</option>
      <option value="Entre 30 000 et 40 000 €">Entre 30 000 et 40 000 €</option>
    </select>
  </div>

  <div class="type-filter">
    <label for="mileage-select" class="title-filter">Kilométrage :</label>
    <select name="mileages" id="mileage-select">
      <option value="Indifférent">Indifférent</option>
      <option value="De 10 000 à 50 000 km">De 10 000 à 50 000 km</option>
      <option value="De 50 000 à 100 000 km">De 50 000 à 100 000 km</option>
      <option value="De 100 000 à 150 000 km">De 100 000 à 150 000 km</option>
      <option value="Plus de 150 000 km">Plus de 150 000 km</option>
    </select>
  </div>

  <div class="type-filter">
    <label for="year-select" class="title-filter">Année de mise en circulation :</label>
    <select name="year" id="year-select">
      <option value="Indifférent">Indifférent</option>
      <option value="2012">2012</option>
      <option value="2017">2017</option>
      <option value="2018">2018</option>
      <option value="2019">2019</option>
      <option value="2020">2020</option>
    </select>
  </div>
</div>

<!-- La card des voitures d'occasion -->
<?php 
 $car = getCarsById($pdo, $id);
 foreach ($cars as $key => $car) {
?>

<section class="container">
<div class="wrapper">
    <div class="product-img">
      <img src="<?= $car["image"]?>" class="img-card">
    </div>
    <div class="product-info">
      <div class="product-text">
        <h1 class="title-card"><?= $car["brand"]["model"]?></h1>
        <h2 class=subtitle-card><?= $car["description"]?></h2>
        <p class=para-card>Année :<?= $car["year"]?>  <br> Kilométrage : <?= $car["mileage"]?> <br> Energie : <?= $car["energy"]?> </p>
        <p class="price"><strong><?= $car["price"]?></strong></p>
        <form action="detailvoit.php" method="get" target="_blanck"><button type="submit" class="btn1 outline" >Details</button></form>
      </div>
    </div>
  </div>
</section> 

<?php } ?> 

<?php require_once __DIR__ ."/templates/footer.php";  ?>
