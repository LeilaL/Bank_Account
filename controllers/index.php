<?php
require("../model/AccountManager.php");
require("../entities/Account.php");

// INSTANTIATION OF AccountManager
$accountManager = new AccountManager();


// INSERT INFOS IN BDD
if (!empty($_POST)) {
  $finances = new Account(
    ['name' => htmlspecialchars($_POST['name']),
    'amount' => (float)htmlspecialchars($_POST['amount'])]
  );
  $accountManager->insertAccount($finances);
  header('Location:index.php');
}

// FOREACH FOR SHOW INFOS
$clients= $accountManager->getAllAccounts();
foreach ($clients as $key => $value) {
  $clients[$key] = new Account($value);
}

// DELETE CARDS
if (isset($_GET['delete'])) {
  $id_delete=(int)$_GET['delete'];
  $accountManager->deleteAccount($id_delete);
  header('Location:index.php');
}





include '../views/indexView.php';
