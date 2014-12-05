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
    <?php include ('../include/head.inc.php'); ?>
    
  </head>
  <body>
    
    <?php include ('include/header.inc.php'); ?>

    <div class="row content">
      <div class="large-6 columns">
        <h3>contact</h3>

        <form data-abide id="myform" method="post" action="./contact.php" name="form">
          <div class="name-field">
            <label for="name">Your name <small>required</small>
              <input id="name" type="text" name="name" required pattern="[a-zA-Z]+" value="<?php if (isset($name)) echo $name; ?>">
            </label>
            <small class="error">You forgot to write your name.</small>
          </div>
          <div class="email-field">
            <label for="email">Your email address <small>required</small>
              <input id="email" name="email" type="email" required value="<?php if (isset($email)) echo $email; ?>">
            </label>
            <small class="error">An email address is required.</small>
          </div>
          <div class="message-field">
            <label for="message">Your message <small>required</small>
                <textarea id="message" name="message" rows="8" required><?php if (isset($message)) echo $message; ?></textarea>
              </label>
            <small class="error">You forgot to write your message.</small>
          </div>
          <button type="submit" name="envoi">Send Message</button>
          <!-- <input class="button small large-12" type="submit" name="envoi" value="Send Message"> -->
        </form>
      </div>
      <div class="large-6 columns">
        <h3>sales conditions</h3>
        <h5>Price:</h5>
        <p>Contact us to receive the price and further information.</p>
        <h5>Payment information:</h5>
        <p>Mail a letter including your name, mailing address, phone number, e-mail address, picture number as shown on the website, a money order or cashier check for the full amount to the artist’s name: Barbara Asgary.</p>
        <h5>Shipping information:</h5>
        <p>The artwork will be shipped via an international courier company or Canada postal service.<br><br>The artwork is generally shipped within 3 business days from receiving the full payment.<br><br>The shipping cost will be included in the purchase price.</p>
        <h5>Return policy:</h5>
        <p>Should the purchaser return the artwork in the original condition within 3 business days after receiving, then, the seller will reimburse 80% of the purchase price in the form of a money order or cashier’s check in the name of the purchaser. To cover the cost of the packaging, shipping and handling, the artist will retain 20% of the purchase price.</p>
      </div>
    </div>
    
    
    
    <script src="../js/vendor/jquery.js"></script>
    <script src="../js/foundation.min.js"></script>
    <script src="../js/foundation/foundation.abide.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
