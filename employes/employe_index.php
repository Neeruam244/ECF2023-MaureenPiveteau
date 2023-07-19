<?php 

require_once __DIR__. "/lib/config.php";
require_once __DIR__. "lib/session.php";
employeeOnly();

require_once __DIR__. "/templates/header.php"; 
?> 

<button class="logout"><span>Se déconnecter</span></button>
        <h1 class="bo-admin">Back-office employé</h1> 

        <section>
            <h2 class="subtitle-bo">Gestion des voiures d'occasions</h2>
            <div>
                <table class="body-table">
                    <thead>
                        <tr>
                            <th scope="col">Marque</th>
                            <th scope="col">Modele</th>
                            <th scope="col">Rapide description</th>
                            <th scope="col">Année</th>
                            <th scope="col">Mise en circulation</th>
                            <th scope="col">Kilométrage</th>
                            <th scope="col">Energie</th>
                            <th scope="col">Prix</th>
                            <th scope="col">Boite de vitesse</th>
                            <th scope="col">Couleur</th>
                            <th scope="col">Nombres de portes</th>
                            <th scope="col">Puissance fiscale</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($car as $key => $cars) { ?>
                            <tr>
                              <th scope="row"><?= $cars["brand"]; ?></th>
                              <td><?= $cars["model"]; ?></td>
                              <td><?= $cars["description"]; ?></td>
                              <td><?= $cars["year"]; ?></td>
                              <td><?= $cars["created_at"]; ?></td>
                              <td><?= $cars["mileage"]; ?></td>
                              <td><?= $cars["energy"]; ?></td>
                              <td><?= $cars["transmission"]; ?></td>
                              <td><?= $cars["color"]; ?></td>
                              <td><?= $cars["doors_number"]; ?></td>
                              <td><?= $cars["fiscal_power"]; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <table class="body-table">
                    <thead>
                        <tr>
                            <th scope="col">Equipements intérieurs</th>
                            <th scope="col">Equipements extérieurs</th>
                            <th scope="col">Sécurité</th>
                            <th scope="col">Autres équipements</th>
                            <th scope="col">Photos</th>
                            <th scope="col">Actions</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($car as $key => $cars) { ?>
                            <tr>
                              <td><?= $cars["interior_equipments"]; ?></td>
                              <td><?= $cars["exterior_equipments"]; ?></td>
                              <td><?= $cars["security_equipments"]; ?></td>
                              <td><?= $cars["others_equipments"]; ?></td>
                              <td><?= $cars["photos"]; ?></td>
                              <td>
                                <a href="users.php?id=<?= $users['id'] ?>" class="ajout">Ajouter</a>
                                <a href="users.php?id=<?= $susers['id'] ?>" class="modif">Modifier</a>
                                <a href="users_delete.php?id=<?= $users['id'] ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet article ?')" class="suppr">Supprimer</a>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

            
        </section>

        <section>
            <h2 class="subtitle-bo">Les avis client</h2>
                <h3 class="sous-subtitle">Créer un avis client</h3>

            <table class="body-table">
                <thead>
                    <tr>
                        <th scope="col">Nom du client</th>
                        <th scope="col">Son avis</th>
                        <th scope="col">Sa note</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($opinion as $opinions) { ?>
                        <tr>
                          <th scope="row"><?= $opinion["client_name"]; ?></th>
                          <td><?= $opinion["opinion"]; ?></td>
                          <td><?= $opinion["imgNote"]; ?></td>
                          <td>
                            <a href="traitement_avis.php?id=<?= $opinion['id'] ?>" class="ajout">Ajouter</a>
                            <a href="traitement_avis.php?id=<?= $opinion['id'] ?>" onclick="return confirm('Êtes-vous sûr de vouloir supprimer cet article ?')" class="suppr">Supprimer</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

                <h3 class="sous-subtitle">Modérer un avis clients</h3>

            <table class="body-table">
                <thead>
                    <tr>
                        <th scope="col">Nom du client</th>
                        <th scope="col">Son avis</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($opinion as $opinion) { ?>
                        <tr>
                          <th scope="row"><?= $opinion["client_name"]; ?></th>
                          <td><?= $opinion["opinion"]; ?></td>
                          <td>
                            <a href="opinion.php?id=<?= $opinion['id'] ?>" class="modif">Modifier</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

                <h3 class="sous-subtitle">Publier un avis clients</h3>

            <table class="body-table">
                <thead>
                    <tr>
                        <th scope="col">Nom du client</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($opinion as $opinions) { ?>
                        <tr>
                          <th scope="row"><?= $opinion["client_name"]; ?></th>
                          <td>
                            <a href="traitement_avis.php?id=<?= $opinion['id'] ?>" class="ajout">Publier</a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </section>

<?php require_once __DIR__ ."/templates/footer.php";  ?>