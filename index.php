<?php
  require("engine.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <title>PDO comment Script</title>
  <link rel="stylesheet" type="text/css" href="style.css">

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
  <script src="livestamp.js" type="text/javascript"></script>
  <script src="moment.js" type="text/javascript"></script>
</head>
<body>
  <div id="wrapper">

  <header>
    <h1>PDO comment script</h1>
  </header>
  
  <main>
    <form method="post" action="">
    
      <label for="username">Please type in your username:</label>
      <input type="text" name="username" id="username=" placeholder="Your username" required>
      
      <label for="email">Please type in your email:</label>
      <input type="email" name="email" id="email=" placeholder="example@outlook.com" required>
      
      <label for="comment">Please type in your comment:</label>
      <textarea name="comment" id="comment" placeholder="Your comment here.." required></textarea>
      
      <div align="right">

        <input type="submit" name="post_c" value="Post &raquo;">

      </div>
      
    </form>
    <?php
    if($s->c_form("post_c")) {

       $username = trim(clean($_POST["username"]));
       $email = trim(clean($_POST["email"]));
       $comment = trim(clean($_POST["comment"]));

      if(empty($username) OR empty($email) OR empty($comment)) {

        echo "All fields are required!";

      }
      else {

        $s->insertComment($username, $email, $comment, time(), $_SERVER['REMOTE_ADDR']);
        echo "Your comment has been posted successfully!";

      }
    }

    $getCom = $s->displayComments();
    $count = count($getCom);
    ?>
  </main>

  <section>
  
    <h3 count="<?php echo $count; ?>">Leave a comment!</h3>

  <?php

  foreach ($getCom as $comment) {
    
    echo "<article>
    
      <div class=\"user-time\">{$comment['username']}  <span data-livestamp=\"{$comment['tstamp']}\"></span> </div>
      <div class=\"text\">{$comment['comment']}</div>
      
        </article>";

  }
  ?>

  </section>

  </div>
  
  <footer>Simple comments (PDO OOP) By <a href="https://github.com/ImEmil/" target="_blank">ImEmil</a></footer>
  
</body>
</html>
