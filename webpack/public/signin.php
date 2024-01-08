<?php
require('../inc/function.php');



$errors = array();

if (!empty($_POST['submitted'])) {
    // Faille XSS
    $nom = cleanXss('nom');
    $prenom = cleanXss('prenom');
    $mail = cleanXss('mail');
    $password = cleanXss('password');
    $password2 = cleanXss('password2');
    // Validations

    // validation Email
    $errors = validmail($errors, $mail, 'mail');
    $errors = validText($errors, $nom, 'nom', 3, 120,);
    $errors = validText($errors, $prenom, 'prenom', 3, 120,);
    // unique email
    if (empty($errors['mail'])) {
        $sql = "SELECT id FROM users WHERE mail = :mail";
        $query = $pdo->prepare($sql);
        $query->bindValue('mail', $mail);
        $query->execute();
        $verifEmail = $query->fetch();
        if (!empty($verifEmail)) {
            $errors['mail'] = 'E-mail déjà pris';
        }
    }
    // Validation des deux passwords
    if (!empty($password) && !empty($password2)) {
        if ($password != $password2) {
            $errors['password'] = 'Vos mots de passe sont différents.';
        } elseif (mb_strlen($password) < 8) {
            $errors['password'] = 'Votre mot de passe est trop court (8 caractères minimum)';
        }
    } else {
        $errors['password'] = 'Veuillez renseigner les mots de passe.';
    }
    // If no errors
    if (count($errors) == 0) {
        $hashPassword = password_hash($password, PASSWORD_DEFAULT);
        $role = 'user';
        $token = generateRandomString(130);
        $sql = "INSERT INTO users (nom, prenom, mail, password, created_at, role, token, id_pointage)
        VALUES (:nom, :prenom, :mail, :pass, NOW(), '$role', '$token', NULL)";
        $query = $pdo->prepare($sql);
        $query->bindValue('nom', ucfirst($nom), PDO::PARAM_STR);
        $query->bindValue('prenom', ucfirst($prenom), PDO::PARAM_STR);
        $query->bindValue('mail',   $mail, PDO::PARAM_STR);
        $query->bindValue('pass',   $hashPassword, PDO::PARAM_STR);
        $query->execute();
        header('Location: login.php');
    }
}

include('../view/header.php'); ?>

<section class="mobile">
    <section class="signin">

        <div class="bck_logo">
        <div class="logo"><a href="index.php">
                    <img src="asset/img/logo.png" alt="logo">
                </a>
            </div>
        </div>
        <div class="wrap">
            <div class="form">
                <h1>INSCRIPTION</h1>
                <form action="" method="post" novalidate>

                    <div>
                        <label for="nom">Nom<focus>*</focus></label>
                        <input type="text" name="nom" id="nom" placeholder="Nom" value="<?php getPostValue('nom'); ?>">
                        <span class="erreur"><?php viewError($errors, 'nom'); ?></span>
                        <div>
                            <label for="prenom">Prénom<focus>*</focus></label>
                            <input type="text" name="prenom" id="prenom" placeholder="Prénom" value="<?php getPostValue('prenom'); ?>">
                            <span class="erreur"><?php viewError($errors, 'prenom'); ?></span>

                        </div>
                        <div>
                            <label for="mail">Email<focus>*</focus></label>
                            <input type="text" name="mail" id="mail" placeholder="Email" value="<?php getPostValue('mail'); ?>">
                            <span class="erreur"><?php viewError($errors, 'mail'); ?></span>

                        </div>
                        <div>
                            <label for="password">Mot de Passe<focus>*</focus></label>
                            <input type="text" name="password" id="password" placeholder="Mot de Passe">
                            <span class="erreur"><?php viewError($errors, 'password'); ?></span>

                        </div>
                        <div>
                            <label for="password2">Confirmer Mot de Passe<focus>*</focus></label>
                            <input type="text" name="password2" id="password2" placeholder="Confirmer Mot de Passe">
                        </div>
                        <input class="button submit_button" type="submit" name="submitted" value="S’Inscrire" class="submit_set">

                </form>
            </div>
            <span class="design">Designed & Executed by Bilel D.</span>
    </section>
</section>

<?php include('../view/footer.php');
