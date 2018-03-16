<?php

class NewsletterController extends BaseController {

    public function getData() {
        // Attention, il faut renseigner que les champs présents dans la base de données
        return array(
        "email" => $_POST["email"]
        );
    }

    public function inscription($req, $res) {
        $res -> html("newsletter.php", array());
    }

    public function inscrit($req, $res) {
        $newsletter = new Newsletter();
        $newsletter->insert(array(
            'email' => $_POST['email'],
        ));

        $res->html("newsletter-inscrit.php", array());
    }

    public function list($req, $res) {
        //Test si l'utilisateur est logged
        $this->isLogged(array("redirect" => "/admin/login"));
        $u = new Newsletter();
        $rows = $u->find();
        $res->html("admin/newsletters.php", array("newsletters" => $rows));
    }

    public function update($req, $res){
    $this->isLogged(array("redirect" => "/admin/login"));
    $newsletter = new Newsletter();

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        $result = $newsletter->update($_GET["id"], $this->getData());
        $this->redirect("/admin/newsletters");
    } else {
        $row = $newsletter->findOne($_GET["id"]);
        $res->html("admin/newsletters-update.php", $row);
    }
  }

    public function delete($req, $res){
        $this->isLogged(array("redirect" => "/admin/login"));
        $user = new Newsletter();
        $user->delete($_GET["id"]);
        $this->redirect("/admin/newsletters");
    }
}