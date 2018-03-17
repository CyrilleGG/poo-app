<?php include "header.php" ?>

<div id="transactions">
  <h4>Veli Deli - Livraison</h4>
  <hr>
<div class="container">
	<div class="row">
        <div class="col-md-6">
            <div class="row">
                <form method="post" action="/paiement">
                    <div class="row">
                        <div class="col-md-12"><label for="fullName">Nom complet</label></div>
                        <div class="col-md-12"><input type="text" name="fullName" class="form-control" id="fullName"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12"><label for="street">Adresse</label></div>
                        <div class="col-md-12"><input type="text" name="street" class="form-control" id="street" placeholder="Adresse postale"></div>
                        <div class="col-md-12"><input type="text" name="streetBonus" class="form-control" id="streetBonus" placeholder="N° d'appartement, bloc, bâtiment etc."></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12"><label for="city">Ville</label></div>
                        <div class="col-md-12"><input type="text" name="city" class="form-control" id="city"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12"><label for="region">Région/Province/État</label></div>
                        <div class="col-md-12"><input type="text" name="region" class="form-control" id="region"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12"><label for="zipCode">Code postal</label></div>
                        <div class="col-md-12"><input type="text" name="zipCode" class="form-control" id="zipCode"></div>
                    </div>
                    <div class="row">
                        <div class="col-md-12"><label for="phoneNumber">Numéro de téléphone</label></div>
                        <div class="col-md-12"><input type="text" name="phoneNumber" class="form-control" id="phoneNumber"></div>
                    </div>
                    <input type="submit" value="Suivant">
                </form>
            </div>
        </div>
	</div>
</div>
</div>
<?php include "footer.php" ?>
