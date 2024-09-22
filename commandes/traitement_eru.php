<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "the_lotus_rell";

// Créer une connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion a échoué: " . $conn->connect_error);
}

//vérifier si les différents champs éxistes.//
if(isset($_POST['nom']) AND isset($_POST['prix']) AND isset($_POST['lieu']) AND isset($_POST['quantite']) AND isset($_POST['mode']) AND isset($_POST['envoyer'])){
   $nom = $_POST['nom'];
   $prix = $_POST['prix'];
   $lieu = $_POST['lieu'];
   $quantité = $_POST['quantite'];
   $paiement = $_POST['mode'];
   $date_time = date('Y-m-d H:i:s');
   
   $sql = "INSERT INTO commandes (Nom, Prix, Adresse, Quantite, paiementMode, Date_Time)
   VALUES ('$nom', '$prix', '$lieu', '$quantité', '$paiement', '$date_time')";
   
   if ($conn->query($sql) === TRUE) {
       echo "Commande éffectuée avec succès";
   } else {
       echo "Erreur: " . $sql . "<br>" . $conn->error;
   }
   
   $conn->close();
}
?>