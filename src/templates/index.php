<?php include "common/header.php" ?>

<div id="transactions">
  <h1>Bienvenue sur Velideli</h1>
  <hr style="margin-bottom: 100px">
  <div class="container-fluid">
    <div class="row">

      <?php foreach($data["plats"] as $key => $value) { ?>
      <div class="col-3 mx-auto">
        <div class="row" style="display: inline-block; overflow: hidden">
          <div class="col-12" style="display: inline-block; overflow: hidden; max-height: 195px">
            <img class="col-12" src="<?php echo $value["image"] ?>" alt="Un <?php echo $value["nom"] ?>">
          </div>
          <h5 class="col-12 mt-4 text-center"> <?php echo $value["nom"] ?> ?</h5>
        </div>
      </div>
      <?php } ?>


    </div>
  </div>
</div>
<?php include "common/footer.php" ?>
