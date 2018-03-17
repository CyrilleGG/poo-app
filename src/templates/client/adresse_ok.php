<?php include "header.php" ?>

<div id="transactions">
  <h4>Merci, votre adresse a été prise en compte !</h4>
  <hr>
  <div class="container">
	  <div class="row">
      <p>Choisissez maintenant votre plat</p>
    </div>
  
    <div class="container">
      <div class="row">
        <?php foreach($data["plats"] as $key => $value) { ?>
        <div class="col-md-12"><a href="/plat?id=<?php echo $value["id"] ?>"><?php echo $value["nom"] ?></a></div>
        <?php } ?>
      </div>
          
          <!-- ici, cliquer sur un des plats renvoie sur la page produit afin de l'ajouter au panier pour payer -->

    </div>
  </div>
</div>

<?php include "footer.php" ?>