<?php 

function enrengistrer_user($nom,$prenom,$username,$contact,$password,$role,$specialite,$sexe,$grade){
    if(require("connexion.php")){
        echo "bnesdq";
        if ($role == 'enseignant') {
            // Ajouter l'enseignant à la base de données
            $req = $access->prepare('INSERT INTO ENSEIGNANT (ID_SPECIALITE, ID_GRADE, ID_SEXE, NOM, PRENOM, CONTACT) VALUES (?,?,?,?,?,?)');
            $req->execute(array( $specialite, $grade,$sexe,$nom,$prenom,$contact));
            $id_enseignant = $access->lastInsertId(); // Récupérer l'ID de l'enseignant créé
            echo "ok!!";
        } else {
            $id_enseignant = null; // Si l'utilisateur n'est pas un enseignant, l'ID sera null
        }
        
        // Ajouter l'utilisateur à la base de données
        $req = $access->prepare('INSERT INTO utilisateur (username, password, role, id_enseignant) VALUES (?, ?, ?,?)');
        $req->execute(array($username,$password, $role, $id_enseignant
        ));
        $req->closeCursor();
        header("Location: ../enregistrer_user.php");
        exit();
    }
}
function connexion_user($username,$password){
  if(require("connexion.php")){
    $req=$access->prepare('SELECT `password` FROM `utilisateur` WHERE username=?; ');
    $req->execute(array($username));
    
    if($req->rowCount() == 1){
      
      $data = $req->fetchAll(PDO::FETCH_OBJ);

      foreach($data as $pass){
        $mdp = $pass->password;
      }

      if($mdp == $password)
      {
        header("Location: ../accueil.php");
      }
      else{
        header("Location: ../index.php");
      }

    }
    $req->closeCursor();
  }
  }

function afficher_grade(){
    if(require("connexion.php"))
  {
    $req=$access->prepare("SELECT * FROM grade ORDER BY ID_GRADE DESC");
    $req->execute();

    $data = $req->fetchAll(PDO::FETCH_OBJ);

    return $data;

    $req->closeCursor();
  }
}

function afficher_sexe(){
    if(require("connexion.php"))
  {
    $req=$access->prepare("SELECT * FROM sexe ORDER BY ID_SEXE DESC");
    $req->execute();

    $data = $req->fetchAll(PDO::FETCH_OBJ);

    return $data;

    $req->closeCursor();
  }
}

function afficher_specialite(){
    if(require("connexion.php"))
  {
    $req=$access->prepare("SELECT * FROM specialite ORDER BY ID_SPECIALITE DESC");
    $req->execute();

    $data = $req->fetchAll(PDO::FETCH_OBJ);

    return $data;

    $req->closeCursor();
  }
}

function afficher_ue(){
  if(require("connexion.php"))
{
  $req=$access->prepare("SELECT * FROM ue ORDER BY ID_UE DESC");
  $req->execute();

  $data = $req->fetchAll(PDO::FETCH_OBJ);

  return $data;

  $req->closeCursor();
}
}

?>