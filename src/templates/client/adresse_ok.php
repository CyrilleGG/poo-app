

<div id="transactions">
  <h4>Deliveroo - Livraison</h4>
  <hr>
<div class="container">
	<div class="row">
    Votre adresse a été prise en compte !
	</div>
  <p>Choisissez votre plat</p>
  <div class="container">
    <div class="row">
      <?php foreach($data["plats"] as $key => $value) { ?>
        <div class="col-md-12"><a href="/plat?id=<?php echo $value["id"] ?>"><?php echo $value["nom"] ?></a></div>
      <?php } ?>
    </div>
  </div>
  <a href="../paiement">Passer la commande</a>
</div>
</div>

