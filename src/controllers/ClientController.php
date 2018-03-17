<?php

class ClientController extends BaseController {

  public function index($req, $res){
    //Test si l'utilisateur est logged
    $this->isLoggedClient(array("redirect" => "/client/login"));

    // Load user
    $client = new Client();
    $row = $client->findOne($_SESSION["Authentifié_id"]);
    $res->html("client/index.php", array("client" => $row));
  }

  public function login($req, $res){
    // Page d'authentification
    $client = new Client();
    $res->html("client/login.php", array());
  }

  public function loginPost($req, $res){
    // Récuperation des données à travers de Modèle
    $client = new Client();

    $email = $_POST["email"];
    $password = md5($_POST["password"]);

    $rows = $client->isClient($email, $password);


    // Test si l'adresse et le mot de passe envoyer dans la variable $_POST conrespondent
    // au informations issues de la base de données
    if(($rows["email"] == $email) && ($rows["password"] == $password)){

      // Test Ok, mise à jour de la session afin de se souvenir que cette personne est bien authentifier à travers la session
      $_SESSION["Authentifié_client"] = true;
      $_SESSION["Authentifié_id"] = $rows["id"];
      // Redirection de l'utlisateur vers l'espace membres
      header('Location: /client');
    } else {
      // si les données ne conrespondent pas, nous renvoyions la page de login à travers la vue
      $res->html("client/login.php", array());
    }
  }

  public function logout($req, $res){
    $_SESSION["Authentifié_client"] = 0;
    header('Location: /');
  }

  public function add($req, $res){
    $res->html("client/inscription.php", array());
  }

  public function addPost($req, $res){
    //Test si l'utilisateur est logged
    $client = new Client();
    $client->insert(array(
        'email' => $_POST['email'],
        'password' => md5($_POST['password'])
    ));

    return $this->loginPost($req, $res);

    // $res->html("client/index.php", array());
  }

  public function adresse($req, $res) {
    $livraison = new Livraison();
    $livraison->insert(array(
        'fullName' => $_POST['fullName'],
        'street' => $_POST['street'],
        'streetBonus' => $_POST['streetBonus'],
        'city' => $_POST['city'],
        'region' => $_POST['region'],
        'zipCode' => $_POST['zipCode'],
        'phoneNumber' => $_POST['phoneNumber']
    ));

    $res->html("client/adresse_ok.php", array());
}

}
