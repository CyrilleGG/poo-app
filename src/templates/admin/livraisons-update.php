<?php include "header.php" ?>
<div class="container content">
  <h3>Adresse #<?php echo value($data, "id") ?></h3>
  <hr>
  <div class="row">
    <form method="post" class="form-horizontal">
      <div class="form-group">
        <div class="col-md-12">
            <h6><strong>Nom complet</strong></h6>
            <input value="<?php echo value($data, "fullName") ?>" name="fullName" class="form-control input-md" type="text">
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-12">
            <h6><strong>Adresse postale</strong></h6>
            <input value="<?php echo value($data, "street") ?>" name="street" class="form-control input-md" type="text">
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-12">
            <h6><strong>Compléments d'adresse</strong></h6>
            <input value="<?php echo value($data, "streetBonus") ?>" name="streetBonus" class="form-control input-md" type="text">
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-12">
            <h6><strong>Ville</strong></h6>
            <input value="<?php echo value($data, "city") ?>" name="city" class="form-control input-md" type="text">
        </div>
        <div class="form-group">
        <div class="col-md-12">
            <h6><strong>Région/Province/État</strong></h6>
            <input value="<?php echo value($data, "region") ?>" name="region" class="form-control input-md" type="text">
        </div>
        <div class="form-group">
        <div class="col-md-12">
            <h6><strong>Code postal</strong></h6>
            <input value="<?php echo value($data, "zipCode") ?>" name="zipCode" class="form-control input-md" type="text">
        </div>
        <div class="form-group">
        <div class="col-md-12">
            <h6><strong>Numéro de téléphone</strong></h6>
            <input value="<?php echo value($data, "phoneNumber") ?>" name="phoneNumber" class="form-control input-md" type="text">
        </div>
      </div>
      <hr>
      <button type="submit" class="btn btn-default">Submit</button>
      <br>
    </form>
  </div>
</div>
<?php include "footer.php" ?>