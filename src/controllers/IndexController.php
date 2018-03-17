<?php

// Required if your environment does not handle autoloading

/**
 * Page d'accueil
 */
class IndexController {
  public function index($req, $res){
    // Modèle Film
    $plats = new Plat();
    $rows = $plats->find();
    $res->html("index.php", array('plats' => $rows));
  }
}
