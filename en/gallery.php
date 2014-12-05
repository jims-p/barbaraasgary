<?php 
  define('PAGE','gallery')
?><!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Barbara Asgary | Gallery</title>
    <?php include (['DOCUMENT_ROOT'].'../include/head.inc.php'); ?>
  </head>
  <body>
    
    <?php include ('include/header.inc.php'); ?>

    <div class="row">
      <div class="large-12 columns">
        <h3>Gallery</h3>
        <h4>Collection 2007-2012</h4>
        <div class="orbit-container">
          
            <ul data-orbit class="example-orbit-content">
              
              <li data-orbit-slide>
                <div class="panel">
                <ul class="clearing-thumbs" data-clearing>
                  <li><a href="../img/gallery/collection_2007-2012/large/Asgary-2012-001.jpg"><img src="../img/gallery/collection_2004-2006/thumb/Asgary-2012-001.jpg" data-caption="Now (Harnessed) (2012) 48&quot; x 96&quot; - Acrylic & Rope"></a></li>
                  <li><a href="../img/gallery/collection_2007-2012/large/Asgary-2012-044.jpg"><img src="../img/gallery/collection_2004-2006/thumb/Asgary-2012-044.jpg" data-caption="Now (Harnessed) (2012) 48&quot; x 96&quot; - Acrylic & Rope"></a></li>
                </ul>
                </div>
              </li>
              <li data-orbit-slide>
                <div class="panel">
                <ul class="clearing-thumbs" data-clearing>
                  <li><a href="img/gallery/collection_2004-2006/large/Asgary_03-068.jpg"><img src="img/gallery/collection_2004-2006/thumb/Asgary_03-068.jpg"></a></li>
                  <li><a href="img/gallery/collection_2004-2006/large/Asgary_04-001.jpg"><img src="img/gallery/collection_2004-2006/thumb/Asgary_04-001.jpg"></a></li>
                  <li><a href="img/gallery/collection_2004-2006/large/Asgary_04-002.jpg"><img src="img/gallery/collection_2004-2006/thumb/Asgary_04-002.jpg"></a></li>
                </ul>
                </div>
              </li>
              <li data-orbit-slide>
                <div class="panel">
                <ul class="clearing-thumbs" data-clearing>
                  <li><a href="img/gallery/collection_2004-2006/large/Asgary_03-068.jpg"><img src="img/gallery/collection_2004-2006/thumb/Asgary_03-068.jpg"></a></li>
                  <li><a href="img/gallery/collection_2004-2006/large/Asgary_04-001.jpg"><img src="img/gallery/collection_2004-2006/thumb/Asgary_04-001.jpg"></a></li>
                  <li><a href="img/gallery/collection_2004-2006/large/Asgary_04-002.jpg"><img src="img/gallery/collection_2004-2006/thumb/Asgary_04-002.jpg"></a></li>
                </ul>
                </div>
              </li>
              
            </ul>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="large-12 columns">
        <h4>Collection 2004-2006</h4>
        <div class="orbit-container">
          
            <ul data-orbit class="example-orbit-content">
              
              <li data-orbit-slide>
                <div class="panel">
                <ul class="clearing-thumbs" data-clearing>
                  <li><a href="img/gallery/collection_2004-2006/large/Asgary_03-068.jpg"><img src="img/gallery/collection_2004-2006/thumb/Asgary_03-068.jpg" data-caption="caption here..."></a></li>
                  <li><a href="img/gallery/collection_2004-2006/large/Asgary_04-001.jpg"><img src="img/gallery/collection_2004-2006/thumb/Asgary_04-001.jpg"></a></li>
                  <li><a href="img/gallery/collection_2004-2006/large/Asgary_04-002.jpg"><img src="img/gallery/collection_2004-2006/thumb/Asgary_04-002.jpg"></a></li>
                </ul>
                </div>
              </li>
              <li data-orbit-slide>
                <div class="panel">
                <ul class="clearing-thumbs" data-clearing>
                  <li><a href="img/gallery/collection_2004-2006/large/Asgary_03-068.jpg"><img src="img/gallery/collection_2004-2006/thumb/Asgary_03-068.jpg"></a></li>
                  <li><a href="img/gallery/collection_2004-2006/large/Asgary_04-001.jpg"><img src="img/gallery/collection_2004-2006/thumb/Asgary_04-001.jpg"></a></li>
                  <li><a href="img/gallery/collection_2004-2006/large/Asgary_04-002.jpg"><img src="img/gallery/collection_2004-2006/thumb/Asgary_04-002.jpg"></a></li>
                </ul>
                </div>
              </li>
              <li data-orbit-slide>
                <div class="panel">
                <ul class="clearing-thumbs" data-clearing>
                  <li><a href="img/gallery/collection_2004-2006/large/Asgary_03-068.jpg"><img src="img/gallery/collection_2004-2006/thumb/Asgary_03-068.jpg"></a></li>
                  <li><a href="img/gallery/collection_2004-2006/large/Asgary_04-001.jpg"><img src="img/gallery/collection_2004-2006/thumb/Asgary_04-001.jpg"></a></li>
                  <li><a href="img/gallery/collection_2004-2006/large/Asgary_04-002.jpg"><img src="img/gallery/collection_2004-2006/thumb/Asgary_04-002.jpg"></a></li>
                </ul>
                </div>
              </li>
              
            </ul>
        </div>
      </div>
    </div>
    
    
    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/foundation.min.js"></script>
    <script src="../js/foundation/foundation.orbit.js"></script>
    <script src="../js/foundation/foundation.clearing.js"></script>
    <script>
      $(document).foundation('orbit', {
        timer: false,
        slide_number: false
      });
      $(document).foundation();
    </script>
  </body>
</html>
