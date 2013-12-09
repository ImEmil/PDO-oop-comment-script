<?php
class C_Handler {
  
  private $s;
  
  public function __construct($pdo) {
    $this->s = $pdo;
  }
  
  public function insertComment($username, $email, $comment) {
    $s = $this->s->prepare("INSERT INTO `comments` (`username`, `email`, `comment`, `timestamp`) VALUES (?, ?, ?, ?) ");
    
    $s->bindValue(1, $username);
    $s->bindValue(2, $email);
    $s->bindValue(3, $comment);
    $s->bindValue(4, time());
    $s->execute();
    
    return true;
	}

}
