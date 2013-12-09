<?php
  define("username", "root");
  define("password", "test123");

  try {
  	$s = new PDO('mysql:host=yourHOSThere;dbname=yourDBnameHERE', username, password);
  	$s->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    } catch (PDOException $e) {
    
    echo 'Couldn't connect to database > error -> ' . $e->getMessage();
    
  }
