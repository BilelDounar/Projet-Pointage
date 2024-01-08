<?php
require('../inc/function.php');

if (isLogged()) {
    header("Location: index.php");
}

$errors = array();

if (!empty($_POST['submitted'])) {
    // Faille XSS
    $nb_week = cleanXss('nb_week');
    $date_debut = cleanXss('date_debut');
    $date_fin = cleanXss('date_fin');


    // validation Email
    $errors = validText($errors, $nb_week, 'nb_week', 1, 2,);

    // If no errors
    if (count($errors) == 0) {
        $sql = "INSERT INTO pointage (nb_week, date_debut, date_fin)
                VALUES ( :nb_week , :date_debut, :date_fin)";
        $query = $pdo->prepare($sql);
        $query->bindValue('nb_week',   $nb_week, PDO::PARAM_INT);
        $query->bindValue('date_debut',   $date_debut, PDO::PARAM_STR);
        $query->bindValue('date_fin',   $date_fin, PDO::PARAM_STR);
        $query->execute();
        // header('Location: login.php');
    }
}

include('../view/header.php'); ?>

<section class="mobile">
    <section class="infos">

        <div class="bck_logo">
            <div class="logo"><a href="index.php">
                    <img src="asset/img/logo.png" alt="logo">
                </a>
            </div>
        </div>
        <div class="wrap">
            <div class="form">
                <form action="" method="post" novalidate>

                    <div>
                        <label for="nb_week">Nom de Chantier<focus>*</focus></label>
                        <input type="text" name="nb_week" id="nb_week" placeholder="Nom de Chantier" value="<?php getPostValue('nb_week'); ?>">
                        <span class="erreur"><?php viewError($errors, 'nb_week'); ?></span>
                    </div>
                    <div class="double_input">
                        <div>
                            <label for="date_debut">Jour<focus>*</focus></label>
                            <input type="text" name="date_debut" id="date_debut" placeholder="Ex: Lundi" value="<?php getPostValue('date_debut'); ?>">
                            <span class="erreur"><?php viewError($errors, 'date_debut'); ?></span>

                        </div>
                        <div>
                            <label for="date_debut">Nombre d’heure:<focus>*</focus></label>
                            <input type="text" name="date_debut" id="date_debut" placeholder="Ex: 7" value="<?php getPostValue('date_debut'); ?>">
                            <span class="erreur"><?php viewError($errors, 'date_debut'); ?></span>
                        </div>
                    </div>
                    <div class="double_input">
                        <div>
                            <label for="date_debut">Type d’heure:<focus>*</focus></label>
                            <input type="text" name="date_debut" id="date_debut" placeholder="Ex: Jour" value="<?php getPostValue('date_debut'); ?>">
                            <span class="erreur"><?php viewError($errors, 'date_debut'); ?></span>
                        </div>
                        <div>
                            <label for="date_debut">Véhicule utilisé:<focus>*</focus></label>
                            <input type="text" name="date_debut" id="date_debut" placeholder="Ex: Personnel" value="<?php getPostValue('date_debut'); ?>">
                            <span class="erreur"><?php viewError($errors, 'date_debut'); ?></span>
                        </div>
                    </div>
                    <div>
                        <label for="date_fin">Lieu<focus>*</focus></label>
                        <input type="text" name="date_fin" id="date_fin" placeholder="Ex: Rouen, Mairie" value="<?php getPostValue('date_fin'); ?>">
                        <span class="erreur"><?php viewError($errors, 'date_fin'); ?></span>
                    </div>
                    <div>
                        <label for="date_fin">Descriptif des tâches<focus>*</focus></label>
                        <input type="text" name="date_fin" id="date_fin" placeholder="Ex: Reunion" value="<?php getPostValue('date_fin'); ?>">
                        <span class="erreur"><?php viewError($errors, 'date_fin'); ?></span>
                    </div>

                    <input class="button submit_button" type="submit" name="submitted" value="ENVOYER" class="submit_set">

                </form>
            </div>
    </section>
</section>

<?php include('../view/footer.php');
