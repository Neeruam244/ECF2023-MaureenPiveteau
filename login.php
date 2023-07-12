<?php
require_once 'lib/config.php';
require_once 'lib/session.php';
require_once 'lib/pdo.php';
require_once 'lib/user.php';

require_once 'templates/header.php';


$errors = [];
$messages = [];

if (isset($_POST['loginUser'])) {

    $user = verifyUserLoginPassword($pdo, $_POST['email'], $_POST['password']);

    if ($user) {
        session_regenerate_id(true);
        $_SESSION['user'] = $user;
        if ($user['role'] === 'administrateur') {
            header('location: admin_index.php');
        } elseif 
            ($user['role'] !== 'administrateur') {
                header('location: employe_index.php');
            }
        else {
            header('location: index.php');
        }
    } else {
        $errors[] = 'Email ou mot de passe incorrect';
    }

  }

?>

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

<!-- Formulaire pour se connceter à son espace (admin/employé) -->

<div class="form-container">
    <p class="title-login">Login</p>
        <form class="form" method="POST">
            <div class="groupinput">
                <label for="email">Email</label>
                <input type="email" name="mail" id="mail" placeholder="">
            </div>

            <div class="groupinput">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" id="password" placeholder="">
                    
                <div class="forgot">
                    <a rel="noopener noreferrer" href="#">Forgot Password ?</a>
                </div>
            </div>

            <button class="sign" type="submit" value="seConnecter" name="loginUser">Se connecter</button>
        </form>
</div>


<?php require_once 'templates/footer.php'; ?>