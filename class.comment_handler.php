<?php
/*

                                                   +-+-+-+-+-+-+
                                                   |I|m|E|m|i|l|
                                                   +-+-+-+-+-+-+
                                         
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
    return(isset($_POST["{$form}"]) ? true : false);                                                
  }
  
  public function c_null($string) {
    return(trim(is_null($string)) ? true : false);   
  }
  
  public function __destruct() {
    $this->s = null;
  }
    
    
}
