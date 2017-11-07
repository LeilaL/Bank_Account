<?php
require ("../model/AccountManager.php");
require ("../entities/Account.php");

// INSTANTIATION OF AccountManager
$accountManager = new AccountManager();

if (!empty($_POST)) {
  $finances = new Account(
  ['name' => $_POST['name'],
  'amount' => $_POST['amount']]);
  $accountManager->insertAccount($finances);
}

$clients= $accountManager->getAllAccounts();

foreach ($clients as $key => $value) {
  $clients[$key] = new Account($value);
}

// $my_client= new Account($data);



include '../views/indexView.php';
 ?>
