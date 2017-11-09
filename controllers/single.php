<?php
require ("../model/AccountManager.php");
require ("../entities/Account.php");

// INSTANTIATION OF AccountManager
$accountManager = new AccountManager();

// WORK WITH GET
if (!empty($_GET['join'])) {
  $id =(int) $_GET['join'];
  $singleClient = $accountManager->getAccount($id);
  // var_dump($singleClient);
   $client = new Account($singleClient);
}

// TEST UPDATE
if(isset($_POST['amount']) AND isset($_POST['id'])){
  $retrait=$_POST['amount'];
  $id=$_POST['id'];
  $accountManager->withDrawalAccount($retrait, $id);
header('Location:single.php');
}




include '../views/singleView.php';
 ?>
