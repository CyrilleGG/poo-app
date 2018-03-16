<?php include "header.php" ?>


<div class="container content">
  <h3>Utilisateurs <a class="btn btn-default" href="/admin/users/add">Ajouter un user</a></h3>
  <hr>
  <div class="row">
    <div class="span5">
      <table class="table table-striped table-condensed">
        <thead>
          <tr>
            <th>Nom</th>
            <th>Email</th>
            <th>Opérations</th>
          </tr>
        </thead>
        <tbody>
          <p>Hello World</p>
          <?php echo $data["client"] ["nom"]?>
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
