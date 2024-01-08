<?php
require('../inc/function.php');

if (!empty($_SESSION['user']['nom']) || !empty($_SESSION['user']['prenom']) || !empty($_SESSION['user']['mail']) || !empty($_SESSION['user']['id'])) {
} else {
    header("Location: index.php");
}

include('../view/header.php'); ?>

<section class="mobile">
    <section class="choose">

        <div class="bck_logo">
        <div class="logo"><a href="index.php">
                    <img src="asset/img/logo.png" alt="logo">
                </a>
            </div>
        </div>
        <div class="wrap">
            <div>
                <p>Selectionner “Nouvelle Semaine?” afin de débuter une nouvelle semaine de pointage</p>
                <a href="new_week.php" class="button_white button">NOUVELLE SEMAINE ?</a>
            </div>
            <div>
                <p>Selectionner “Continuer” afin de continuer votre semaine de pointage</p>
                <a href="infos.php" class="button_green button">CONTINUER</a>
            </div>
            <?php include('../view/nav.php'); ?>
        </div>
    </section>
</section>

<?php include('../view/footer.php');
