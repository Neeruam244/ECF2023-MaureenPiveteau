<?php 

require_once __DIR__ . "/lib/config.php";
require_once __DIR__ . "/lib/session.php";
require_once __DIR__ . "/lib/service.php";
require_once __DIR__ . "/lib/traitement_avis.php";

require_once __DIR__ . "/templates/header.php"; 
?> 



 <section class="about">
        <img src="assets/images/accueil.jpg" alt="accueil" class="img-about">
        <h2 class="title-bienvenue">Bienvenue au garage V. Parrot ! </h2>

        <p class="para-about">Je suis <strong>Vincent PARROT</strong>, fort de mes 15 années d'expériences dans 
            la réparation automobile, j'ai décidé d'ouvrir en 2021 mon propre garage ici à Toulouse, aux bord de la Garonne. 
            <br>
            <br>
            Depuis maintenant 2 ans, le garage se spécialise dans la vente de véhicules d'occasions multimarques. 
            Toute notre équipe vous accueille sur son parc d'exposition d'une quarantaine de voitures, 
            afin de trouver le véhicule qui vous correspond le mieux. Par nos conseils et une recherche 
            personnalisée, nous vous accompagnons dans votre projet d'achat, tout en respectant vos besoins 
            et votre budget, selon le véhicule recherché.
            <br>
            <br>
            Le maitre-mot de l'atelier est la <strong>qualité</strong>, mes employés et moi font tout notre possible
            pour vous fournir un service de qualité et personnalisé selon vos besoins. 
        </p>
</section>

    
<section>
    <div class="services" id="lienservices">
        <h2 class="title-service">Nos prestations</h2>

            <div class="icones"> 
                <a href="services.html"><img src="uploads/icones/icone-meca.png" class="icones-services"></a>
                <a href="services.html"><img src="uploads/icones/icone-carrosserie.png" class="icones-services"></a>
                <a href="véhiculesoccas.html"><img src="uploads/icones/icone-vente.png" class="icones-services"></a>
                <a href="services.html"><img src="uploads/icones/icone-entretien.png" class="icones-services"></a>
            </div>

            <div class="icones">
                <p class="para-icones">La mécanique</p>
                <p class="para-icones">La carrosserie</p>
                <p class="para-icones">La ventes de véhicules d'occasion</p>
                <p class="para-icones">L'entretien</p>
            </div>

    </div>  

        <p class="title-services">Un professionalisme et un savoir faire d'une équipe à votre service !</p>

        <?php $service = getServiceById($pdo, $id);  
  
            foreach ($services as $key => $service) { 
            require __DIR__ . "/templates/services_part.php"; 
        } ?>
    
</section>

<section>
    <h2 class="title-avis">Un professionenel de l'entretien automobile</h2>

        <?php $opinion = getOpinionById($pdo, $id);  

            foreach ($opinions as $key => $opinion) { 
                
                if ($opinion["imgNote"] === null) {
                    $imagePath =  _STARS_IMAGES_FOLDER_."default-stars.jpg";
                } else {
                    $imagePath =  _STARS_IMAGES_FOLDER_.$opinion["imgNote"];
                }
            ?>
            
            <div class="slide-avis">
                    <!--slideshow container-->    
                        <div class="slideshow-container">
                            <!--Full with slides and quotes-->
                            <div class="mySlides">
                                <q><?=$opinion["opinion"]?></q>  
                                <p class="author"><?=$opinion["client_name"]?><img src="<?=$imagePath ?>" width="120px" height="20px" class="stars"></p>
                            </div>
            
                            <!--Next/prev button-->
                            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                            <a class="next" onclick="plusSlides(1)">&#10095;</a>
                        </div>
            
                        <!--Dots/bullets/indicators-->
                        <div class="dot-container">
                            <span class="dots" onclick="currentSlide(1)"></span>
                            <span class="dots" onclick="currentSlide(2)"></span>
                            <span class="dots" onclick="currentSlide(3)"></span>
                            <span class="dots" onclick="currentSlide(4)"></span>
                            <span class="dots" onclick="currentSlide(5)"></span>
                            <span class="dots" onclick="currentSlide(6)"></span>
                        </div>
            </div>  
            
        <?php } ?>

        <p class="para-avis">Votre passage chez nous s'est bien passé. <br> Laisser nous votre avis ! </p>

        <aside class="img-avis">
            <img src="assets/images/Votre avis nous intéresse.png">
        </aside>

    <form method="post" action="traitement_avis.php"></form>
        <div class="body-form">
            <div>
                <div class="input-group">
                    <input required="" type="text" name="text" autocomplete="off" class="input" id="client_name"> 
                    <label class="user-label">Vote nom</label> 
                </div>
                
                <div class="input-group">
                    <textarea rows="7" cols="30" required="" type="text" name="text" autocomplete="off" class="input"id="opinion"></textarea>
                      <label  class="user-label">Votre avis</label>
                </div>

                <div class="rating">
                    <input value="star-1" name="star-radio" id="star-1" type="radio">
                    <label for="star-1">
                      <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z" pathLength="360"></path></svg>
                    </label>
                    <input value="star-1" name="star-radio" id="star-2" type="radio">
                    <label for="star-2">
                      <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z" pathLength="360"></path></svg>
                    </label>
                    <input value="star-1" name="star-radio" id="star-3" type="radio">
                    <label for="star-3">
                      <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z" pathLength="360"></path></svg>
                    </label>
                    <input value="star-1" name="star-radio" id="star-4" type="radio">
                    <label for="star-4">
                      <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z" pathLength="360"></path></svg>
                    </label>
                    <input value="star-1" name="star-radio" id="star-5" type="radio">
                    <label for="star-5">
                      <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M12,17.27L18.18,21L16.54,13.97L22,9.24L14.81,8.62L12,2L9.19,8.62L2,9.24L7.45,13.97L5.82,21L12,17.27Z" pathLength="360"></path></svg>
                    </label>
                </div>

                <div>
                    <input type="submit" class="button1" value="Envoyer">  
                </div>
                
            </div>
        </div>  
    </form>
</section>  

<?php require_once __DIR__ ."/templates/footer.php";  ?>