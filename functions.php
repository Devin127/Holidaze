<?php 
  if(isset($_POST['login'])){
  $name                      = $_POST['name'];
  $surname                   = $_POST['surname'];
  $email                     = $_POST['email'];

  $_SESSION['name']          = $name;
  $_SESSION['surname']       = $surname;
  $_SESSION['email']         = $email;

      // delete 3rd ones
  // $_SESSION['name']       = $_POST['name'];
  // $_SESSION['surname']    = $_POST['surname'];
  // $_SESSION['email']      = $_POST['email'];
  }
  if(isset($_POST['submit'])){
  $checkIn                   = $_POST['checkIn'];
  $checkOut                  = $_POST['checkOut'];
  $islandList                = $_POST['islandList'];

  $_SESSION['checkIn']       = $checkIn;
  $_SESSION['checkOut']      = $checkOut;
  $_SESSION['islandList']    = $islandList;

  // $_SESSION['checkIn']    = $_POST['checkIn'];
  // $_SESSION['checkOut']   = $_POST['checkOut'];
  // $_SESSION['islandList'] = $_POST['islandList'];
  }
?>