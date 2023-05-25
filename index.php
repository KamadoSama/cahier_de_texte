<?php 
  require("./config/connexion.php")
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Page de connexion</title>
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    <style>
      body{
        height: 100vh;
      
      overflow: hidden;
    }

    #svg-container {
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      z-index: -1;
    }

    #svg-container svg {
      width: 100%;
      height: 20%;
    }
    </style>
    <!-- <?php include("./header.php") ?> -->
    <div id="svg-container">
      <object type="image/svg+xml" data="./assets/back1.svg" id="animated-svg"></object>
    </div>
    
    <div class="container" >
      
      <div class="login">
        <h1>Connexion</h1>
        <form action="./controller/connexion_sys.php" method="post">
          <label for="username">Nom d'utilisateur:</label>
          <input type="text" id="username" name="username" required>
          <br>
          <label for="password">Mot de passe:</label>
          <input type="password" id="password" name="password" required>
          <br>
          <div class="button-container">
            <button type="submit">Connexion</button>
            <button type="reset">Annuler</button>
          </div>
        </form>
      </div>
    </div>
   
    <!-- <?php include("./footer.php") ?> -->

