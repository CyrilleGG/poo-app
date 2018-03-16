<?php include "header.php" ?>

<div class="container content">
  <h3>Adresses de livraison</h3>
  <hr>
  <div class="row">
    <div class="span5">
      <table class="table table-striped table-condensed">
            <thead>
            <tr>
              <th>Nom complet</th>
              <th>Adresse postale</th>
              <th>Compléments d'adresse</th>
              <th>Ville</th>
              <th>Region/Province/État</th>
              <th>Code postal</th>
              <th>Numéro de téléphone</th>
            </tr>
        </thead>
        <tbody>
          <?php foreach($data["livraisons"] as $key => $value) { ?>
            <tr>
              <td><?php echo $value["fullName"] ?></td>
              <td><?php echo $value["street"] ?></td>
              <td><?php echo $value["streetBonus"] ?></td>
              <td><?php echo $value["city"] ?></td>
              <td><?php echo $value["region"] ?></td>
              <td><?php echo $value["zipCode"] ?></td>
              <td><?php echo $value["phoneNumber"] ?></td>
              <td><a href="/admin/livraisons/update?id=<?php echo $value["id"] ?>">Editer</a></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
      </div>
  </div>
</div>
<?php include "footer.php" ?>
