<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once('php/bdd.php');

$pdo = DBConnect();
if (isset($_POST['formconnect'])) {
    $mailconnect = htmlspecialchars($_POST['mailconnect']);
    $mdpconnect = ($_POST['mdpconnect']);

    if (!empty($mailconnect) and !empty($mdpconnect)) {
        $requser = $pdo->prepare("SELECT * FROM users WHERE email = ?");
        $requser->execute(array($mailconnect));
        $userexist = $requser->fetch();
        if ($userexist && password_verify($_POST['mdpconnect'], $userexist['hash_pass'])) {
            $userinfo = $requser->fetch();
            $_SESSION['id'] = $userinfo['id'];
            $_SESSION['mail'] = $userinfo['mail'];
            $_SESSION['role'] = $userinfo['role'];
            header("Location:staff.php?id=" . $_SESSION['id']);
        } else {
            $erreur = "Mauvais mail ou mot de passe";
        }
    } else {
        $erreur = "tous les champs doivent etre complétés";
    }
}
?>

<!DOCTYPE html>

<head>
    <title>Connexion</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="stylesheet" href="assets/css/style.min.css" />
</head>

<body>
    <?php require_once('header.php'); ?>

    <main class="connexion">
        <div class="center">
            <div>
                <h3>Connexion</h3>
                <form method="post" action="">
                    <div class="form">
                        <label for="mailconnect">Mail :</label>
                        <input id="mailconnect" type="email" name="mailconnect" placeholder="votre@mail.fr" required />
                        <label for="mdpconnect"> Votre mot de passe:</label>
                        <input id="mdpconnect" type="password" name="mdpconnect" placeholder="Mot de passe" require />

                        <input class="button" name="formconnect" type="submit" value="Connexion" />
                        <?php
                        if (isset($erreur)) {
                            echo $erreur;
                        }
                        ?>
                    </div>
                </form>
            </div>
        </div>
    </main>



    <?php require_once('footer.php'); ?>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="assets/js/scripts.js"></script>
    <script src="https://kit.fontawesome.com/86d37fbec9.js" crossorigin="anonymous"></script>
</body>

</html>