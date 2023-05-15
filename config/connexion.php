<?php 
try {
    $access = new PDO("mysql:host=localhost;dbname=vacation","root", "");
    
    $access->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "connexion etablie";
   
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
    die();
}

?>