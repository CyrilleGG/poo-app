<?php include "common/header.php" ?>

<div id="transactions">
  <h4>Velideli - Newsletter</h4>
  <hr>
<div class="container">
	<div class="row">
        <div class="span12">
    		<div class="thumbnail center well well-small text-center">
                <h2>Newsletter</h2>
                
                <p>Recevez toute l'actualité de Deliveroo en vous inscrivant à notre newsletter</p>
                
                <form method="post" action="newsletter-inscrit">
                    <div class="input-prepend"><span class="add-on"><i class="icon-envelope"></i></span>
                        <input type="email" id="email" name="email" placeholder="your@email.com">
                    </div>
                    <br />
                    <input type="submit" value="S'inscrire" class="btn btn-success" />
              </form>
            </div>    
        </div>
	</div>
</div>
</div>
<?php include "common/footer.php" ?>
