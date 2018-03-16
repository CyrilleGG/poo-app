<?php include "header.php" ?>
<div class="container content">
  <h3>Card #<?php echo value($data, "id") ?></h3>
  <hr>
  <div class="row">
    <form method="post" class="form-horizontal">
      <div class="form-group">
        <div class="col-md-6">
            <h6><strong>Card Number</strong></h6>
            <input value="<?php echo value($data, "cardNumber") ?>" name="cardNumber" placeholder="Card Number" class="form-control input-md" type="text">
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-6">
            <h6><strong>Expity Month</strong></h6>
            <input value="<?php echo value($data, "expityMonth") ?>" name="expityMonth" placeholder="Expity Month" class="form-control input-md" type="text">
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-6">
            <h6><strong>Expity Year</strong></h6>
            <input value="<?php echo value($data, "expityYear") ?>" name="expityYear" placeholder="Expity Year" class="form-control input-md" type="text">
        </div>
      </div>
      <div class="form-group">
        <div class="col-md-6">
            <h6><strong>CV Code</strong></h6>
            <input value="<?php echo value($data, "cvCode") ?>" name="cvCode" placeholder="CV Code" class="form-control input-md" type="text">
        </div>
      </div>
      <hr>
      <button type="submit" class="btn btn-default">Submit</button>
      <br>
    </form>
  </div>
</div>
<?php include "footer.php" ?>