<?php 
require_once __DIR__."/lib/config.php";
require_once __DIR__."lib/send_email.php";
require_once __DIR__."/templates/header.php"; 
?>


<?php foreach($messages as $message) { ?>
    <div class="alert alert-success">
        <?=$message; ?>
    </div>
<?php } ?>

<?php foreach($errors as $error) { ?>
    <div class="alert alert-success">
        <?=$error; ?>
    </div>
<?php } ?>

<h2 class="title-contact">Besoin d'un renseignements?</h2>
        <p class="para-contact1">Afin de mieux vous renseigner, merci de remplir le formulaire ci dessous</p>

        <aside>
            <img src="assets/images/contact.jpg" alt="contact" class="img-contact">
        </aside>    

        <form method="post" action="" id="myForm"></form>
            <div class="body-form">
                <div>
                    <div class="input-group">
                        <input required="" type="text" name="text" autocomplete="off" class="input" id="nom"> 
                        <label class="user-label" for="nom">Vote nom</label> 
                    </div>
                    <div class="input-group">
                        <input required="" type="text" name="text" autocomplete="off" class="input" id=prenom> 
                        <label class="user-label" for="prenom">Votre prénom</label> 
                    </div>
                    <div class="input-group">
                        <input required="" type="text" name="text" autocomplete="off" class="input" id="courriel"> 
                        <label class="user-label" for="courriel">Votre adresse mail</label> 
                    </div>
                    <div class="input-group">
                        <input required="" type="text" name="text" autocomplete="off" class="input" id="tel"> 
                        <label class="user-label" for="tel">Votre téléphone</label> 
                    </div>
                    <div class="input-group">
                      <textarea rows="7" cols="30" required="" type="text" name="text" autocomplete="off" class="input" id="lemessage"></textarea>
                        <label  class="user-label" for="lemessage">Message</label>
                    </div>
                    <div>
                        <input type="submit" class="button1" value='Envoyer' name='sendContact'>
                    </div>
                </div>
            </div>  
        </form>

<?php require_once __DIR__."/templates/footer.php"; ?>