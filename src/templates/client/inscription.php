<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Deliveroo</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <!-- Optional theme -->
  <!-- Latest compiled and minified JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
  <style>
    body {
      font-family: "Open Sans";
      position: absolute;
      margin-top: 80px;
      width: 100%;
      height: 100%;
      color: #151515;
      padding: 15px;
    }

    #header {
      font-weight: 400;
    }

    .container {
      width: 1000px;
      padding: 0;
      margin: 0;
    }

    .img-mov {
      height: 300px;
    }

    .movies {
      text-align: center;
    }

    .line2 {
      font-size: 12px;
      color: #aaa;
      margin-bottom: 20px;
    }

    a {
      text-decoration: none!important;
    }

  </style>
</head>
<body>

<header>
	<div class="container-fluid fixed-top">
		<div class="row">
      <nav class="col navbar navbar-expand-md navbar-dark bg-success">
        <a class="navbar-brand" href="#">Velideli</a>
      </nav>
		</div>
	</div>
</header>


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
                <button type="submit" class="btn btn-sm btn-success">Se connecter</button>
            </fieldset>
        </form>
    </div>
</div>
</div>

</body>
</html>
