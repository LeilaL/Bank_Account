<?php

class AccountManager {


// CONNECTION BDD
  public function getBdd() {
      $bdd = new PDO('mysql:host=localhost;dbname=;charset=utf8', 'root', 'leilalababsa');
      return $bdd;
  }


// INSERT ACCOUNT IN BDD
 //  public function insertVehicles(vehicle $v){
 //    $req=$this->getBdd()->prepare('INSERT INTO vehicles(id, type, brand, year, color)
 //    VALUES(:id, :type, :brand, :year, :color)');
 //    $req->bindValue(':id', $v->getId());
 //      $req->bindValue(':type', $v->getType(), PDO::PARAM_STR);
 //      $req->bindValue(':brand', $v->getBrand(), PDO::PARAM_STR);
 // $req->bindValue(':year', $v->getYear(), PDO::PARAM_INT);
 // $req->bindValue(':color', $v->getColor(), PDO::PARAM_STR);
 //    $req->execute();
 //    }

// SELECT ALL FROM ACCOUNT TABLE
// public function getAllVehicles(){
// $response=$this->getBdd()->query("SELECT * FROM vehicles");
// $vehicles=$response->fetchAll(PDO::FETCH_ASSOC);
// return $vehicles;
// }

// SELECT A ACCOUNT
// public function getVehicle($id){
// $response=$this->getBdd()->prepare("SELECT * FROM vehicles WHERE id=:id");
// $response->bindValue('id', $id, PDO::PARAM_INT);
// $response->execute();
// $vehicle=$response->fetch(PDO::FETCH_ASSOC);
// $name_Class=ucfirst($vehicle['type']);
// return new $name_Class($vehicle);
// }

// UPDATE INFOS IN BDD
// function updateVehicle($idp){
//   $req=$this->getBdd()->prepare("UPDATE vehicles WHERE vehicles.id = :id");
//   $req->bindValue('id', $idp, PDO::PARAM_INT);
//   $req->execute();
// }


// DELETE INFOS
// function deleteVehicle($id_delete) {
// $req=$this->getBdd()->prepare('DELETE FROM vehicles WHERE vehicles.id= :id');
// $req->bindValue(':id', $id_delete, PDO::PARAM_INT);
// $req ->execute();
// }

// ADD ????

}


 ?>
