<?php 

require_once __DIR__. "/lib/config.php";
require_once __DIR__. "lib/session.php";
adminOnly();

require_once __DIR__. "/templates/header.php"; 
?> 

<button class="logout"><span>Se déconnecter</span></button>
        <h1 class="bo-admin">Back-office administrateur</h1> 

        <section>
            <h2 class="subtitle-bo">Création du compte employé</h2>
            <div>
                <table class="body-table">
                    <thead>
                        <tr>
                            <th scope="col">Nom</th>
                            <th scope="col">Email</th>
                            <th scope="col">Mot de passe</th>
                            <th scope="col">Rôle</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($user as $uers) { ?>
                            <tr>
                              <th scope="row"><?= $users["Nom"]; ?></th>
                              <td><?= $user["Email"]; ?></td>
                              <td><?= $user["Mot de passe"]; ?></td>
                              <td><?= $user["Rôle"]; ?></td>
                              <td>
                                <a href="user.php?id=<?= $user['id'] ?>" class="ajout">Ajouter</a>
                                <a href="user.php?id=<?= $suser['id'] ?>" class="modif">Modifier</a>
                                <a href="user_delete.php?id=<?= $user['id'] ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet employé ?')" class="suppr">Supprimer</a>
                                </td>
                            </tr>
                          <?php } ?>
                    </tbody>
                </table>
            </div>

            
        </section>

        <section>
            <h2 class="subtitle-bo">Modifications des services</h2>

            <table class="body-table">
                <thead>
                    <tr>
                        <th scope="col">Titres</th>
                        <th scope="col">Description</th>
                        <th scope="col">Photos</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($service as $services) { ?>
                        <tr>
                          <th scope="row"><?= $service["title"]; ?></th>
                          <td><?= $service["content"]; ?></td>
                          <td><?= $service["photos"]; ?></td>
                          <td>
                            <a href="service.php?id=<?= $service['id'] ?>" class="ajout">Ajouter</a>
                            <a href="service.php?id=<?= $service['id'] ?>" class="modif">Modifier</a>
                            <a href="service.php?id=<?= $service['id'] ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce service ?')" class="suppr">Supprimer</a>
                            </td>
                        </tr>
                      <?php } ?>
                </tbody>
            </table>
        </section>

        <section>
            <h2 class="subtitle-bo">Modification des horaires</h2>

            <table class="body-table">
                <thead>
                    <tr>
                        <th scope="col">Jours de la semaine</th>
                        <th scope="col">Horaires</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($planning as $plannings) { ?>
                        <tr>
                          <th scope="row"><?= $planning["planning1"]; ?></th>
                          <td><?= $planning["hours1"]; ?></td>
                          <td>
                            <a href="planning.php?id=<?= $planning['id'] ?>" class="ajout">Ajouter</a>
                            <a href="planning.php?id=<?= $planning['id'] ?>" class="modif">Modifier</a>
                            <a href="planning.php?id=<?= $planning['id'] ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet article ?')" class="suppr">Supprimer</a>
                            </td>
                        </tr>
                      <?php } ?>
                </tbody>
            </table>
        </section>

<?php require_once __DIR__ ."/templates/footer.php";  ?>