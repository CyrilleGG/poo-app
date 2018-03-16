<?php include "common/header.php" ?>

<div id="transactions">
  <h4>Deliveroo - Paiement</h4>
  <hr>
  <div class="container">
    <div class="row">
        <div class="col-xs-12 col-md-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title" style="display: inline;font-weight: bold;">
                        Payment Details
                    </h3>
                    <div class="checkbox pull-right" style="margin: 0;">
                        <label>
                            <input type="checkbox" />
                            Remember
                        </label>
                    </div>
                </div>
                <div class="panel-body">
                    <form method="post" action="/paiement-confirmation">
                    <div class="form-group">
                        <label for="cardNumber">
                            CARD NUMBER</label>
                        <div class="input-group">
                            <input type="text" name="cardNumber" class="form-control" id="cardNumber" placeholder="Valid Card Number"
                                required autofocus />
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-7 col-md-7">
                            <div class="form-group">
                                <label for="expityMonth">
                                    EXPIRY DATE</label>
                                <div class="col-xs-6 col-lg-6 pl-ziro" style="padding-left: 0px;">
                                    <input type="text" name="expityMonth" class="form-control" id="expityMonth" placeholder="MM" required />
                                </div>
                                <div class="col-xs-6 col-lg-6 pl-ziro" style="padding-left: 0px;">
                                    <input type="text" name="expityYear" class="form-control" id="expityYear" placeholder="YY" required /></div>
                            </div>
                        </div>
                        <div class="col-xs-5 col-md-5 pull-right">
                            <div class="form-group">
                                <label for="cvCode">
                                    CV CODE</label>
                                <input type="password" name="cvCode" class="form-control" id="cvCode" placeholder="CV" required />
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="Payyy">
                    </form>
                </div>
            </div>
            <ul class="nav nav-pills nav-stacked">
                
                </li>
            </ul>
        </div>
    </div>
  </div>
</div>
<?php include "common/footer.php" ?>
