<?php include "header.php";     ?>

<form action="enregistrer.php" method="POST"  >
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nom du produit</label>
    <input type="text" name="nom" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
    <textarea class="form-control" name="desc" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div> 

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Prix</label>
    <input type="number"  name="prix" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Ajouter</button>
</form>


      
<?php include "footer.php";     ?>    