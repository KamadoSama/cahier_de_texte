<?php 

function enrengistrer_user($nom,$prenom,$username,$contact,$password,$role,$specialite,$sexe,$grade){
    if(require("connexion.php")){
        echo "bnesdq";
        if ($role == 'enseignant') {
            
            $req = $access->prepare('INSERT INTO ENSEIGNANT (ID_SPECIALITE, ID_GRADE, ID_SEXE, NOM, PRENOM, CONTACT) VALUES (?,?,?,?,?,?)');
            $req->execute(array( $specialite, $grade,$sexe,$nom,$prenom,$contact));
            $id_enseignant = $access->lastInsertId(); 
            echo "ok!!";
        } else {
            $id_enseignant = null; 
        }
        
        
        $req = $access->prepare('INSERT INTO utilisateur (username, password, role, id_enseignant) VALUES (?, ?, ?,?)');
        $req->execute(array($username,$password, $role, $id_enseignant
        ));
        $req->closeCursor();
        header("Location: ../enregistrer_user.php");
        exit();
    }
}
function connexion_user($username, $password) {
  if (require("connexion.php")) {
    $req = $access->prepare('SELECT password, role , id_user FROM utilisateur WHERE username = ?');
    $req->execute(array($username));
    
    if ($req->rowCount() == 1) {

      $data = $req->fetch(PDO::FETCH_OBJ);
      $mdp = $data->password;
      $id = $data->id_user;
      // $prenom = $data->prenom;
      $role = $data->role;

      if ($mdp == $password) {
        
        session_start();
        $_SESSION['id'] = $id;
        $_SESSION['role'] = $role;

        if($role=='Administrateur'){
          header("Location: ../accueil.php");
          exit();
        }else{
          header("Location: ../user/accueil.php");
          exit();
        }
        
      } else {
        header("Location: ../index.php");
        exit();
      }
    }
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