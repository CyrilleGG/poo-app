<?php

class LivraisonController extends BaseController {

    public function getData() {
        // Attention, il faut renseigner que les champs présents dans la base de données
        return array(
            'fullName'      => $_POST['fullName'],
            'street'        => $_POST['street'],
            'streetBonus'   => $_POST['streetBonus'],
            'city'          => $_POST['city'],
            'region'        => $_POST['region'],
            'zipCode'       => $_POST['zipCode'],
            'phoneNumber'   => $_POST['phoneNumber']
        );
    }

    public function livrer($req, $res) {
        $res -> html("livraison.php", array());
    }

    public function confirmation($req, $res) {
        $paiement = new Livraison();
        $paiement->insert(array(
            'fullName'      => $_POST['fullName'],
            'street'        => $_POST['street'],
            'streetBonus'   => $_POST['streetBonus'],
            'city'          => $_POST['city'],
            'region'        => $_POST['region'],
            'zipCode'       => $_POST['zipCode'],
            'phoneNumber'   => $_POST['phoneNumber']
        ));

        $res->html("paiement.php", array());
    }

    public function list($req, $res) {
        //Test si l'utilisateur est logged
        $this->isLogged(array("redirect" => "/admin/login"));
        $u = new Livraison();
        $rows = $u->find();
        $res->html("admin/livraisons.php", array("livraisons" => $rows));
    }

    public function update($req, $res){
    $this->isLogged(array("redirect" => "/admin/login"));
    $livraison = new Livraison();

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $result = $livraison->update($_GET["id"], $this->getData());
        $this->redirect("/admin/livraisons");
    } else {
        $row = $livraison->findOne($_GET["id"]);
        $res->html("admin/livraisons-update.php", $row);
    }
  }
}