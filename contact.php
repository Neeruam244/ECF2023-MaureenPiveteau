<?php 
require_once __DIR__."/lib/config.php";
require_once __DIR__."/templates/header.php"; 
?>


<?php 
    $messages = [];
    $errors = [];

    if (isset($_POST["sendContact"])) {
        if (!isset($_POST["email"]) || !filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
            $errors[] = "L'adresse e-mail n'est pas valide";
        }
        if (!isset($_POST["message"]) || $_POST["message"] == "") {
            $errors[] = "Le message ne doit pas être vide";
        }
        if (!$errors) {
            $to = _APP_EMAIL_;
            $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
            $subject = "[Garage V Parrot] Formulaire de contact";
            $emailContent = "Email : $email<br>"
                        ."Message : <br>".nl2br(htmlentities($_POST["message"]));
            $headers = "From: "._APP_EMAIL_ . "\r\n" .
                        "MIME-Version: 1.0" . "\r\n" .
                        "Content-type: text/html; charset=utf-8";
    
    
    
            if(mail($to, $subject, $emailContent, $headers)) {
                $messages[] = "Votre email a bien été envoyé";
    
            } else {
                $errors[] = "Une erreur s'est produite durant l'envoi";
            }
        }

    }

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
                        <input required="" type="text" name="text" autocomplete="off" class="input"> 
                        <label class="user-label">Vote nom</label> 
                    </div>
                    <div class="input-group">
                        <input required="" type="text" name="text" autocomplete="off" class="input"> 
                        <label class="user-label">Votre prénom</label> 
                    </div>
                    <div class="input-group">
                        <input required="" type="text" name="text" autocomplete="off" class="input"> 
                        <label class="user-label">Votre adresse mail</label> 
                    </div>
                    <div class="input-group">
                        <input required="" type="text" name="text" autocomplete="off" class="input"> 
                        <label class="user-label">Votre téléphone</label> 
                    </div>
                    <div class="input-group">
                      <textarea rows="7" cols="30" required="" type="text" name="text" autocomplete="off" class="input"></textarea>
                        <label  class="user-label">Message</label>
                    </div>
                    <div>
                        <button type="submit" class="button1" value='Envoyer' name='sendContact'>Envoyer !</button>  
                    </div>
                </div>
            </div>  
        </form>

<?php require_once __DIR__."/templates/footer.php"; ?>