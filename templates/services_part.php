<?php
    if ($service["picture"] === null) {
        $imagePath =  _SERVICES_IMAGES_FOLDER_."default-service.jpg";
    } else {
        $imagePath =  _SERVICES_IMAGES_FOLDER_.$service["picture"];
    }
?>

<div class="mecanique">
                <img src="<?=$service["picture"]?>" class="photos-services">
                <h3 class="h2title"><?=$service["title"]?></h3>
    
                <div class="para-services">
                    <p><?=$service["content"]?></p>
                </div>
            </div>