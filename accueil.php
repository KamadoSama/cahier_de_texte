<?php 
session_start();
if(!isset($_SESSION['role'])){
  header('Location: ./index.php');
}
if(empty($_SESSION['role'])){
  header('Location: ./index.php');
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Page d'accueil</title>
    <link rel="stylesheet" type="text/css" href="./css/accueil.css">
    <?php include("./header.php"); ?>
    <section>
      <div class="back_image"></div>
      
    </section>
    <!-- <div class="container">
      <h1 class="typing-effect"></h1>
      <div class="button-container">
        <a href="./enregistrer_user.php" class="button">Ajouter un enseignant</a>
        <a href="./cahier_text.php" class="button">Voir les cours</a>
      </div>
    </div> -->
    <script src="./js/burger.js"></script>
    <script src="./js/cursor.js"></script>
    <?php include("./footer.php"); ?>
