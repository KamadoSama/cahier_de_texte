<?php 
require("../config/fonction.php");
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

if(!isset($_SESSION['role'])){
  header('Location: ../index.php');
}
if(empty($_SESSION['role'])){
  header('Location: ../index.php');
}
$cours = afficher_cours();
?>


<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des cours</title>
    <link rel="stylesheet" type="text/css" href="../css/cahier_text.css">
    <?php include("./header.php"); ?>
    <div class="container">
      <h1>Liste des cours</h1>
      <table>
        <thead>
          <tr>
            <th>UE</th>
            <th>Heure de début</th>
            <th>Heure de fin</th>
            <th>Volume horaire</th>
            <th>Contenu</th>
          </tr>
        </thead>
        <tbody>
            <?php foreach($cours as $cour ):?>
              <tr>

                <td> <?= $cour->LIB_UE ?> </td>
                <td> <?= $cour->DEBUT_ENS ?></td>
                <td> <?= $cour->FIN_ENS ?></td>
                <td> <?= $cour->VOL_ENS ?></td>
                <td> <?= $cour->CONTENU ?></td>
              </tr>
            <?php endforeach; ?>
         </tbody>
      </table>
    </div>
    <script src="../js/burger.js"></script>
    <?php include("../footer.php"); ?>
