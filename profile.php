<?php 
    require("./config/fonction.php");
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    
    if(!isset($_SESSION['role'])){
      header('Location: ./index.php');
    }
    if(empty($_SESSION['role'])){
      header('Location: ./index.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/profil.css">
    <link rel="stylesheet" href="./bootstrap-5.3.0-alpha3-dist/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <script src="./bootstrap-5.3.0-alpha3-dist/bootstrap-5.3.0-alpha3-dist/js/bootstrap.min.js"></script>
    <title>Profil</title>
<?php include("./header.php") ?>
    <div id="deco_mini">
        
    </div>
    <div id="container_title">
        <h2>Information utilisateur</h2>
    </div>
    <main>
        <section id="container_nom_prenom">
            <div class="icon_profile">
            <object type="image/svg+xml" data="./assets/profile.svg" id="animated-svg" ></object>
            </div>
            <div class="nom">
                <h2>TAHO Ben Arthur</h2>
            </div>
        </section>
        <section id="container_information">
            <div id="container_spe_grad">
                <h3>Specialité: Inteligence Artificielle</h3>
                <h3>Grade: Inteligence Artificielle</h3>
            </div>
            <section>
                <div id="container_username">
                    <h3>Nom d'utilisateur: Kamado12</h3>
                    <button>Modifier le mot de passe</button>
                </div>
            </section>
            <div>
                
            </div>
        </section>
    </main>
    <div id="deco_big">

    </div>
<?php include("./footer.php") ?>