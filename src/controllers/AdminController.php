<?php

class AdminController extends BaseController {

  public function index($req, $res){
    //Test si l'utilisateur est logged
    $this->isLogged(array("redirect" => "/admin/login"));

    // Load user
    $user = new Client();
    $rows = $user->find();
    $res->html("admin/index.php", array("users" => $rows));
  }
}
