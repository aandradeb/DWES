<?php
  $HOST = 'localhost';
  $USERNAME = 'root';
  $PASSWORD = '1234';
  $DATABASE_NAME = 'mysitedb';

  $db = mysqli_connect($HOST, $USERNAME, $PASSWORD, $DATABASE_NAME);     

  if (mysqli_connect_errno()) {
    die("Error: cannot connect with the database '$DATABASE_NAME'");
  }
?>