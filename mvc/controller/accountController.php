<?php
require 'connection.php';
require '../Model/account.php';
require '../Model/accountDatabase.php';
if (isset($_POST["login"])) {
  $username = $_POST["user-name"];
  $password = $_POST["password"];
  checkLogin($username,$password);
}
?>