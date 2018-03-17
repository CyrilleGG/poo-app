<?php include "header.php" ?>

<div id="transactions">
  <h4>Merci, votre adresse a été prise en compte !</h4>
  <hr>
  <div class="container-fluid">
	  <div class="row" style="margin-bottom: 100px">
      <p>Commencez à réflichir au plat que vous voulez commander</p>
    </div>
  
    <div class="container-fluid">
      <div class="row">
        <?php foreach($data["plats"] as $key => $value) { ?>
        <a class="col-3 mx-auto" href="../plat?id=<?php echo $value["id"] ?>">
            <div class="row" style="display: inline-block; overflow: hidden">
              <div class="col-12" style="display: inline-block; overflow: hidden; max-height: 195px">
                <img class="col-12" src="<?php echo $value["image"] ?>" alt="Un <?php echo $value["nom"] ?>">
              </div>
              <h5 class="col-12 mt-4 text-center"><?php echo $value["nom"] ?> ?</h5>
            </div>
        </a>
        <?php } ?>
      </div>
          
          <!-- ici, cliquer sur un des plats renvoie sur la page produit afin de l'ajouter au panier pour payer -->

    </div>
  </div>
</div>

<?php include "footer.php" ?>



<!-- <a href="/plat?id=<?php echo $value["id"] ?>"><?php echo $value["nom"] ?></a> -->