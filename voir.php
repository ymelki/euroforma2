<?php include "header.php";     ?>    

      <p class="h1">Bienvenue sur notre site</p>

 Afficher un produit spécifique 
<?php
 // Récupère les données de la table produits
 $id=$_GET['id'];
 echo $id;
$requete1 = "SELECT * FROM produit WHERE  id=".$id;

// le prepare (avec le execute) est comme un query mais beaucoup plus sécurisé (voir ci-dessous)
// l'opérateur flèche -> permer d'accéder aux éléments d'une classe (méthode ou attribut)
$resultat = $bdd->prepare($requete1);
$resultat->execute();


?>

<div class="row row-cols-1 row-cols-md-3 g-4">

<?php  
  while($ligne = $resultat->fetch()) { 

    ?>
  <div class="col">
    <div class="card h-100">
      <img src="..." class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?= $ligne['nom']." ". $ligne['prix']." € "?></h5>
        <p class="card-text"><?= $ligne['description'] ?></p>
      </div>
    </div>
  </div>

  <?php
	}  

  ?>
      
<?php include "footer.php";     ?>    