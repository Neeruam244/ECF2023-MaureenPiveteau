<?php require_once 'templates/header.php'; ?>

<!-- Formulaire pour se connceter à son espace (admin/employé) -->

<?php foreach ($messages as $message) { ?>
    <div class="alert alert-success" role="alert">
        <?= $message; ?>
    </div>
<?php } ?>
<?php foreach ($errors as $error) { ?>
    <div class="alert alert-danger" role="alert">
        <?= $error; ?>
    </div>
<?php } ?>

<div class="form-container">
    <p class="title-login">Login</p>
        <form class="form" method="POST" action="login.php">
            <div class="groupinput">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="">
            </div>

            <div class="groupinput">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password" placeholder="">
                    
                <div class="forgot">
                    <a rel="noopener noreferrer" href="#">Forgot Password ?</a>
                </div>
            </div>

            <input class="sign" type="submit" value="seConnecter" name="loginUser" target="_blanck">
        </form>
</div>


<?php require_once 'templates/footer.php'; ?>