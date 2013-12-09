<?php
  require("engine.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>PDO comment Script</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  
  <header>
    <h1>PDO comment script</h1>
  </header>
  
  <main>
    <form method="post" action="">
    
      <label for="username">Please type in your username:</label>
      <input type="text" name="username" id="username=" placeholder="Your username">
      
      <label for="email">Please type in your email:</label>
      <input type="email" name="email" id="email=" placeholder="example@outlook.com">
      
      <label for="comment">Please type in your comment:</label>
      <textarea name="comment" id="comment" placeholder="Your comment here.."></textarea>
      
      <input type="submit" name="post_c" value="Post &raquo;">
      
    </form>
  </main>
  
  <!-- I'll be adding some more code later -->
  <section></section>
  
</body>
</html>
