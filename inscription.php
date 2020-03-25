<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once('php/bdd.php');

$pdo= DBConnect();

if(isset($_POST['forminscription']))
{
    if(!empty($_POST['mail']) AND !empty($_POST['mail2']) AND !empty($_POST['mdp']) AND !empty($_POST['mdp2']))
    {
    $mail = htmlspecialchars($_POST['mail']);
    $mail2 = htmlspecialchars($_POST['mail2']);
    $mdp = ($_POST['mdp']);
    $mdp2 = ($_POST['mdp2']);
    $role = $_POST['role'];
    
        if($mail == $mail2)
        {
            if(filter_var($mail, FILTER_VALIDATE_EMAIL))
            {

                $reqmail = $pdo->prepare("SELECT * FROM users WHERE email = ?");
                $reqmail->execute(array($mail));
                $mailexist = $reqmail->rowCount();
                if ($mailexist == 0)
                {
                    if($mdp == $mdp2)
                    {   
                        $hashedpass = password_hash($mdp, PASSWORD_DEFAULT);
                        $insertuser = $pdo ->prepare("INSERT INTO users (email, hash_pass, role) VALUES (?, ?, ?)");
                        $insertuser ->execute(array($mail, $hashedpass, $role));
                        $erreur = "Le compte a bien etait créer";
                    }
                    else
                    {
                    $erreur = "vos mots de passe ne correspondent pas";
                    }
                }
                else{
                    $erreur = "Un compte associé à cette adresse mail existe déjà";
                }
            }
            else{
                $erreur = "Votre adresse mail n'est pas valide";
            }    
        }
        else
        {
            $erreur = "Les adresses mails ne correspondent pas";
        }
    } 
    else 
    {
        $erreur = "Tous les champs doivent etre rempli";
    }
}



?>

<!DOCTYPE html>

<head>
    <title>Chambres</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="stylesheet" href="assets/css/style.min.css" />
</head>

<body>
    <?php require_once('header.php'); ?>

    

    <main class="inscription">
        <div class="center">
            <div>
                <h3>Incription</h3>

                <form method="post" action="">
                    <div class="form">
                        <label for="mail">Mail :</label> 
                        <input id="mail" type="email" name="mail" placeholder="votre@mail.fr" required />
                        <label for="mail2"> Confirmation du mail :</label> 
                        <input id="mail2" type="email" name="mail2" placeholder="votre@mail.fr" required />
                        <label for="mdp"> Mot de passe :</label> 
                        <input id="mdp" type="password" name="mdp" placeholder="votre mot de pass" required />
                        <label for="mdp2"> Confirmation du mot de passe :</label> 
                        <input id="mdp2" type="password" name="mdp2" placeholder="confirmer le mdp" required />


                        <label for="role">Role de l'utilisateur :</label> <select id="role" name="role">
                            <option value="staff">staff</option>
                            <option value="receptioniste">réceptioniste</option>
                            <option value="manager">manager</option>

                        </select>
                        
                        <input class="button" name="forminscription" type="submit" value="Créer l'utilisateur" />
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