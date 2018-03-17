<?php include "header.php" ?>


<div class="col-md-4">
<div class="login-panel panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title">S'inscrire en tant que client</h3>
    </div>
    <div class="panel-body">
        <form role="form" method="post">
            <fieldset>
                <div class="form-group">
                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus="">
                </div>
                <div class="form-group">
                    <input class="form-control" placeholder="Mot de passe" name="password" type="password" value="">
                </div>
                <!-- Change this to a button or input when using this as a form -->
                <button type="submit" class="btn btn-sm btn-success">S'inscrire</button>
            </fieldset>
        </form>
    </div>
</div>
</div>

<?php include "footer.php" ?>