<?php
/*

                                                   +-+-+-+-+-+-+
                                                   |I|m|E|m|i|l|
                                                   +-+-+-+-+-+-+
                                         
*/
  function clean($string) {
    return htmlspecialchars(strip_tags($string));
  }
  
  require('class.config.php');
  require('class.comment_handler.php');
  $s  = new C_HANDLER($s);
