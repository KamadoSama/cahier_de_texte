<!DOCTYPE html>
<html>
  <head>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des cours</title>
    <link rel="stylesheet" type="text/css" href="./css/cahier_text.css">
    <?php include("./header.php"); ?>
    <div class="container">
      <h1>Liste des cours</h1>
      <table>
        <thead>
          <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>UE</th>
            <th>Heure de début</th>
            <th>Heure de fin</th>
            <th>Volume horaire</th>
            <th>Contenu</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>TAHO</td>
            <td>Ben</td>
            <td>Mathématiques</td>
            <td>09:00</td>
            <td>10:30</td>
            <td>30</td>
            <td>Cours sur les équations différentielles</td>
          </tr>
          <tr>
            <td>MENSAH</td>
            <td>Luc</td>
            <td>Informatique</td>
            <td>14:00</td>
            <td>16:00</td>
            <td>60</td>
            <td>Cours sur les bases de données</td>
          </tr>
          <tr>
            <td>AMION</td>
            <td>Davy</td>
            <td>Anglais</td>
            <td>11:00</td>
            <td>12:30</td>
            <td>30</td>
            <td>Cours sur la grammaire anglaise</td>
          </tr>
        </tbody>
      </table>
    </div>
    <?php include("./footer.php"); ?>
