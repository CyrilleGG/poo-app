<?php include "header.php" ?>

<div class="container content">
  <h3>Paiements</h3>
  <hr>
  <div class="row">
    <div class="span5">
      <table class="table table-striped table-condensed">
            <thead>
            <tr>
              <th>Numéro de carte</th>
              <th>Mois d'expiration</th>
              <th>Année d'expiration</th>
              <th>Code de sécurité</th>
            </tr>
        </thead>
        <tbody>
          <?php foreach($data["paiements"] as $key => $value) { ?>
            <tr>
              <td><?php echo $value["cardNumber"] ?></td>
              <td><?php echo $value["expityMonth"] ?></td>
              <td><?php echo $value["expityYear"] ?></td>
              <td><?php echo $value["cvCode"] ?></td>
              <td><a href="/admin/paiements/update?id=<?php echo $value["id"] ?>">Editer</a></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
      </div>
  </div>
</div>
<?php include "footer.php" ?>
