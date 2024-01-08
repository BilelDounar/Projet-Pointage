<?php
require('../inc/function.php');



$mail = '';


$errors = array();
if (!empty($_POST['submitted'])) {
    // Faille XSS
    $mail = cleanXss('mail');
    $password = cleanXss('password');
    // Validation
    $sql = "SELECT * FROM users
            WHERE mail = :mail";
    $query = $pdo->prepare($sql);
    $query->bindValue('mail', $mail, PDO::PARAM_STR);
    $query->execute();
    $user = $query->fetch();
    if (!empty($user)) {
        if (password_verify($password, $user['password'])) {
            $_SESSION['user'] = array(
                'id'     => $user['id'],
                'nom' => $user['nom'],
                'prenom' => $user['prenom'],
                'mail'  => $user['mail'],
                'role'   => $user['role'],
                'token'   => $user['token'],
                'created_at'   => $user['created_at'],
            );
            header('Location: index.php');
        } else {
            $errors['login'] = 'Erreurs credentials';
        }
    } else {
        $errors['login'] = 'Erreurs credentials';
    }
}

include('../view/header.php'); ?>

<section class="mobile">
    <section class="login">

        <div class="bck_logo">
        <div class="logo"><a href="index.php">
                    <img src="asset/img/logo.png" alt="logo">
                </a>
            </div>
        </div>
        <div class="wrap">
            <div class="form">
                <h1>Connexion</h1>
                <form action="" method="post">
                    <div>
                        <label for="mail">Email<focus>*</focus></label>
                        <input type="text" name="mail" id="mail" placeholder="Email">
                        <span class="erreur"><?php viewError($errors, 'login'); ?></span>
                    </div>
                    <div>
                        <label for="password">Mot de Passe<focus>*</focus></label>
                        <input type="text" name="password" id="password" placeholder="Mot de Passe">
                    </div>

                    <input type="submit" name="submitted" class="button submit_button" value="Envoyer">
                </form>
            </div>
            <span class="design">Designed & Executed by Bilel D.</span>
    </section>
</section>

<?php include('../view/footer.php');
