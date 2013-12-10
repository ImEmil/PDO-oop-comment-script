<?php
/*

                                                   +-+-+-+-+-+-+
                                                   |I|m|E|m|i|l|
                                                   +-+-+-+-+-+-+
                                         
*/

  define("username", "root");
  define("password", "test12321");

  try {
    $c = array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    $s = new PDO('mysql:host=localhost;dbname=test', username, password, $c);
    
    } catch (PDOException $e) {
    
    echo 'Error __> ' . $e->getMessage();
    
  }
