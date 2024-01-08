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
        header('Location: infos.php');
    }
}

include('../view/header.php'); ?>

<section class="mobile">
    <section class="new-week">

        <div class="bck_logo">
        <div class="logo"><a href="index.php">
                    <img src="asset/img/logo.png" alt="logo">
                </a>
            </div>        </div>
        <div class="wrap">
            <div class="form">
                <h1>Nouvelle Semaine</h1>
                <form action="" method="post" novalidate>

                    <div>
                        <label for="nb_week">Numéro de semaine<focus>*</focus></label>
                        <input type="text" name="nb_week" id="nb_week" placeholder="Numéro de semaine" value="<?php getPostValue('nb_week'); ?>">
                        <span class="erreur"><?php viewError($errors, 'nb_week'); ?></span>
                        <div>
                            <label for="date_debut">Date de début de semaine<focus>*</focus></label>
                            <input type="date" name="date_debut" id="date_debut" placeholder="Sélectionnez une date" value="<?php getPostValue('date_debut'); ?>">
                            <span class="erreur"><?php viewError($errors, 'date_debut'); ?></span>
                        </div>
                        <div>
                            <label for="date_fin">Date de fin de semaine<focus>*</focus></label>
                            <input type="date" name="date_fin" id="date_fin" placeholder="Ex: XX/XX/XXXX" value="<?php getPostValue('date_fin'); ?>">
                            <span class="erreur"><?php viewError($errors, 'date_fin'); ?></span>

                        </div>

                        <input class="button submit_button" type="submit" name="submitted" value="ENVOYER" class="submit_set">

                </form>
            </div>
    </section>
</section>

<?php include('../view/footer.php');
