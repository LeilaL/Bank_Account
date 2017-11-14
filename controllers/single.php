<?php
require("../model/AccountManager.php");
require("../entities/Account.php");

// INSTANTIATION OF AccountManager
$accountManager = new AccountManager();

// WORK WITH GET
if (!empty($_GET['join'])) {
  $id =(int) $_GET['join'];
  $singleClient = $accountManager->getAccount($id);
  $client = new Account($singleClient);
}



// UPDATE WITHDRAWAL
if (isset($_POST['ok'])) {
  // $account = $accountManager->getAccount($_GET['join']);
  $account = new Account((float)$_POST['amount'], (int)$_POST['id'], (float)$_POST['wd']);
  $account->addCash((float)$_POST['wd']);
  $account->getAmount();
  $accountManager->withDrawalAccount($account);
  // header('Location: index.php');
}


include '../views/singleView.php';
