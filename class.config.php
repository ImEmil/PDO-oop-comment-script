<?php
/*

                                                   +-+-+-+-+-+-+
                                                   |I|m|E|m|i|l|
                                                   +-+-+-+-+-+-+
                                         
*/

  define("username", "root");
  define("password", "test123");

  try {
  	$s = new PDO('mysql:host=yourHOSThere;dbname=yourDBnameHERE', username, password);
  	array(PDO::ATTR_EMULATE_PREPARES => false, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
    
    } catch (PDOException $e) {
    
    echo 'Error __> ' . $e->getMessage();
    
  }
