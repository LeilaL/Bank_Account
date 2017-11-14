<?php

class AccountManager
{


  // CONNECTION BDD
  public function getBdd()
  {
    $bdd = new PDO('mysql:host=localhost;dbname=Bank_Account;charset=utf8', 'root', 'leilalababsa');
    return $bdd;
  }


  // INSERT ACCOUNT IN BDD
  public function insertAccount(account $a)
  {
    $req=$this->getBdd()->prepare('INSERT INTO accounts(id, name, amount)
    VALUES(:id, :name, :amount)');
    $req->bindValue(':id', $a->getId());
    $req->bindValue(':name', $a->getName(), PDO::PARAM_STR);
    $req->bindValue(':amount', $a->getAmount(), PDO::PARAM_INT);
    $req->execute();
  }

  // SELECT ALL FROM ACCOUNT TABLE
  public function getAllAccounts()
  {
    $response=$this->getBdd()->query("SELECT * FROM accounts");
    $account=$response->fetchAll(PDO::FETCH_ASSOC);
    return $account;
  }

  // SELECT A ACCOUNT
  public function getAccount($id)
  {
    $response=$this->getBdd()->prepare("SELECT * FROM accounts WHERE id=:id");
    $response->bindValue('id', $id, PDO::PARAM_INT);
    $response->execute();
    $account =$response->fetch(PDO::FETCH_ASSOC);
    return $account;
  }


  // DELETE INFOS
  public function deleteAccount($id_delete)
  {
    $req=$this->getBdd()->prepare('DELETE FROM accounts WHERE accounts.id= :id');
    $req->bindValue(':id', $id_delete, PDO::PARAM_INT);
    $req ->execute();
  }

  // WITHDRAWAL ACCOUNT
  public function withDrawalAccount(Account $acc)
  {
    $req=$this->getBdd()->prepare("UPDATE accounts SET amount = :amount WHERE id = :id");
    $req->bindValue('id', $acc->getId(), PDO::PARAM_INT);
    $req->bindValue('amount', $acc->getAmount(), PDO::PARAM_INT);
    $req->execute();
  }

  // PAYMENT ACCOUNT
  // function paymentAccount($amount, $id){
  //   $req=$this->getBdd()->prepare("UPDATE accounts SET amount= amount + :amount WHERE id= :id");
  //   $req->bindValue('id', $id, PDO::PARAM_INT);
  //   $req->bindValue('amount', $amount);
  //   $req->execute();
  // }

  // TRANSFER ACCOUNT TO ANOTHER ACCOUNT
  // FUNCTION QUI APPELLE LES 2 AUTRES FONCTIONS
}
