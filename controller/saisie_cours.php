<?php 
require("../config/fonction.php");
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "yeadd";
    $nom = trim($_POST['nom']);
    $prenom = trim($_POST['prenom']);
    $heure_debut = $_POST['heure-debut'];
    $heure_fin = $_POST['heure-debut'];
    $contenu = trim($_POST['contenu']);
    
  
    if (!empty($nom) && !empty($prenom) && !empty($heure_debut) && !empty($heure_fin)
        && !empty($contenu)) {
        echo "yo know";
        
        $nom = htmlspecialchars($_POST['nom']);
        $prenom = htmlspecialchars($_POST['prenom']);
        $heure_debut = htmlspecialchars($_POST['heure-debut']);
        $heure_fin = htmlspecialchars($_POST['heure-debut']);
        $contenu = htmlspecialchars($_POST['contenu']);

        
        enrengistrer_user($nom, $prenom, $username, $contact, $password, $role, $specialite, $sexe, $grade);
    }
  }
?>