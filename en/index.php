<?php 
  define('PAGE','home')
?><!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Barbara Asgary | Welcome</title>
    <?php include ('../include/head.inc.php'); ?>
  </head>
  <body>

    <div class="row home">
      <div class="large-12 columns">
        <div class="large-8 columns cover-side">
          <img src="../img/homecover.png" alt="Barbara Asgary arts">
        </div>
        <div class="large-4 columns text-side">
          <h1 class="big-logo"><span>Barbara</span><br><span>Asgary</span></h1>
          <ul class="side-nav">
            <li><a href="gallery.php">gallery</a></li>
            <li><a href="bio.php">bio</a></li>
            <li><a href="exhibitions.php">exhibitions</a></li>
            <li><a href="contact.php">contact</a></li>
          </ul>
        </div>
      </div>
    </div>
    
    
    
    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
