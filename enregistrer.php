<?php  include "header.php"; 
var_dump($_POST);    ?>    



// INSERT INTO `produit`
// (`id`, `nom`, `description`, `prix`)
//  VALUES (NULL, $_POST['nom'], $_POST['desc'], $_POST['prix']);

// 1 CONNEXION DEJA EN HEADER $bdd

<?php 


$sql = "INSERT INTO produit (id, nom, description, prix)
 VALUES (?,?,?,?)";
$stmt= $bdd->prepare($sql);
$stmt->execute([NULL, $_POST['nom'],  $_POST['desc'], $_POST['prix']]);


?>