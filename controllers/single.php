<?php
require ("../model/AccountManager.php");
require ("../entities/Account.php");

// INSTANTIATION OF AccountManager
$accountManager = new AccountManager();

// WORK WITH GET
if (!empty($_GET['join'])) {
  $id =(int) $_GET['join'];
  $singleClient = $accountManager->getAccount($id);
}


include '../views/singleView.php';
 ?>
