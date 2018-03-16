<?php

class PaiementController extends BaseController {

    public function getData() {
        // Attention, il faut renseigner que les champs présents dans la base de données
        return array(
            'cardNumber'    => $_POST['cardNumber'],
            'expityMonth'   => $_POST['expityMonth'],
            'expityYear'    => $_POST['expityYear'],
            'cvCode'        => $_POST['cvCode']
        );
    }

    public function payer($req, $res) {
        $res -> html("paiement.php", array());
    }

    public function confirmation($req, $res) {
        $paiement = new Paiement();
        $paiement->insert(array(
            'cardNumber'    => $_POST['cardNumber'],
            'expityMonth'   => $_POST['expityMonth'],
            'expityYear'    => $_POST['expityYear'],
            'cvCode'        => $_POST['cvCode']
        ));

        $res->html("paiement-confirmation.php", array());
    }

    public function list($req, $res) {
        //Test si l'utilisateur est logged
        $this->isLogged(array("redirect" => "/admin/login"));
        $u = new Paiement();
        $rows = $u->find();
        $res->html("admin/paiements.php", array("paiements" => $rows));
    }

    public function update($req, $res){
    $this->isLogged(array("redirect" => "/admin/login"));
    $paiement = new Paiement();

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $result = $paiement->update($_GET["id"], $this->getData());
        $this->redirect("/admin/paiements");
    } else {
        $row = $paiement->findOne($_GET["id"]);
        $res->html("admin/paiements-update.php", $row);
    }
  }
}