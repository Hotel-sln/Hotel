<?php
session_start();
ini_set('display_errors', 1);
error_reporting(E_ALL);

require_once('php/bdd.php');

$pdo= DBConnect();
if(isset($_GET['id']) AND $_GET['id'] > 0)
{
    $getid = intval($_GET['int']);
    $requser = $pdo->prepare('SELECT * FROM user WHERE id = ? ');
    $requser->execute(array($getid));
    $userinfo = $requser->fetch();
}
?>
<html>
    <head>
        <title>Profile</title>
        <meta charset="utf-8">
    </head>
<body>
        <div align="center">
            <h2>Profil</h2>
            <br/> <br/> 
            Mail =
            <?php
            if(isset($erruer))
            {
                echo $erreur;
            }
        
            }
            ?>
        </div>
</body>    
</html>