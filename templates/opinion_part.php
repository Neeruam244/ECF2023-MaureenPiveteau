<?php
    if ($publish_opinion["imgNote"] === null) {
        $imagePath =  _STARS_IMAGES_FOLDER_."default-stars.jpg";
    } else {
        $imagePath =  _STARS_IMAGES_FOLDER_.$publish_opinion["imgNote"];
    }
?>
</div>

<div class="slide-avis">
        <!--slideshow container-->    
            <div class="slideshow-container">
                <!--Full with slides and quotes-->
                <div class="mySlides">
                    <q><?=$publish_opinion["opinion"]?></q>  
                    <p class="author"><?=$publish_opinion["client_name"]?><img src="<?=$publish_opinion['imgNote'] ?>" width="120px" height="20px" class="stars"></p>
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