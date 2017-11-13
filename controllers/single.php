<?php
require ("../model/AccountManager.php");
require ("../entities/Account.php");

// INSTANTIATION OF AccountManager
$accountManager = new AccountManager();

// WORK WITH GET
if (!empty($_GET['join'])) {
  $id =(int) $_GET['join'];
  $singleClient = $accountManager->getAccount($id);
   $client = new Account($singleClient);
}


// UPDATE WITHDRAWAL
// if(isset($_POST['amount']) AND isset($_POST['id'])){
//   $retrait=$_POST['amount'];
//   $id=$_POST['id'];
//   $accountManager->withDrawalAccount($retrait, $id);
// header('Location:single.php');
// }


// TEST UPDATE RETRAIT
if(isset($_POST['amount']) AND isset($_GET['join'])){
$account = $accountManager->getAccount($_GET['join']);
$newClient = $account->getAmount();

if ($_POST['amount']=$newClient) {
  $account->retrait($_POST['amount']);
  $accountManager->withDrawalAccount($account);
  header('Location:single.php');
}
}


// UPDATE PAYMENT
// if(isset($_POST['credit']) AND isset($_POST['identif'])){
//   $payment=$_POST['credit'];
//   $id=$_POST['identif'];
//   $accountManager->paymentAccount($payment, $id);
// header('Location:single.php');
// }




include '../views/singleView.php';
 ?>
