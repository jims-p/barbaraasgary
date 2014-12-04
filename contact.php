<?php 
  define('PAGE','contact')
?>
<?php
    
  
    if(!empty($_POST['envoi'])){

        extract($_POST);
        $valid = true;

        if (empty($name)){
            $valid = false;
            $errorname = "You forgot to write your name";
        }

        if(!preg_match('/^[a-z0-9\-_.]+@[a-z0-9\-_.]+\.[a-z]{2,3}$/i',$email)) {
            $valid = false;
            $resultmessage = "The e-mail address is not valid";
         
        }

        if (empty($email)){
            $valid = false;
            $erroremail = "You forgot to write your e-mail address";
        }

        if (empty($message)){
            $valid = false;
            $errormessage = "You forgot to write your message";
        }

        if ($valid){
            $to = "jim@neoinformatics.com";
            $subject = "Message from ".$name." ,visitor of barbaraasgary.com";
            $header = "";
            $message = stripslashes($message)."\n"."\n";
            $message .= $name."\n";
            $message .= $email."\n";
            $name = stripslashes($name);

            if (mail($to, $subject, $message)) {
                $resultmessage = "Your message is sent successfully";
                unset($name);
                unset($email);
                unset($message);
            }

            else {
                $resultmessage = "An error occured, please try sending your message again";
            }
            // $resultmessage = "Tout est ok";
        }

    }
  
?><!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Barbara Asgary | Contact</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/screen.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
    
    <?php include ($_SERVER['DOCUMENT_ROOT'].'/include/header.inc.php'); ?>

    <div class="row content">
      <div class="large-6 columns">
        <h3>contact</h3>

        <form data-abide id="myform" method="post" action="./contact.php" name="form">
          <div class="name-field">
            <label>Your name <small>required</small>
              <input type="text" required pattern="[a-zA-Z]+">
            </label>
            <small class="error">Name is required and must be a string.</small>
          </div>
          <div class="email-field">
            <label>Email <small>required</small>
              <input type="email" required>
            </label>
            <small class="error">An email address is required.</small>
          </div>
          <div class="message-field">
            <label for="message">Your message <small>required</small>
                <textarea id="message" name="message" required></textarea>
              </label>
            <small class="error">An email address is required.</small>
          </div>
          <!-- <button type="submit" name="envoi">Submit</button> -->
          <input class="button small large-12" type="submit" name="envoi" value="Send Message" />
        </form>

        <!-- <form method="post" name="form">
          <div class="row">
            <div class="large-12 columns">
              <label for="name">Name
                <input id="name" type="text" name="name" value="<?php if (isset($name)) echo $name; ?>" placeholder="large-12.columns" required />
              </label>
              <label>Email
                <input id="email" type="text" name="email" value="<?php if (isset($email)) echo $email; ?>" placeholder="Your email address" required/>
              </label>
              <label for="message">Textarea Label
                <textarea id="message" name="message" placeholder="Your message" required><?php if (isset($message)) echo $message; ?></textarea>
              </label>
            </div>
          </div>
        </form> -->
      </div>
    </div>
    
    
    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>
    <script src="js/foundation/foundation.abide.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
