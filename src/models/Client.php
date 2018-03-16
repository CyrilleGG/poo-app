<?php


class Client extends Model {
  // Nom de la table correspondant dans la base de données database.php
  public $table_name = "clients";

  public function isClient($email, $password){
    $query = $this->dbConnection->from($this->table_name)
      ->select('email, password')
      ->where(array("email" => $email, "password" => $password))
      ->limit(1);
    return $query->fetch();
  }
}
