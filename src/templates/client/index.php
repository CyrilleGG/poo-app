<?php include "header.php" ?>


<div class="container content">
  <h3>Vous voilà identifié - bonjour <?php echo $data["client"] ["nom"]?> </h3>
  <h4>Entrez votre adresse pour être livré</h4>
  <hr>
  <div class="row">
    <div class="span5">
      <table class="table table-striped table-condensed">
        <tbody>
         
        </tbody>
      </table>
    </div>
    <form action="" method="post">
      <input value="<?php echo value($data, "fullName") ?>" name="fullName" placeholder="Nom" class="form-control input-md" type="text">
      <input value="<?php echo value($data, "street") ?>" name="street" placeholder="Rue" class="form-control input-md" type="text">
      <input value="<?php echo value($data, "streetBonus") ?>" name="streetBonus" placeholder="bonus rue" class="form-control input-md" type="text">
      <input value="<?php echo value($data, "city") ?>" name="city" placeholder="Ville" class="form-control input-md" type="text">
      <input value="<?php echo value($data, "region") ?>" name="region" placeholder="Region" class="form-control input-md" type="text">
      <input value="<?php echo value($data, "zipCode") ?>" name="zipCode" placeholder="Code postal" class="form-control input-md" type="text">
      <input value="<?php echo value($data, "phoneNumber") ?>" name="phoneNumber" placeholder="Téléphone" class="form-control input-md" type="text">
      <button type="submit" class="btn btn-default">Submit</button>
    </form>
  </div>
</div>
<?php include "footer.php" ?>
