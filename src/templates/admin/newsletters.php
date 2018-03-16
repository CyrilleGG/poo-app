<?php include "header.php" ?>

<div class="container content">
  <h3>Emails inscrits à la newsletter  <a class="btn btn-default" href="/admin/users/add">Ajouter un email</a></h3>
  <hr>
  <div class="row">
    <div class="span5">
      <table class="table table-striped table-condensed">
            <thead>
            <tr>
              <th>Email</th>
            </tr>
        </thead>
        <tbody>
          <?php foreach($data["newsletters"] as $key => $value) { ?>
            <tr>
              <td><?php echo $value["email"] ?></td>
              <td><a href="/admin/newsletters/update?id=<?php echo $value["id"] ?>">Editer</a></td>
              <td><a href="/admin/newsletters/delete?id=<?php echo $value["id"] ?>" style="color: #ff0000">Supprimer</a></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
      </div>
  </div>
</div>
<?php include "footer.php" ?>
