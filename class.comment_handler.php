<?php
/*
 _ _|             ____|            _)  | 
   |   __ `__ \   __|    __ `__ \   |  | 
   |   |   |   |  |      |   |   |  |  | 
 ___| _|  _|  _| _____| _|  _|  _| _| _| 
                                         
*/
class C_Handler {
  
  private $s;
  
  public function __construct($pdo) {
    $this->s = $pdo;
  }
  
  public function insertComment($username, $email, $comment) {
    $values = array( $username, $email, $comment );
    $exc = $this->s->prepare("INSERT INTO `comments` (`username`, `email`, `comment`, `timestamp`) VALUES (?, ?, ?, NOW()")->execute($values);
   
    return true;
  }
    
  public function displayComments() {
    $exc = $this->s->prepare("SELECT * FROM `comments` ORDER BY `timestamp` DESC")->execute();
    
    return $exc->fetchAll();
  }
  
  public function c_form($form) {
   
    if(isset($_POST["{$form}"])) {
      return true;
    }
    
    else {
      return false;
    }
    
  }
  
  public function c_null($string) {
    
    if(trim(is_null($string))) {
      return true;
    }
    
    else {
      return false;
    }
    
  }
    
    
 }
